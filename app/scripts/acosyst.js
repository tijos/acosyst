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
  
  $(".entetedevise,.menuvert").click(function(){
	   // $("#commentBody").toggle(1000);
	  $("body, html").animate({scrollTop: 385}, "slow");	
	});
  
//  ​$(".entetedevise").click(function() {
//		$("body, html").animate({scrollTop: 500}, "slow");			
//	});
});


