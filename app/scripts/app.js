

var bbpApp = angular.module('bbpApp', ['ngAnimate',
//'ngCookies','ngResource',
                                     'ngRoute'
                                    // 'ngSanitize','ngTouch'
                                   ]);


bbpApp.config(['$routeProvider', function($routeProvider) {
   $routeProvider
   
  .when('/', {
      templateUrl: 'views/home.php', 
      controller: 'HomeCtrl',
      controllerAs: 'home'
   })
   
   .when('/about', {
        templateUrl: 'views/about.php',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      
   .when('/nosmetiers', {
        templateUrl: 'views/nosmetiers.php',
        controller: 'nosMetiersControl',
        controllerAs: 'nosmetiers'
      })
   
   .otherwise({
      redirectTo: '/'
   });
	
}]);

