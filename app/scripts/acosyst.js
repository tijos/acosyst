/**
 * 
 */



$(document).ready(function(){
//	
//	$(window).load(function () {
//		$(".container").html("loading...");
//	});
	
	 
	
  $(window).scroll(function() {
    if ($(document).scrollTop() < 20) {
    	$("#topmenu").removeClass("test");
    	 $("#header").addClass("move");
    } else {  	      
      $("#topmenu").addClass("test");
      $("#header").removeClass("move");
    }
  }); 
  
  $(".entetedevise,.menuvert").click(function(){
	   // $("#commentBody").toggle(1000);
	  $("body, html").animate({scrollTop: 385}, "slow");	
	});
  
  $(".accueil").click(function(){
	   // $("#commentBody").toggle(1000);
	  $("body, html").animate({scrollTop: 0}, "slow");	
	});
 
//  ​$(".accueil").click(function() {
//		$("body, html").animate({scrollTop: 0}, "slow");			
//	});
});


