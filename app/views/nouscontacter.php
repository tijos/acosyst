<div class="jumbotron text-center">
	<h3>Nous contacter</h3>
	<form name="contactForm">
	

		<div ng-controller="SelectAsyncController" layout="column" layout-align="center center" style="padding:40px" ng-cloak>
		
		  <div layout="column" layout-align="center center">
		    <md-select placeholder="Objet de votre message" ng-model="user" md-on-open="loadUsers()" style="min-width: 200px;">
		      <md-option ng-value="user" ng-repeat="user in users">{{user.name}}</md-option>
		    </md-select>
<!-- 		    <p class="md-caption">You have assigned the task to: {{ user ? user.name : 'No one yet' }}</p> -->
		    <p>
		    hha: {{data}}
		    </p>
		  </div>
		</div>

		

		<div ng-controller="DemoCtrl as ctrl" layout="column" ng-cloak>
		  <md-content class="md-padding">
		    <form ng-submit="$event.preventDefault()" name="searchForm">
		      <div layout-gt-sm="row">
		        <md-input-container flex>
		          <label>Nom</label>
		          <input type="text"/>
		        </md-input-container>

		      </div>
		    </form>
		  </md-content>
		</div>

		
	
   		<label>Nom : </label><input type="text" ng-model="firstname"><br />
   		<label>Pr&eacute;nom :</label> <input type="text" ng-model="prenom"> <br />
   		<label>Email :</label> <input type="email" ng-model="email"> <br/>
   		<label>T&eacute;lephone :</label> <input type="email" ng-model="email"> <br/>
   		<label>Entreprise :</label> <input type="email" ng-model="email"> <br/>
   		<label>Votre m&eacute;ssage :</label> <textarea rows="" cols="" ng-model="msg"> 
   		</textarea>
   		<br/>
<!--    		<input type="submit" name="envoyer" id="envoyerBouton" value="Envoyer " tabindex="2" class="btn btn-primary"> -->
   		<button style="margin-top: 15px;" class="btn btn-primary">Envoyer</button>
  	</form>
  		
</div>