'use strict';



truedashApp.factory('restTruedash', function(
  Restangular, $q, $filter, $rootScope, dateService) {

  var restTruedash = {};

  restTruedash.setDates = function(from, to, from2, to2) {
    if (!restTruedash.params) restTruedash.params = {};

    /*if (_.isObject(from)) from = $filter('date')(from, 'yyyy-MM-dd');
    if (_.isObject(to)) to     = $filter('date')(to, 'yyyy-MM-dd');*/

    restTruedash.params.from  = from;
    restTruedash.params.to    = to;

    restTruedash.params.from2 = from2;
    restTruedash.params.to2   = to2;

    $rootScope.$broadcast('datesChanged');
  };

  restTruedash.getDates = function(toObject) {
    if (!restTruedash.params) return false;

    var from  = restTruedash.params.from;
    var to    = restTruedash.params.to;

    var from2 = restTruedash.params.from2;
    var to2   = restTruedash.params.to2;

    if (!toObject) {
      if (_.isObject(from)) var from = $filter('date')(from, 'yyyy-MM-dd');
      if (_.isObject(to)) var to     = $filter('date')(to, 'yyyy-MM-dd');

      if (_.isObject(from2)) var from2 = $filter('date')(from2, 'yyyy-MM-dd');
      if (_.isObject(to2)) var to2     = $filter('date')(to2, 'yyyy-MM-dd');
    }

    return {
      from: from,
      to: to,
      from2: from2,
      to2: to2,
    };
  };

  restTruedash.isDatesValid = function() {
    var dates = restTruedash.getDates();
    return dates && dates.to && dates.from;
  };

  restTruedash.getData = function() {
    // if params are missing, resolve to undefined
    if (!restTruedash.isDatesValid()) {
      var ret = $q.defer();
      ret.resolve(undefined);
      return ret.promise;
    }

    return Restangular.all('showItems').getList(restTruedash.getDates()).then(function(data){
      var res = {};
      res.data = data;
      res.startDate = truedashApp.Date.parse(restTruedash.params.from).getTime();
      return res;
    });
  };


  return restTruedash;

});