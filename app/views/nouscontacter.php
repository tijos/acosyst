<script type="text/ng-template" id="templateId">
    <h1>Template heading</h1>
    <p>Content goes here</p>
</script>
  	<form method="post" name="contactform" role="contactform" ng-controller="nousContacterControl" ng-submit="contactform.$valid && sendMessage(input)"  novalidate>
         <md-content class="md-padding">           
              <div layout-gt-sm="row">  
              	   <md-input-container class="margin_0" flex>
		                <label for="nom">Nom:</label>
		                <input type="text" id="nom" name="nom" ng-model="input.nom" required>
		                 <div ng-messages="contactform.nom.$error"> 
 					        <div ng-messages-include="common/erreurs.html"></div>
 					     </div>       
			         </md-input-container>
			         
			         <md-input-container class="margin_0" flex>
			         	 <label>Pr&eacute;nom</label>
			          	 <input type="text" required name="prenom" ng-model="input.prenom"/>
				          <div ng-messages="contactform.prenom.$error">
						     <div ng-messages-include="common/erreurs.html"></div>
						  </div>
			        </md-input-container>
		        </div>
		        
		     <div layout-gt-sm="row"> 
		        <md-input-container class="margin_0" flex>
		          <label>Email :</label>
		          <input type="email" ng-model="input.email" name="mail" required />

		           
		           <div ng-messages="contactform.mail.$error">
					    <div ng-messages-include="common/erreurs.html"></div>
					</div>
		        </md-input-container>		        
		      
		        <md-input-container class="margin_0" flex>
		          <label>T&eacute;lephone :</label>
		          <input type="tel" required name="tel" ng-model="input.tel"/>
		          <div ng-messages="contactform.tel.$error">
				    <div ng-messages-include="common/erreurs.html"></div>
				</div>
		        </md-input-container>		        
		      </div>
		      
		     <div layout-gt-sm="row"> 
		        <md-input-container class="margin_0" flex>
		          <label>Entreprise :</label>
		          <input type="text" name="entreprise" ng-model="input.entreprise"/>
		        </md-input-container>		        
		      </div>
		  
		  	 <div layout-gt-sm="row"> 
		        <md-input-container flex>
		          <label>Votre m&eacute;ssage :</label>
		          <textarea rows="" cols="" ng-model="input.msg" name="msg"> </textarea>
		        </md-input-container>		        
		      </div> 
		      
          </md-content>
          
           <br/>
		   <button style="margin-top: 15px;" class="btn btn-primary" type="submit" name="submit" value="submit">Envoyer</button>
           <br/>  <br/>  <br/>
            
		  <div  ng-if="data==23000" class="msgKo"> 
			  <img alt="" src="static/images/autres/erreur.png"> {{msgRetour}}
          </div>
       
       	   <div  ng-if="data==00000" class="msgOk"> 
			   <img alt="" src="static/images/autres/ok2.png">  {{msgRetour}}
          </div>
     </form>   
  		
</div>