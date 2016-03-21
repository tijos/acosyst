<div>
	<h1 class="h4">Connexion</h1>

	<p>{{ maVariable2 }}</p>
</div>


<div>
    <form class="form-horizontal" name="registerForm">
        <div class="form-group" ng-class="{'has-error': registerForm.$dirty && registerForm.Email.$invalid, 'has-success': registerForm.Email.$valid}">
            <label class="col-sm-3 control-label" for="Email">Email</label>
            <div class="col-sm-3">
                <input id="Email" type="email" class="form-control" required name="Email" ng-model="Email" />
            </div>
             <span class="text-danger col-sm-offset-0" ng-show="registerForm.Email.$invalid">
                    Entrez un email valide.
             </span>
        </div>
        <div class="form-group" ng-class="{'has-error': registerForm.$dirty && registerForm.Password.$invalid, 'has-success': registerForm.Password.$valid}">
            <label class="col-sm-3 control-label" for="Password">Votre mot de passe</label>
            <div class="col-sm-3">
                <input id="Password" type="password" class="form-control" required ng-minlength="6" name="Password" ng-model="Password" />
            </div> 
            <span class="text-danger col-sm-offset-0" ng-show="registerForm.Password.$error.minlength">
                    Le mot de passe doit faire minimum 6 caract&#232;res.
             </span>

        </div>
        <div class="form-group" ng-class="{'has-error': registerForm.$dirty && registerForm.ConfirmPassword.$invalid, 'has-success': registerForm.ConfirmPassword.$valid}">
            <label class="col-sm-3 control-label" for="ConfirmPassword">Confirmer le mot de password</label>
            <div class="col-sm-3">
                <input id="ConfirmPassword" type="password" class="form-control" required equals-to="registerForm.Password" name="ConfirmPassword" ng-model="ConfirmPassword" />
            </div> 
            <span class="text-danger col-sm-offset-0" ng-show="!registerForm.ConfirmPassword.$error.required && registerForm.ConfirmPassword.$error.equalsTo">
                   Les deux mots de passe sont diff&#233;rents
                </span>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                <input type="submit" class="btn btn-default" value="Connexion" ng-disabled="registerForm.$invalid" />
            </div>
        </div>
    </form>
</div>