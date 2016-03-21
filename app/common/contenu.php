
	<script type="text/javascript">
		function changeImage(){
		    var image = document.getElementById('myImage');
		    if (image.src.match("desc")) {
		        image.src = "static/images/autres/asc.png";
		    } else {
		        image.src = "static/images/autres/desc.png";
		    }
		}
	</script>
	
	
	
	<div class="row">
		<div id="comment" class="col-lg-12 padding_spec">
			<div class="commentcemarche titre jumbotron" onclick="javascript:changeImage()">
				 <h3  style="float: left;">XXXXXXXXX</h3>
				 <img id="myImage" alt="Covoiturage" src="static/images/autres/desc.png" >
			</div>
		</div>
		<div id="commentBody" class="col-lg-12">
			<div class="col-lg-4 ">			 
				
					<p><a href="#aide" class="btn btn-info btn-sm" role="button">Aide en ligne (FAQ) <span class="glyphicon glyphicon glyphicon-hand-right"></span></a></p>
	
					<br/><br/>
				 
			</div>
			<div class="col-lg-4 ">	
				<div class="blocfooter footerentete">
						<p><a href="#aide" class="btn btn-info btn-sm" role="button">Aide en ligne (FAQ) <span class="glyphicon glyphicon glyphicon-hand-right"></span></a></p>				
				 </div>
			</div>
			<div class="col-lg-4 ">	
				<div class="blocfooter footerentete">
			 		
					<p><a href="#aide" class="btn btn-info btn-sm" role="button">Aide en ligne (FAQ) <span class="glyphicon glyphicon glyphicon-hand-right"></span></a></p>
	
					<br/><br/>
				</div>
			</div>				     
		</div>
	</div>
			
	