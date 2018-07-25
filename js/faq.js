 
$(document).ready(function(){
	$("#btnTab11").click(function(){
		$("#mainTab1TabBg").css("background","url(img/faq-bg-tab11.png)")	
		$("#subTab11").show();
		$("#subTab12").hide();
		
	});
	$("#btnTab12").click(function(){
		$("#mainTab1TabBg").css("background","url(img/faq-bg-tab12.png)")	
		$("#subTab12").show();
		$("#subTab11").hide();
	});
	$("#btnTab21").click(function(){
		$("#mainTab2TabBg").css("background","url(img/faq-bg-tab11.png)")	
		$("#subTab21").show();
		$("#subTab22").hide();
		
	});
	$("#btnTab22").click(function(){
		$("#mainTab2TabBg").css("background","url(img/faq-bg-tab12.png)")	
		$("#subTab22").show();
		$("#subTab21").hide();
	});
	
	
	
	$("#btnTab1").click(function(){
		$("#tabBig").css("background","url(img/faq-bg-tab01.png)")	
		$("#mainTab1").show();
		$("#mainTab2").hide();
		
	});
	$("#btnTab2").click(function(){
		$("#tabBig").css("background","url(img/faq-bg-tab02.png)")	
		$("#mainTab2").show();
		$("#mainTab1").hide();
	});
	
	$("li .photoPlus").click(function(){
		$(this).parent("li").children(".photoBig").toggle();	
	});
	$("#quickSearchText a").click(function(){
		$("#smallsearch").val($(this).html());
		return false;	
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
	
	$("#searchDrop").click(function(){
		$("#catagoryList").toggle();	
	});
	$("#catagoryList li").click(function(){
		$("#catagoryInput").val($(this).text());	
		$("#catagoryList").hide();
	});
	/*$("li.openMsg .photoPlus").click(function(){
		
		 
			$(this).parent("li").children(".photoBig").show();	
		  
		 
	});*/
	
	
});

 