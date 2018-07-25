 
$(document).ready(function(){
	$("#btnTab11").click(function(){
		$("#qTab").css("background","url(img/bg-person-tab1.png)")	
		$("#qContent1").show();
		$("#qContent2").hide();
		
	});
	$("#btnTab12").click(function(){
		$("#qTab").css("background","url(img/bg-person-tab2.png)")	
		$("#qContent2").show();
		$("#qContent1").hide();
	});
	 
	 
	
	$("li .photoPlus").click(function(){
		$(this).parent("li").children(".photoBig").toggle();	
	});
	 
	
	$(".replyNumber.hasReply").live("click",function(){
		if($(this).parent("li").hasClass("openMsg")){
			$(this).parent("li").removeClass("openMsg");	
			$(this).parent("li").children("ul").hide();	
			$(this).css("background-image","url(img/faq-replynumber.png)");
		}else{
			$(this).parent("li").addClass("openMsg");	
			$(this).parent("li").children("ul").show();	
			$(this).css("background-image","url(img/faq-replynumber2.png)");
		}
	});
	
	 
	/*$("li.openMsg .photoPlus").click(function(){
		
		 
			$(this).parent("li").children(".photoBig").show();	
		  
		 
	});*/
	
	
});

 