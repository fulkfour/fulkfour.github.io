/**
 * Copyright ©2010 http://www.profero.com.cn/sh/
 * Tel. +86 21 3331 5198   Fax. +86 21 3331 5197
 *
 * Profero Javascript Library, based on Jquery
 * @version 1.2
 *
 * @author gorden.xie@profero.com  msn:igorden8@hotmail.com
 * 
 * @Last Update Date: 2010-11-1  
 **/



//basic and common items here 
(function($){
	
/* plugin Template

(function($){
	
	$.fn.pluginName=function(params){
		
		params = $.extend({}, $.fn.pluginName.defaults, params);
		
		return false;	
	};
	$.fn.moveMiddle.defaults = {
		 
	};
	
})(jQuery);

*/


	$.profero={};
	
	//check IE
	$.profero.isIE =!$.support.opacity;
	
	//check IE6
	$.profero.isIE6 = $.profero.isIE && !window.XMLHttpRequest;
	
	//divide number with ","  
	// $.profero.number3(1234567) , return 1,234,567
	$.profero.number3=function(num){
		var reg=/(\d)(?=(\d{3})+$)/g;
		var str=num.toString().replace(reg,'$1,');
		return str;
	}
	
$.profero.isDate=function(dateval){
	var arr = new Array();
	
	if(dateval.indexOf("-") != -1){
		arr = dateval.toString().split("-");
	}else if(dateval.indexOf("/") != -1){
		arr = dateval.toString().split("/");
	}else{
		return false;
	}
	
	//yyyy-mm-dd || yyyy/mm/dd
	if(arr[0].length==4){
		var date = new Date(arr[0],arr[1]-1,arr[2]);
		if(date.getFullYear()==arr[0] && date.getMonth()==arr[1]-1 && date.getDate()==arr[2]){
			return true;
		}
	}
	//dd-mm-yyyy || dd/mm/yyyy
	if(arr[2].length==4){
		var date = new Date(arr[2],arr[1]-1,arr[0]);
		if(date.getFullYear()==arr[2] && date.getMonth()==arr[1]-1 && date.getDate()==arr[0]){
			return true;
		}
	}
	//mm-dd-yyyy || mm/dd/yyyy
	if(arr[2].length==4){
		var date = new Date(arr[2],arr[0]-1,arr[1]);
		if(date.getFullYear()==arr[2] && date.getMonth()==arr[0]-1 && date.getDate()==arr[1]){
			return true;
		}
	}
	
	return false;
};
	
$.profero.getQueryString=function(name){
	
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );
  if( results == null )
    return "";
  else
    return results[1];
	
	}; 

	 
})(jQuery);


/*

make element vertical-align to their parents;
$('.gThumbCarouselItem').moveMiddle({method:'padding-top',offset:10});

*/

(function($){
	
	$.fn.moveMiddle=function(params){
		
		params = $.extend({}, $.fn.moveMiddle.defaults, params);
		
		var parentHeight=this.parent().height();
		var thisHeight=this.height();
		var heightDiff=(parentHeight-thisHeight)/2;
		var diffOffset=params.offset;
		
		
		this.css(params.method,heightDiff+diffOffset);
		
		return false;	
	};
	$.fn.moveMiddle.defaults = {
		method:'margin-top',
		offset:0
	};
	
})(jQuery);
(function($) {

    $.fn.moveCenter = function(params) {

    params = $.extend({}, $.fn.moveCenter.defaults, params);

        var parentWidth = this.parent().width();
        var thisWidth = this.width();
        var widthDiff = (parentWidth - thisWidth) / 2;
        var diffOffset = params.offset;


        this.css(params.method, widthDiff + diffOffset);

        return false;
    };
    $.fn.moveMiddle.defaults = {
        method: 'margin-left',
        offset: 0
    };

})(jQuery);
 
 //communicate with remote ashx by ajax ==============================
 /*
 sample1: submit form fields to remote
 $(".gSubmitFrame").gSubmit(
	{
		url:"http://anjianji.w43.mc-test.com/WW/uk.ashx",
		setParams:{action:"insertregist"},
		loadingIcon:"#loadingSubmit",
		submitBtn:".gSubmitBtn",
		statusInfo:"#popupinfo",
		successInfo:"<font color=green><b>注册成功，谢谢.</b></font>",
		failInfo:"<font color=red><b>注册失败，请稍候再试。</b></font>",
		successFnInsert:testFn
	}
);
sample2: get json from remote
$("#btnRegist").gSubmit(
	{
		url:"http://heej.w45888.mc-test.com/heej.ashx",
		setParams:{action:"contentbyid",contentid:30},
		successFn:testFn
	}
); 

var testFn=function(json){
	alert(json.msgboard[0].title);
}
			
*/

 (function($){
	$.fn.gSubmit=function(params){
	 	
		//url to post params with callback
		var url=params.url+"?callback=?"; 
	 	
		//params mannualy specified
		var tempParms1=params.setParams; 
		
		//selector(id of class) of loading pic such as loading.gif
		//it will be displayed when submit and will be hidden when complete (defaultCallBackFn();)
		var loadingIcon=params.loadingIcon; 
		
		//selector of submit button
		//it will be hidden when complete (defaultCallBackFn();)
		var submitBtn=params.submitBtn; 
		
		//selector of form from which input fields will be submited
		var submitForm=params.submitForm;
		if(submitForm == null || submitForm==""){
			submitForm=this;	//$("#myForm").gSubmit({...});
		}
		
		//selector of element that will hold the status info such as "submit successfully!" 
		var statusInfo=params.statusInfo;
		
		//text content of success info such as "submit successfully!" 
		var successInfo=params.successInfo;
		
		//text content of fail info such as "submit failed!" 
		var failInfo=params.failInfo;
		
		//custom complete callback function, 
		//it will replace the default complete call back function defaultCallBackFn();
		var successFn=params.successFn;
		
		//custom expand of default complete call back function defaultCallBackFn();
		//it will keep the defaultCallBackFn(), and add additional function into defaultCallBackFn()
		var successFnInsert=params.successFnInsert;
		 
		//get values of all input fields , which is going to be submited to remote.
		var tempParams = {};
		$.each($(submitForm).serializeArray(), function(i, field) {
			tempParams[field.name] = field.value.replace(/\s/g,"").replace(/\'/g,"").replace(/\"/g,"");
		}); 
		
		//merge mannually inputed params and values of input files together .
		$.extend(tempParams, tempParms1);
	 	
		//public variable of complete callback fn
		var callbackFn;
		 
		//default complete callback fn 
		var defaultCallBackFn=function(json){ 
		 
			//$(statusInfo).show();
			$(loadingIcon).hide();	
	
			if(json.msgboard[0].message!="1"){
				$(statusInfo).html(failInfo).show();
			}else{  
				$(statusInfo).html(successInfo).show();
			} 
	
			//expand complete callback fn  
			if(successFnInsert!=null && successFnInsert!=""){
				successFnInsert(json);
			}
			$("#btnSubmit").trigger("hello",json); 
		} 
		
	 	//use custom complete callback fn to replace the default one
		if(successFn==null || successFn==""){
			callbackFn=defaultCallBackFn;
		}else{
			callbackFn=successFn;	
		}
	 
		//$(loadingIcon).show();	
		//$(submitBtn).hide();
		
		//submit params and get json data and run callback fn when complete	
		$.getJSON(url,tempParams,callbackFn) ;
			 
		
		
		return false;
	};
})(jQuery);



//input fields validator==================================
 
/* sample
var isErr=$("#myForm").gValidator({});
*/
 
 
 (function($){
	$.fn.gValidator=function(params){
		
		//get from id
	 	var formName=$(this).attr("id");
		 
		if(formName==""){
			alert("please give your form an ID");
			return false;	
		}
		formName="#"+formName;
		
		var isErr=false;
		
		//launch validator
		checkField();
		
		//on blur, launch validator
		$(formName + ' .text.required').live("blur",function(){
			checkField()
		});
		
		//validator
		function checkField(){ 
			$.each($(formName + ' .text.required'), function(i,n){
				vRequired($(this).children("input,textarea"));
			}); 
			$.each($(formName + ' .text.email'), function(i,n){
				vEmail($(this).children("input"));
			}); 
			$.each($(formName + ' .text.chinaMobile'), function(i,n){
				vChinaMobile($(this).children("input"));
			}); 
			$.each($(formName + ' .text.requiredChinaMobile'), function(i,n){
				vRequiredChinaMobile($(this).children("input"));
			}); 
			$.each($(formName + ' .checkbox.shouldCheck'), function(i,n){
				vCheckbox($(this).children("input"));
			});
			$.each($(formName + ' .text.number'), function(i,n){
				vnumber($(this).children("input"));
			}); 
			$.each($(formName + ' .text.Age'), function(i,n){
				vAge($(this).children("input"));
			}); 
		}
		
		//validate required field
		function vRequired(obj){
			var tempVal=obj.val().replace(/(^\s*)|(\s*$)/g, "")+obj.html().replace(/(^\s*)|(\s*$)/g, "");
			
			if(tempVal=="" || tempVal==null){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		
		//validate email field
		function vEmail(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		
		//validate chinamobile field
		function vChinaMobile(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^(13[0-9]|15[0-9]|18[0-9])\d{8}$/) && tempVal!=""){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//validate chinamobile field
		function vRequiredChinaMobile(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^(13[0-9]|15[0-9]|18[0-9])\d{8}$/)){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//validate checkbox field
		function vCheckbox(obj){
			var tempVal=obj.attr('checked');
			if(!tempVal){
				obj.parent().children('label').addClass("err");	
				isErr=true;
			}else{
				//obj.val(tempVal);
				obj.parent().children('label').removeClass("err");	
			}
		}
	
		//validate chinamobile field
		function vnumber(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^\w{15}$|^\w{18}$/)){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		
		function vAge(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^([1-9]|[1-9][0-9]|[1-9][0-3][0-9])$/)){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//return boolean result true==error, false==pass
		return isErr;
	};
})(jQuery);


//input fields validator II 2011-4-18 =============================
 
/* sample
var isErr=$("#myForm").gValidator2({});
*/
 
 
 (function($){
	$.fn.gValidator2=function(params){
		
		//get from id
	 	var formName=$(this).attr("id");
		 
		if(formName==""){
			alert("please give your form an ID");
			return false;	
		}
		formName="#"+formName;
		
		var isErr=false;
		
		//launch validator
		checkField();
		
		//on blur, launch validator
		$(formName + ' .text.required').live("blur",function(){
			checkField()
		});
		
		//validator
		function checkField(){ 
			
			$.each($(formName + ' .text.email'), function(i,n){
				vEmail($(this).children("input"));
			}); 
			
			$.each($(formName + ' .text.age'), function(i,n){
				vAge($(this).children("input"));
			}); 
			
			$.each($(formName + ' .text.chinaMobile'), function(i,n){
				vChinaMobile($(this).children("input"));
			}); 
			
			$.each($(formName + ' .text.chinaZip'), function(i,n){
				vChinaZip($(this).children("input"));
			}); 
			$.each($(formName + ' .checkbox.shouldCheck'), function(i,n){
				vCheckbox($(this).children("input"));
			}); 
			$.each($(formName + ' .dropdown.notFirst'), function(i,n){
				 
				vDropdown($(this).children("select"));
			}); 
			 
			
			$.each($(formName + ' .text.required'), function(i,n){
				vRequired($(this).children("input"));
			}); 
			
		 
			$.each($(formName + ' .text.email'), function(i,n){
				vEmail($(this).children("input"));
			}); 
			 
			$.each($(formName + ' .text.age.required'), function(i,n){
				vAge($(this).children("input"));
			}); 
			 
			$.each($(formName + ' .text.chinaMobile.required'), function(i,n){
				 
				vChinaMobile($(this).children("input"));
				 
			}); 
			 
			$.each($(formName + ' .text.chinaZip.required'), function(i,n){
				vChinaZip($(this).children("input"));
			}); 
			 
			 
		}
		
		//validate required field
		function vRequired(obj){
			var tempVal=obj.val().replace(/(^\s*)|(\s*$)/g, "");
			if(tempVal=="" || tempVal==null){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		
		//validate email field
		function vEmail(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if((!tempVal.match(/^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i) || !tempVal.match(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/i)) ){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		
		//validate chinamobile field
		function vChinaMobile(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^(13[0-9]|15[0-9]|18[0-9])\d{8}$/) && tempVal!=""){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//validate chinaZip field
		function vChinaZip(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^\d{6}$/) ){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//validate age field
		function vAge(obj){
			var tempVal=obj.val().replace(/\s/g,"").replace(/ /g,"");
			if(!tempVal.match(/^([1-9]|[1-9][0-9]|1[0-4][0-9])$/) ){
				obj.addClass("err");	
				isErr=true;
			}else{
				obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
		//validate checkbox field
		function vCheckbox(obj){
			var tempVal=obj.attr('checked');
			if(!tempVal){
				obj.parent().children('label').addClass("err");	
				isErr=true;
			}else{
				//obj.val(tempVal);
				obj.parent().children('label').removeClass("err");	
			}
		}
		function vDropdown(obj){
			var tempVal=obj.val();
			var tempVal2=obj.children("option").eq(0).text();
			 
			if(tempVal==tempVal2){
				obj.addClass("err");	
				isErr=true;
			}else{
				//obj.val(tempVal);
				obj.removeClass("err");	
			}
		}
	
		//return boolean result true==error, false==pass
		return isErr;
	};
})(jQuery);

//Carousel=============================================
/*

$("#myCarouselFrame").gCarousel();
$("#myThumbFrame").gThumbCarousel();

<div id="myCarouselFrame">
    <div id="myFrame" class="carouselMainFrame">
        <div class="gCarouselItem">1</div>
        <div class="gCarouselItem">2</div>
        <div class="gCarouselItem">3</div>
        <div class="gCarouselItem">1</div>
        <div class="gCarouselItem">2</div>
        <div class="gCarouselItem">3</div>
        <div class="gCarouselItem">1</div>
        <div class="gCarouselItem">2</div>
        <div class="gCarouselItem">3</div>
    </div>
    <div id="myThumbFrame" class="carouselThumbFrame">
        <div class="gThumbCarouselItem">111111</div>
        <div class="gThumbCarouselItem">222222</div>
        <div class="gThumbCarouselItem">333333</div>
        <div class="gThumbCarouselItem">111111</div>
        <div class="gThumbCarouselItem">222222</div>
        <div class="gThumbCarouselItem">333333</div>
        <div class="gThumbCarouselItem">111111</div>
        <div class="gThumbCarouselItem">222222</div>
        <div class="gThumbCarouselItem">333333</div>
    </div>
    <br />
    <div class="gCarouselNext">NEXT</div>
    <br />
    <div class="gCarouselPrevious">PREVIOUS</div>
    <br />
    <div class="gCarouselStart"></div>
    <br />
    <div id="myPage"><span class="carouselCurrentPage"></span>/<span class="carouselTotalPage"></span></div>
    
 
</div>

#myFrame{width:500px;height:300px;background:#eee;position:relative;}
 
.gCarouselNext{cursor:pointer;}
.gCarouselPrevious{cursor:pointer;}
.gCarouselItem{width:200px;display:none;position:absolute;}
.gCarouselFrame{overflow:hidden;}
.gCarouselBoard{position:relative;background:#fee;}

#myThumbFrame{width:500px;height:80px;background:#eef;position:relative;}
 
.gThumbCarouselItem{width:100px;display:block;float:left;position:relative;background:#efe;cursor:pointer;height:80px;}
.gThumbCarouselItem.activeThumb{background:#aaa;}
 

*/

(function($){
	
	
	
	

	$.fn.gCarousel = function(params) {  
	
		params = $.extend({}, $.fn.jScrollPane.defaults, params);
		
		//get carouselFrame id
		var carouselFrameName=$(this).attr("id");
		 
		if(carouselFrameName==""){
			alert("please give your carouselFrame an ID");
			return false;	
		}
		carouselFrameName="#"+carouselFrameName;
		
		//get carouselFrame object
		var carouselMainFrame=$(carouselFrameName +" .carouselMainFrame");
		 
		//initiate current item id
		var currentItemId=0;
		
		//get the dimension of carousel main space
		var frameWidth=$(carouselFrameName +" .carouselMainFrame").width();
		var frameHeight=$(carouselFrameName +" .carouselMainFrame").height();
		
		//get item group 
		var items=$(carouselFrameName +" .carouselMainFrame .gCarouselItem");
		
		//get thumb group
		var thumbItems=$(carouselFrameName +" .carouselThumbFrame .gThumbCarouselItem");
		
		//set height of each item
		$(items).css("height",frameHeight);
		
		//initiate the start X position of each item
		$(items).show().css("left",(frameWidth+20)+"px");
		
		//initiate X position of the first item
		$(items[0]).css("left",0+"px");
		
		//get items width
		var itemWidth=items.width();
		
		//get number of items
		var itemNum=items.length;
		
		//initiate the sum of width of all items
		var totalWidthofItems=0;
		 
		//write total page number
		$(carouselFrameName+' .carouselTotalPage').html(itemNum);
		//refresh current page number
		$(carouselFrameName+' .carouselCurrentPage').bind("changePage",function(){
			$(this).html(currentItemId+1);
		});
		//trigger to refresh current page number to initiate the current page number
		$.event.trigger("changePage");
		//on click in the carousel space, trigger to refresh current page number
		this.click(function(){
			$.event.trigger("changePage");
		});
		
		//caculate the sum of width of all items
		$.each(items,function(i,n){
			totalWidthofItems+=($(n).width());	
		});
		
		//left css set overflow:hidden
		carouselMainFrame.addClass("gCarouselFrame");
		
		//make a wrapper to wrap all items
		carouselMainFrame.wrapInner('<div class="gCarouselBoard" />');
		
		//set wrapper dimension
		carouselMainFrame.children(".gCarouselBoard").css("width",totalWidthofItems).css("height",frameHeight);
	 	
		//on click next button 
		$(carouselFrameName +" .gCarouselNext").click(function(){
			if(params.animation.indexOf('left')>=0){
				$(items[currentItemId]).animate({left:(frameWidth+10)*(-1)},params.duration,function(){
					
				});
			}
			if(params.animation.indexOf('fade')>=0){
	 
				$(items[currentItemId]).fadeOut(params.duration);
			}
			//get id of next item
			var nextItemId=getNextItemId(currentItemId,itemNum);
			
			if(params.animation.indexOf('left')>=0){
				//initiate the X start position of next item
				$(items[nextItemId]).css("left",frameWidth+10);
				$(items[nextItemId]).animate({left:0},params.duration,function(){
					 
				});
			}
			if(params.animation.indexOf('fade')>=0){
				$(items[nextItemId]).css("left",0);
				$(items[nextItemId]).hide();
				$(items[nextItemId]).fadeIn(params.duration);
			}
			currentItemId=nextItemId;
			
			//simulate thumb click to trigger the thumb moving
			$(thumbItems[currentItemId]).trigger("click");
		});
		
		//on click previous button
		$(carouselFrameName +" .gCarouselPrevious").click(function(){
			if(params.animation.indexOf('left')>=0){
				$(items[currentItemId]).animate({left:frameWidth+10},params.duration,function(){
					
				});
			}
			if(params.animation.indexOf('fade')>=0){
	 
				$(items[currentItemId]).fadeOut(params.duration);
			}
			//get id of previous item
			var nextItemId=getPreviousItemId(currentItemId,itemNum);
			
			
			if(params.animation.indexOf('left')>=0){
				//initiate the X start position of next item
				$(items[nextItemId]).css("left",(frameWidth+10)*(-1));
				$(items[nextItemId]).animate({left:0},params.duration,function(){
					
				});
			}
			if(params.animation.indexOf('fade')>=0){
				$(items[nextItemId]).css("left",0);
				$(items[nextItemId]).hide();
				$(items[nextItemId]).fadeIn(params.duration);
			}
			currentItemId=nextItemId;
			
			//simulate thumb click to trigger the thumb moving
			$(thumbItems[currentItemId]).trigger("click");
		});
		
		//on thumb click , if have thumb
		$(thumbItems).click(function(){
			
			//get current id of thumb items
			var thumbItemsId=$(thumbItems).index(this);
			
			//set items style
			$(thumbItems).removeClass("activeThumb");
			$(thumbItems[thumbItemsId]).addClass("activeThumb");
			
			//if click the current thumb, don't do anything
			if(thumbItemsId==currentItemId){return false;} 
			
			//determing the direction of animation
	 		if (thumbItemsId>=currentItemId){
				if(params.animation.indexOf('left')>=0){
					$(items[currentItemId]).animate({left:(frameWidth+10)*(-1)},params.duration,function(){
						
					});
				}
				if(params.animation.indexOf('fade')>=0){
	 
					$(items[currentItemId]).fadeOut(params.duration);
				}
				var nextItemId=thumbItemsId;
				if(params.animation.indexOf('left')>=0){
					$(items[nextItemId]).css("left",frameWidth+10);
					$(items[nextItemId]).animate({left:0},params.duration,function(){
				
					});
				}
				if(params.animation.indexOf('fade')>=0){
					$(items[nextItemId]).css("left",0);
					$(items[nextItemId]).hide();
					$(items[nextItemId]).fadeIn(params.duration);
				}
				currentItemId=nextItemId;
			}else{
				if(params.animation.indexOf('left')>=0){
					$(items[currentItemId]).animate({left:(frameWidth+10)},params.duration,function(){
						
					});
				}
				if(params.animation.indexOf('fade')>=0){
	 
					$(items[currentItemId]).fadeOut(params.duration);
				}
				var nextItemId=thumbItemsId;
				if(params.animation.indexOf('left')>=0){
					$(items[nextItemId]).css("left",(frameWidth+10)*(-1));
					$(items[nextItemId]).animate({left:0},params.duration,function(){
				
					});
				}
				if(params.animation.indexOf('fade')>=0){
					$(items[nextItemId]).css("left",0);
					$(items[nextItemId]).hide();
					$(items[nextItemId]).fadeIn(params.duration);
				}
				currentItemId=nextItemId;
			}
			
		});
		
		
		//$(carouselFrameName +" .gCarouselNext").trigger("click");
				
		//get next and previous item id by current id
		function getNextItemId(currentItemId,maxItem){
			return((currentItemId+1+maxItem)%maxItem);
		}
		function getPreviousItemId(currentItemId,maxItem){
			return((currentItemId-1+maxItem)%maxItem);
		}
		
		$.fn.jScrollPane.defaults = {
		 	duration:500,
			animation:"left"
		};
		
		return this;
	};
})(jQuery);

//Thumb Carousel based on gCarousel()========================================

(function($){
	
	
	
	$.fn.gThumbCarousel = function(params) {  
		
		params = $.extend({}, $.fn.gThumbCarousel.defaults, params);
		//get thumb frame name
		var carouselThumbFrameName=$(this).attr("id");
		 
		if(carouselThumbFrameName==""){
			alert("please give your carouselThumbFrame an ID");
			return false;	
		}
		carouselThumbFrameName="#"+carouselThumbFrameName;
		
		
		var currentItemId=0;
		var frameWidth=this.width();
		var frameHeight=this.height();
		var items=$(carouselThumbFrameName+" .gThumbCarouselItem");
		 
		$(items).show();
	 
	 
		var itemNum=items.length;
		var totalWidthofItems=0;
		 
		$(items[0]).addClass("activeThumb"); 
		
		$.each(items,function(i,n){
			$(n).height($(n).height()+params.thumbItemHeightOffset);
			$(n).width($(n).width()+params.thumbItemWidthOffset);
			totalWidthofItems+=($(n).width());	
		});
		
		this.addClass("gCarouselFrame");
		this.wrapInner('<div class="gCarouselBoard" />');
		var thumbBoard=$(carouselThumbFrameName+" .gCarouselBoard");
		
		var widthDiff=totalWidthofItems-frameWidth;
		var widthDiffStep=widthDiff/(itemNum-3);
		
		$(thumbBoard).css("width",totalWidthofItems).css("height",frameHeight);
		 
		$(items).click(function(){
			var itemsId=$(items).index(this);
			
			//move thumb board when thumb clicked
			if (itemsId>=0 && itemsId<=itemNum-1) {
				
				//when first and last item clicked, don't move
				if(itemsId==0){itemsId=1;}
				if(itemsId==itemNum-1){itemsId=itemNum-2;}
				
				$(thumbBoard).animate({left:widthDiffStep*(itemsId-1)*(-1)},500,function(){
					
				});
			}
		});
		
		return this;
	};
	
	$.fn.gThumbCarousel.defaults = {
		thumbItemWidthOffset:0,
		thumbItemHeightOffset:0
	};
	
})(jQuery);