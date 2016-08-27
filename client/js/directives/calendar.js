(function(angular) {
  'use strict';
angular.module('expenseManager')
  .directive('calendar', function() {
    return {
      restrict: 'E',
      templateUrl: './client/views/components/calendar.php',
      controller: 'calendarCtrl',
      controllerAs: 'cc'
    };
  });
})(window.angular);