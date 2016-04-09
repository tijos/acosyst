<!--div class="jumbotron text-center" style="background-color : white;"-->
<!-- 	<h3 class="urgence urgenceCommon"> Indiquez votre email pour vous abonner aux alertes d'offres d'emplois</h3> -->
<!-- 	<form ng-submit="$event.preventDefault()"  name="contactForm"> -->

<!-- 		<div ng-controller="DemoCtrl as ctrl" layout="column" ng-cloak> -->
<!-- 		  <md-content class="md-padding"> -->
<!-- 		      <div layout-gt-sm="row">  -->
<!-- 		        <md-input-container class="margin_0" flex> -->
<!-- 		          <label>Email :</label> -->
<!-- 		          <input type="email" ng-model="email" name="mail" required />		            -->
<!-- 		           <div ng-messages="contactForm.mail.$error"> -->
<!-- 					    <div ng-messages-include="common/erreurs.html"></div> -->
<!-- 					</div> -->
<!-- 		        </md-input-container>		         -->
		        
<!-- 		      </div> -->
		      
		     
<!-- 		  </md-content> -->
<!-- 		</div> -->
   		<!--button style="margin-top: 15px;" class="btn btn-primary">Enregistrer</button-->
<!--   	</form> -->
  		
<!-- </div> -->


<div class="jumbotron text-center" style="background-color : white;">
     <form method="post" name="form" role="form" ng-controller="abonnementControl" ng-submit="form.$valid && sendMessage(input)" novalidate>
             
            
                <fieldset>
                    
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" ng-model="input.email" required>
                    </div>
                    
                    
                </fieldset>
                <button type="submit" name="submit" value="submit">Enregistrer</button>
                
                 data :  {{data}} <br/>
			      success:  {{success}} <br/>
			      erreur :{{error}} <br/>
			      
			     <div  ng-if="data"> 
			       {{msgRetour}}
            	</div>
            	
            
            </form>
       
        
     
 </div>
        