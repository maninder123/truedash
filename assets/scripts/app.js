'use strict';

var truedashApp = angular.module('truedashApp', ['nvd3ChartDirectives', 'ngRoute', 'highcharts-ng', 'ui.bootstrap', 'ui.sortable', 'restangular'])
  .config(function($routeProvider, RestangularProvider) {
    $routeProvider
      .when('/singlechart', {
        templateUrl: 'views/singleChart/singleChart.html',
        controller: 'SingleChartCtrl'
      })
      .when('/multiplecharts', {
        templateUrl: 'views/multipleCharts/multipleCharts.html',
        controller: 'MultipleChartsCtrl'
      })

      RestangularProvider.setBaseUrl('http://jbossews-manjit.rhcloud.com/truedash/item/showDimensionalItems');
  });

truedashApp.filter('group', function() {
    /**
     * splits an array into groups of the given size
     * e.g. ([1, 2, 3, 4, 5], 2) -> [[1, 2], [3, 4], [5]]
     */
    return function(array, groupSize) {
        return _.groupBy(array, function(val, index) {
            return Math.floor(index / groupSize);
        });
    }
});


