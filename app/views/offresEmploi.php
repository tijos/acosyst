<!-- <div class="jumbotron text-center"> -->
<!-- 	<h1>Offres emploi</h1> -->
	
<!-- 	<p>{{ maVariable2 }}</p> -->
<!-- </div> -->


        <div class="jumbotron text-center">
           <form method="post" name="form" role="form" ng-controller="offresEmploiControl" ng-submit="form.$valid && sendMessage(input)" novalidate>
                <p ng-show="success">Thanks for getting in touch!</p>
                <p ng-show="error">Something wrong happened!, please try again.</p>
                <legend>Contact</legend>
                <fieldset>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" ng-model="input.name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" ng-model="input.email" required>
                    </div>
                    <div>
                        <label for="messsage">Message:</label>
                        <textarea id="messsage" name="message" ng-model="input.message" required></textarea>
                    </div>
                    <div>
                        <label for="honeypot">I promise I'm not a bot</label>
                        <input type="text" id="honeypot" name="honeypot" ng-model="input.honeyPot">
                    </div>
                </fieldset>
                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
  