'use strict';

var bbpAp = angular.module('bbpApp', [
                                       'ngAnimate',
//                                     'ngCookies',
//                                     'ngResource',
                                     'ngRoute'
                                    // 'ngSanitize',
                                    // 'ngTouch'
                                   ]);

bbpAp.controller("headerCtrl", function($scope){
    //...    
});

bbpAp.controller("footerCtrl", function($scope){
    //...    
});

bbpAp.controller("menuCtrl", function($scope){
    //...    
});

bbpAp.controller("contentCtrl", function($scope){
    //...    
});

bbpApp.controller("nosMetiersControl", function ($scope)
{
	  $scope.maVariable2="Nos metiers !";
 
});

bbpAp.controller("homeCtrl", function ($scope)
{
	  $scope.maVariable2="Home !";
 
});


//bbpAp.controller("aproposCtrl", function ($scope)
//{
//	  $scope.maVariable2="apropos !";
// 
//});

bbpAp.controller("HomeCtrl", function ($scope)
  {
   $scope.maVariable2="Hello World hihi !";
  });

bbpApp.controller("monControl", function ($scope)
  {
	$scope.maVariable="Hello World hihi !";
   
  });

