$(document).ready(function(){
	 $(".label").mouseover(function(){
		 
		$(this).parent().children(".greenBoard").animate({height:"171px"},200);	 
		
		if($(this).parent().hasClass("video")){
			$(this).parent().children(".bar").animate({width:"405px"},200);	 
		}else{
			$(this).parent().children(".bar").animate({width:"173px"},200);	 
		}
		
	 });
	  $(".label").mouseout(function(){
		 
		$(this).parent().children(".greenBoard").animate({height:"0px"},200);	 
		$(this).parent().children(".bar").animate({width:"50px"},200);	 
		
	 });
	 
	  
	 
});