

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
   .when('/nouscontacter', {
        templateUrl: 'views/nouscontacter.php',
        controller: 'nousContacterControl',
        controllerAs: 'nosmetiers'
      })
     
    .when('/aide', {
        templateUrl: 'views/aide.php',
        controller: 'aideControl',
        controllerAs: 'aide'
      })
    .when('/abonnement', {
        templateUrl: 'views/abonnement.php',
        controller: 'abonnementControl',
        controllerAs: 'abonnement'
      })
     
	  .when('/covoiturage', {
	    templateUrl: 'views/covoiturage.php',
	    controller: 'covoiturageControl',
	    controllerAs: ' covoiturage'
	  })
	  
	.when('/locationVente', {
	    templateUrl: 'views/locationVente.php',
	    controller: 'locationVenteControl',
	    controllerAs: 'locationVente'
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
   .otherwise({
      redirectTo: '/'
   });
	
}]);



bbpApp.controller("HomeCtrl", function ($scope)
  {
   $scope.maVariable2="Hello World hihi !";
  });

bbpApp.controller("nousContacterControl", function ($scope)
  {
	$scope.maVariable="Hello World hihi !";
   
  });

bbpApp.controller("nosMetiersControl", function ($scope)
{
	  $scope.maVariable2="Nos metiers !";
 
});

bbpApp.controller("aideControl", function ($scope)
{
	  $scope.maVariable2="J'ai une question !";
 
});


bbpApp.controller("abonnementControl", function ($scope)
{
	  $scope.maVariable2="Je m'abonne aux alerte email !";
 
});

bbpApp.controller("covoiturageControl", function ($scope)
{
	  $scope.maVariable2="covoiturage !";
 
});

bbpApp.controller("locationVenteControl", function ($scope)
{
	  $scope.maVariable2="location vente !";
 
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







bbpApp.directive('equalsTo', [function () {
/*
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
