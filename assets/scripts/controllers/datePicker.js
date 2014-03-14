'use strict';

truedashApp.controller('DatePickerCtrl', function ($scope, $filter, restTruedash, $location, dateService, cfg) {
	$scope.dateRange = '';
	$scope.ranges = cfg.dateRanges;

	$scope.freqRanges = cfg.freqRanges;

	$scope.comparePeriods = cfg.comparePeriods;

	$scope.freqRangeSelected     = $scope.freqRanges[0].value;
	$scope.comparePeriodSelected = $scope.comparePeriods[0].value;

	$scope.dateRanges = [
		{from: '', to: ''},
		{from: '', to: ''}
	]

	$scope.initializeDates = function() {
		var dates = restTruedash.getDates(true);
		if (dates && dates.from && dates.to) {
			$scope.dateRanges[0].from = dates.from;
			$scope.dateRanges[0].to   = dates.to;
			$scope.rangeSelected      = 'custom';
		}
		else {
			$scope.rangeSelected = $scope.ranges[0].value;
		}

	}

	$scope.initializeDates();

    $scope.getFirstDateRange = function(returnDateObjects) {
    	return dateService.parseFirstDateRange({
	    			selected: $scope.rangeSelected,
	    			dates: $scope.dateRanges[0]
    			}, returnDateObjects);
    }

    $scope.getSecondDateRange = function(returnDateObjects) {
    	return dateService.parseSecondDateRange({
	    			selected: $scope.comparePeriodSelected,
	    			compare: $scope.compare,
	    			dates: $scope.dateRanges
    			}, returnDateObjects);
    },

	$scope.apply = function() {
		var dates = $scope.getFirstDateRange(true);
		var dates2 = $scope.getSecondDateRange(true);
		restTruedash.setDates(dates[0], dates[1], dates2[0], dates2[1]);
	}

});
