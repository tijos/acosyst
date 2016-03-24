<div class="jumbotron text-center" style="background-color : white;">
	<h3 class="urgence">Compl&eacute;t&eacute;z ce formulaire pour nous contacter</h3>
	<form ng-submit="$event.preventDefault()"  name="contactForm">

		<div ng-controller="DemoCtrl as ctrl" layout="column" ng-cloak>
		  <md-content class="md-padding">
		    
		    <div ng-controller="SelectAsyncController" layout="column" layout-align="center center" ng-cloak>
		
			  <div layout="column" layout-align="center center">
			    <md-select placeholder="Objet de votre message" ng-model="user" md-on-open="loadUsers()" style="min-width: 200px;">
			      <md-option ng-value="user" ng-repeat="user in users">{{user.name}}</md-option>
			    </md-select>
			  </div>
			</div>
		    
		    <div  ng-controller="myCtrl"> 

			<p>Data : {{content}}</p>
			<p>Status : {{statuscode}}</p>
			<p>StatusText : {{statustext}}</p>
			
			</div>
		    
		      <div layout-gt-sm="row">
		        <md-input-container class="margin_0"  flex>
		          <label>Nom</label>
		          <input type="text" required name ="nom" ng-model="nom"/> 
		          <div ng-messages="contactForm.nom.$error">
					    <div ng-messages-include="erreurs.html"></div>
					</div>
		        </md-input-container>
			
				<md-input-container class="margin_0" flex>
		          <label>Pr&eacute;nom</label>
		          <input type="text" required name="prenom" ng-model="prenom"/>
		          <div ng-messages="contactForm.prenom.$error">
					    <div ng-messages-include="erreurs.html"></div>
					</div>
		        </md-input-container>
		     </div>  
		     
		   
		      <div layout-gt-sm="row"> 
		        <md-input-container class="margin_0" flex>
		          <label>Email :</label>
		          <input type="email" ng-model="email" name="mail" required />
<!-- 		           <span ng-show="contactForm.mail.$error.email">Entrez un email valide.</span> -->
		           
		           <div ng-messages="contactForm.mail.$error">
					    <div ng-messages-include="erreurs.html"></div>
					</div>
		        </md-input-container>		        
		      
		        <md-input-container class="margin_0" flex>
		          <label>T&eacute;lephone :</label>
		          <input type="tel" required name="tel" ng-model="tel"/>
		          <div ng-messages="contactForm.tel.$error">
				    <div ng-messages-include="erreurs.html"></div>
				</div>
		        </md-input-container>		        
		      </div>
		      
		      <div layout-gt-sm="row"> 
		        <md-input-container class="margin_0" flex>
		          <label>Entreprise :</label>
		          <input type="text"/>
		        </md-input-container>		        
		      </div>
		  
		  <div layout-gt-sm="row"> 
		        <md-input-container flex>
		          <label>Votre m&eacute;ssage :</label>
		          <textarea rows="" cols="" ng-model="msg"> </textarea>
		        </md-input-container>		        
		      </div>
		  
		  </md-content>
		</div>

<!--    		<input type="submit" name="envoyer" id="envoyerBouton" value="Envoyer " tabindex="2" class="btn btn-primary"> -->
   		<button style="margin-top: 15px;" class="btn btn-primary">Envoyer</button>
  	</form>
  		
</div>