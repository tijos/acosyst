 <!doctype html>
<html>
    <head>
    	<title>ACOSYST</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="static/images/icon.ico">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<script src="scripts/jquery-1.11.0.min.js"></script>
    	<script src="scripts/bootstrap.min.js"></script>

    	<script>
    window.onload = function() {
    	//$(".container").append( "<p>Heyo!</p>" );
    }
    
</script>
		  
<!-- 		<script src="scripts/angular.min.js"></script> -->
<!-- 		<script src="scripts/angular-animate.js"></script> -->
<!-- 		<script src="scripts/angular-route.min.js"></script> -->
		
  
    </head>
    <body ng-app="bbpApp" ng-controller="HomeCtrl">
		<div class="container">
		
<!-- 	        <section ng-controller="headerCtrl"> -->
				<?php include 'common/head.php'; ?>
<!-- 	        </section> -->

<!--         <section ng-controller="contentCtrl">  -->
	        
	        <!-- Le contenu -->
	
		      <div class="containerr">
			    <div id="test" ng-view="" autoscroll="true"></div>
			    
			  </div>
	
<!-- 	        </section> -->
	
<!-- 	        <section ng-controller="footerCtrl"> -->
				<?php include 'common/footer.php';?>
	
<!-- 	        </section> -->
		</div>
    </body>
<!--     <script  src="https://code.angularjs.org/1.4.9/angular.js"></script> -->
<!--     <script  src=" https://code.angularjs.org/1.4.9/angular-route.js"></script> -->
   
<!--   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>  -->
<!--   <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular-route.js"></script>  -->
<!-- 	<script src="scripts/angular.min.js"></script> -->
     <script src="scripts/angular.js"></script> 
     <script src="scripts/angular-animate.js"></script> 
<!--      <script src="scripts/angular-route.min.js"></script> -->
    <script src="scripts/angular-route.js"></script>
  
  
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.2/angular-messages.js"></script>

	  <!-- Angular Material Library -->
	 <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
	 <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-sanitize.js"></script>
  
     <script src="scripts/acosyst.js"></script> 
     
     <link rel="stylesheet" href="static/styles/bootstrap-3.3.6/css/bootstrap.min.css"> 
     <link rel="stylesheet" href="static/styles/bbp_globalStyle.css">	
     <script src="scripts/controllers/controllers.js"></script>
<!--      <script src="scripts/controllers/nosmetiers.js"></script>  -->
<!--     <link rel="stylesheet" href="static/styles/style.css"> -->
   
 
<!--     <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>  -->
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
</html>  
