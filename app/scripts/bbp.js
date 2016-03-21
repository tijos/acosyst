/**
 * 
 */

$(document).ready(function(){
	
  $(window).scroll(function() {
    if ($(document).scrollTop() < 20) {
    	$("#topmenu").removeClass("test");
    	 $("#header").addClass("move");
    } else {  	      
      $("#topmenu").addClass("test");
      $("#header").removeClass("move");
    }
  }); 
  
  $("#comment").click(function(){
	    $("#commentBody").toggle(1000);
	});
});


