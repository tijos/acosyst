<br/><br/> <br/>
<h3 class="titreSpec">Abonnement aux alertes d'offres d'emploi</h3>
 <br/>
<div class=" text-center" style="background-color : white;">
     <form method="post" name="abonnementform" role="abonnementform" ng-controller="abonnementControl" ng-submit="abonnementform.$valid && sendMessage(input)"  novalidate>
         <md-content class="md-padding">           
              <div layout-gt-sm="row">  
              	   <md-input-container class="margin_0" flex>
		                <label for="email">Email:</label>
		                <input type="email" id="email" name="email" ng-model="input.email" required>
		                 <div ng-messages="abonnementform.email.$error"> 
 					        <div ng-messages-include="common/erreurs.html"></div>
 					     </div>       
		          
		                 <br/>
				          <button style="margin-top: 15px;" class="btn btn-primary" type="submit" name="submit" value="submit">Enregistrer</button>
				                <br/>  <br/>  <br/>
				            
						  <div  ng-if="data==23000" class="msgKo"> 
							  <img alt="" src="static/images/autres/erreur.png"> {{msgRetour}}
				          </div>
				       
				       	   <div  ng-if="data==00000" class="msgOk"> 
							   <img alt="" src="static/images/autres/ok2.png">  {{msgRetour}}
				          </div>
			         </md-input-container>
		        </div>
          </md-content>
     </form>   
 </div>
        