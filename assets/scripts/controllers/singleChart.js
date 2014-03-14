'use strict';

truedashApp.controller('SingleChartCtrl', function ($scope, restTruedash) {
    $scope.barType = 'line';

   	$scope.chartConfig = {
        options: {
            chart: {
                type: 'line'
            }
        },

        series: [],

        title: {
            text: 'Manjit\'s first Angular HighChart'
        },

        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
                day: '%e of %b'
            }
        },

        legend: {
            enabled: false
        },

        loading: false,

        exporting: {
            csv: {
                dateFormat: '%Y-%m-%d'
            }
        }
    },

    $scope.swapChartType = function (param) {
        this.barType = param;
        this.chartConfig.options.chart.type = param;
    }

    $scope.pullData = function() {
        restTruedash.getData().then(function(data) {
            if (!data || !data.data[0].length) return;

            var firstRange = data.data[0];

            $scope.chartConfig.series.push({
                data: firstRange.map(function(item) {
                    return [(new Date(item.createdDate)).getTime(), item.price];
                })
            });
        });
    }

    $scope.pullData();

    $scope.$on('datesChanged', function(event, x) {
        $scope.pullData();
    });

});
