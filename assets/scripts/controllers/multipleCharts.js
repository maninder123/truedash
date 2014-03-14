'use strict';

truedashApp
  .controller('MultipleChartsCtrl', function ($scope, $filter, restTruedash, $location) {
	    $scope.dataSets = [
	    	[10, 15, 12, 8, 7, 20, 2, 5, 6, 7, 22],
	    	[10, 15, 11, 2, 4, 55, 112, 5, 8],
	    	[10, 22, 89, 54, 111, 23, 3, 3, 3, 45, 45, 65],
	    	[323, 435, 234, 22, 555, 666, 777, 121],
	    	[436, 777, 111, 222, 232, 334, 334, 444, 555, 555, 78, 65, 45, 34, 32, 100],
	    	[10, 22, 8, 54, 1, 23, 3, 6, 43, 15, 45, 65],
	    	[10, 15, 11, 234, 22, 23],
	    	[66, 11, 9, 14, 145, 23, 65, 1, 1, 6],
	    ],

	    $scope.types = ['line', 'bar', 'pie'];

		$scope.getDateRange = function() {
			var start = new Date();
			start.setMonth(0);
			start.setDate(1);

			var end = new Date();
			end.setMonth(11);
			end.setDate(31);

			return {
				start: start,
				end: end
			};
		}

		$scope.dateRange = $scope.getDateRange();

		$scope.showSingleChart = function() {
			restTruedash.setDates($scope.dateRange.start, $scope.dateRange.end);
			$location.path('/singlechart');
			$scope.$apply();
		}

	    $scope.getChartConfig =  function(dataSet, id) {
	    	return {
	    		title: {
	    			text: id + 1
	    		},
		        options: {
		            chart: {
		                type: $scope.types[_.random(2)],
		                events: {
					        click: function () {
					        	$scope.showSingleChart();
					        },
					        selection: function() {
								$scope.showSingleChart();
							}
					    }
		            }
		        },

		        series: [{
		            data: dataSet,
		            pointStart: Date.UTC(2010, 0, 1),
		            pointInterval: 30 * 24 * 3600 * 1000 // one day
		        }],

		        xAxis: {
		            type: 'datetime',
		            dateTimeLabelFormats: {
		                day: '%e of %b'
		            }
		        }
		    }
	    }

	    $scope.chartData = [];

	    $scope.dataSets.forEach(function(value, index) {
	    	$scope.chartData.push($scope.getChartConfig(value, index))
	    });

	    $scope.sortableOptions = {
	    	connectWith: ".connect"/*,
		    update: function( event, ui ) {console.log($scope.chartData.map(function(item) {return item.title.text}));},
		     tolerance: 'pointer'*/
	  	};

	  	$scope.colSize = 3;
	  	$scope.spanSize = 4;

	  	$scope.setColSize = function(val) {
	  		$scope.colSize = val;
	  		$scope.spanSize = 12 / val;
	    	$scope.chartDataFiltered = $filter('group')($scope.chartData, Math.ceil($scope.dataSets.length/$scope.colSize));
	  	};

	    $scope.chartDataFiltered = $filter('group')($scope.chartData, Math.ceil($scope.dataSets.length/$scope.colSize));

});
