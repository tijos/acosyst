

var bbpApp = angular.module('bbpApp', ['ngAnimate',
//'ngCookies','ngResource',
                                     'ngRoute',
                                     'ngMaterial', 
                                     'ngMessages' 
                                   //  'material.svgAssetsCache'
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
   .when('/nouscontacter', {
        templateUrl: 'views/nouscontacter.php',
        controller: 'nousContacterControl',
        controllerAs: 'nosmetiers'
      })
     
    .when('/contact', {
        templateUrl: 'views/contact.php',
        controller: 'contactControl',
        controllerAs: 'contact'
      })
    .when('/abonnement', {
        templateUrl: 'views/abonnement.php',
        controller: 'abonnementControl',
        controllerAs: 'abonnement'
      })
        
	  .when('/offresEmploi', {
	    templateUrl: 'views/offresEmploi.php',
	    controller: 'offresEmploiControl',
	    controllerAs: 'offresEmploi'
	  })
	  .when('/inscription', {
	    templateUrl: 'views/inscription.php',
	    controller: 'inscriptionControl',
	    controllerAs: 'inscription'
	  })
	  .when('/connexion', {
	    templateUrl: 'views/connexion.php',
	    controller: 'connexionControl',
	    controllerAs: 'connexion'
	  })
	  
	  .when('/apropos-acosyst', {
        templateUrl: 'views/apropos.php',
        controller: 'aproposControl',
        controllerAs: 'apropos'
      })
      
      .when('/nosclients', {
        templateUrl: 'views/nosclients.php',
        controller: 'nosclientsControl',
        controllerAs: 'apropos'
      })
     
   .otherwise({
      redirectTo: '/'
   });
	
}]);



bbpApp.controller("HomeCtrl", function ($scope)
  {
   $scope.maVariable2="Hello World hihi  ha!";
  });

bbpApp.controller("nousContacterControl", function ($scope)
  {
	$scope.maVariable="Hello World hihi !";
   
  });

bbpApp.controller("nosMetiersControl", function ($scope)
{
	  $scope.maVariable2="Nos metiers !";
 
});

bbpApp.controller("contactControl", function ($scope)
{
	  $scope.maVariable2="J'ai une question !";
 
});


bbpApp.controller("abonnementControl", function ($scope)
{
	  $scope.maVariable2="Je m'abonne aux alertes email !";
 
});

bbpApp.controller("offresEmploiControl", function ($scope)
{
	  $scope.maVariable2="Offres emploi !";
 
});

bbpApp.controller("inscriptionControl", function ($scope)
{
	  $scope.maVariable2="inscription !";
 
});

bbpApp.controller("connexionControl", function ($scope)
{
	  $scope.maVariable2="connexion !";
 
});

bbpApp.controller("aproposControl", function ($scope)
{
	  $scope.maVariable2="apropos !";
 
});



bbpApp.controller("nosclientsControl", function ($scope)
{
	  $scope.maVariable2="Nos clients !";
 
});



(function () {
  'use strict';
  
  bbpApp.controller('DemoCtrl', DemoCtrl);
  function DemoCtrl ($timeout, $q) {
    var self = this;
    // list of `state` value/display objects
    self.states        = loadAll();
    self.selectedItem  = null;
    self.searchText    = null;
    self.querySearch   = querySearch;
    // ******************************
    // Internal methods
    // ******************************
    /**
     * Search for states... use $timeout to simulate
     * remote dataservice call.
     */
    function querySearch (query) {
      var results = query ? self.states.filter( createFilterFor(query) ) : self.states;
      var deferred = $q.defer();
      $timeout(function () { deferred.resolve( results ); }, Math.random() * 1000, false);
      return deferred.promise;
    }
    /**
     * Build `states` list of key/value pairs
     */
    function loadAll() {
      var allStates = 'Alabama, Alaska, Arizona, Arkansas, California, Colorado, Connecticut, Delaware,\
              Florida, Georgia, Hawaii, Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana,\
              Maine, Maryland, Massachusetts, Michigan, Minnesota, Mississippi, Missouri, Montana,\
              Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Carolina,\
              North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina,\
              South Dakota, Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia,\
              Wisconsin, Wyoming';
      return allStates.split(/, +/g).map( function (state) {
        return {
          value: state.toLowerCase(),
          display: state
        };
      });
    }
    /**
     * Create filter function for a query string
     */
    function createFilterFor(query) {
      var lowercaseQuery = angular.lowercase(query);
      return function filterFn(state) {
        return (state.value.indexOf(lowercaseQuery) === 0);
      };
    }
  }
})();


/*
bbpApp.controller('myCtrl', function($scope, $http) {
  $http.get("ajax/objetContact.php")
  .then(function(response) {
      $scope.content = response.data;
      $scope.statuscode = response.status;
      $scope.statustext = response.statusText;            
  });
});

*/

//angular.module('bbpApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
bbpApp.controller('SelectAsyncController', function($timeout, $scope) {
  $scope.user = null;
  $scope.users = null;
  $scope.data = null;
  

  $scope.loadUsers = function() {

    // Use timeout to simulate a 650ms request.
    return $timeout(function() {
   
      $scope.users =  $scope.users  || [
        { id: 1, name: 'Scooby Doo' },
        { id: 2, name: 'Shaggy Rodgers' },
        { id: 3, name: 'Fred Jones' },
        { id: 4, name: 'Daphne Blake' },
        { id: 5, name: 'Velma Dinkley' }
      ];

    }, 650);
  };
});



bbpApp.controller('customersCtrl', function($scope, $http) {
    $http.get("ajax/objetContact.php").then(function(response) {
        $scope.myData = response.data.records;
        $scope.users = response.data.records;
    });
});


bbpApp.directive('slideable', function () {
    return {
        restrict:'C',
        compile: function (element, attr) {
            // wrap tag
            var contents = element.html();
            element.html('<div class="slideable_content" style="margin:0 !important; padding:0 !important" >' + contents + '</div>');

            return function postLink(scope, element, attrs) {
                // default properties
                attrs.duration = (!attrs.duration) ? '1s' : attrs.duration;
                attrs.easing = (!attrs.easing) ? 'ease-in-out' : attrs.easing;
                element.css({
                    'overflow': 'hidden',
                    'height': '0px',
                    'transitionProperty': 'height',
                    'transitionDuration': attrs.duration,
                    'transitionTimingFunction': attrs.easing
                });
            };
        }
    };
})
bbpApp.directive('slideToggle', function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            var target = document.querySelector(attrs.slideToggle);
            attrs.expanded = false;
            element.bind('click', function() {
                var content = target.querySelector('.slideable_content');
                if(!attrs.expanded) {
                    content.style.border = '1px solid rgba(0,0,0,0)';
                    var y = content.clientHeight;
                    content.style.border = 0;
                    target.style.height = y + 'px';
                } else {
                    target.style.height = '0px';
                }
                attrs.expanded = !attrs.expanded;
            });
        }
    }
});


/*

bbpApp.directive('myDirective', myDirective);

		function myDirective() {           
		  return {
		   restrict: 'A',
		   link: clicker
		 }

		function clicker() {
			
			var entetedevise = $('.entetedevise');
			


			$(entetedevise).bind('click', function() {
				$("body, html").animate({scrollTop: 1000}, "slow");			
			})

//			$(contact).bind('click', function() {
//				$("body, html").animate({scrollTop: 1000}, "slow");			
//			})
     }
		}

*/

		bbpApp.directive('equalsTo', [function () {
/*bbpApp
 * <input type="password" ng-model="Password" />
 * <input type="password" ng-model="ConfirmPassword" equals-to="Password" />
 */
return {
    restrict: 'A', // S'utilise uniquement en tant qu'attribut
    scope: true,
    require: 'ngModel',
    link: function (scope, elem, attrs, control) {
        var check = function () {
            //Valeur du champs courant 
            var v1 = scope.$eval(attrs.ngModel); // attrs.ngModel = “ConfirmPassword”

            //valeur du champ à comparer
            var v2 = scope.$eval(attrs.equalsTo).$viewValue; // attrs.equalsTo = “Password”

            return v1 == v2;
        };

        scope.$watch(check, function (isValid) {
            // Défini si le champ est valide
            control.$setValidity("equalsTo", isValid);
        });
    }
};
}]);
