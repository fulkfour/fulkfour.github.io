<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="description" content=" " />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<style type="text/css" media="screen">
@import 'css/global.css';
@import 'css/home.css';
@import 'css/colorbox.css';
@import 'jsimgslider/js-image-slider.css';
</style>

<!--[if IE 8]>
  <link rel="stylesheet" type="text/css" media="all" href="css/ie8.css" />
  <![endif]-->
<!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" media="all" href="css/ie7.css" />
  <![endif]-->
<!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css" />
  <![endif]-->
<!--[if IE]>
  <link rel="stylesheet" type="text/css" media="all" href="css/ie.css" />
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/jquery.profero.js"></script>
<script type="text/javascript" src="js/logic.js"></script>
<script src="jsimgslider/js-image-slider.js" type="text/javascript"></script>


  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video/video-js.swf";
  </script>

<!--[if lt IE 7]>
    <script type="text/javascript" src="js/iepngfix_tilebg.js"></script>

 <style type="text/css">
 

 img, div, input,li,h4 { behavior: url("js/iepngfix.htc") }

 
 </style>
    
    <![endif]-->
<script type="text/javascript">
$(document).ready(function(){
	/*var params = {
		wmode: "transparent",
		SCALE: "exactfit" 
			
	};
	swfobject.embedSWF("flash/4-5.swf", "flash1", 242, 143, "9.0.0", "flash/expressInstall.swf", "", params);*/
	
	 
	//$("#daodao").colorbox({iframe:true, innerWidth:468, innerHeight:450});


	 //$(".btnShowDaodao").colorbox({ inline: true, href: "#daodao",onLoad:function(){
        //$('.hideIni').hide();
    //} }); 

		var sliderOptions=
{
	sliderId: "slider",
	startSlide: 0,
	effect: "series1",
	effectRandom: false,
	pauseTime: 2600,
	transitionTime: 500,
	slices: 1,
	boxes: 1,
	hoverPause: 1,
	autoAdvance: true,
	captionOpacity: 0.3,
	captionEffect: "fade",
	thumbnailsWrapperId: "thumbs",
	m: false,
	license: "b6t80"
};


var sliderOptions2=
{
	sliderId: "slider2",
	startSlide: 0,
	effect: "series1",
	effectRandom: false,
	pauseTime: 2600,
	transitionTime: 500,
	slices: 1,
	boxes: 1,
	hoverPause: 1,
	autoAdvance: true,
	captionOpacity: 0.3,
	captionEffect: "fade",
	thumbnailsWrapperId: "thumbs",
	m: false,
	license: "b6t80"
};

var imageSlider=new mcImgSlider(sliderOptions);

$(".mainLeasure .column4").click(function(){
	imageSlider.next();
});

var imageSlider2=new mcImgSlider(sliderOptions2);
$(".mainOriginal .column4").click(function(){
	imageSlider2.next();
});

	$(".showImg").colorbox({iframe:true,width:"860", height:"646"});

});

 
</script>
<style>

#sliderFrame 
{ 
    width:302px; 
}

#slider, #slider div.sliderInner {
    width:302px;height:485px;/* Must be the same size as the slider images */
}
#slider div.navBulletsWrapper  {
	top:inherit;
    bottom:50px;/* Its position is relative to the #slider */
	right: 10px;
	left:inherit;
}
#slider2, #slider2 div.sliderInner {
    width:302px;height:485px;/* Must be the same size as the slider images */
}
#slider2 div.navBulletsWrapper  {
	top:inherit;
    bottom:50px;/* Its position is relative to the #slider */
	right: 10px;
	left:inherit;
}
.column4{cursor:pointer;}
</style>
</head>
<body>
<div id="wrapper" >
    <? include("header.php"); ?>
    <div class="mainLeasure" style="">
        <div class="kv" style="position:relative; width:960px; height:395px;">
            
            <img src="img/kv-leasure.jpg" width="960" height="395" style="position:absolute; top:0; left:0; z-index:1;" /> 
            
            <a href="video.html" class="showImg"><img src="img/playBtn.png" width="72" height="72" style="position:absolute; left:50px; bottom:40px; z-index:1000;"  /></a>
            
            <img src="img/leasure-videoword.png"  height="17" style="position:absolute; left:149px; top:316px; z-index:1000;"  /> 
            
            <div class="navLeasure" style="z-index:1000; width:480px; height:49px; float:left; position:absolute;"><a href="mainproduct.php" style="width:480; height:49px; display:block;"><img src="img/btn-original.png" width="480" height="49" /></a> </div>
            <div class="navOriginal" style="z-index:1000; width:480px; height:49px; float:left;position:absolute; right:0;"><a href="mainmatch.php" style="width:480; height:49px; display:block; "><img src="img/btn-product.png" width="480" height="49"  /></a> </div>
            
            
            </div>
        <!--kv-->
        <div class="content clearfix" style="background:#fff;" >
      <div class="column3" style=" width:302px; float:left; position:relative;"> 
        <div id="slider">
        <img src="img/right1.jpg" width="302" height="485" /> 
        <img src="img/right2.jpg"  /> 
        <img src="img/right3.jpg"  /> 
        <img src="img/right4.jpg"  /> 
        </div>
        <a href="mainproduct.php"><img src="img/photograph.png" style="position:absolute; left:0px; bottom:0px; z-index:1000;" /></a>
        </div>
        <!--column3-->
        <div class="column2" style="width:295px;float:left; color:#666; background:#fff; height:485px;text-align:center;">
            <p style="text-align:center;"> <!--<img src="img/attitude-leasure.png" width="237" height="105" style="padding:20px 0 0 0;" /> </p>-->
            <p style=" text-align:center;font-family:微软雅黑,Microsoft YaHei,simhei, 黑体; font-size:12px; line-height:16px; padding:10px 15px 0px 15px;">每个人都是这个世界独一无二的存在,<br />
你的存在就是上天献给世界的一份礼物,<br />
坚持自我,永远保持天性与纯真,<br />
内心充满信念,<br />
对生命、自然、社会充满爱,<br />
对自我与未来充满期许,<br />
在变化中平衡自我,<br />
无论顺境逆境,始终坚定如初,<br />
他们创造了真善美的世界,<br />
让这个世界充满希望和能量,<br />
你独一无二 无可取代,<br />
JIMS时尚男装.
</p>
            <p style=" text-align:center;font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px;padding:15px 15px 10px 15px;">Everyone is in the class by himself in the world,<br />
Your existence is a granted gift to the universe,<br />
Rambling in life,you can either follow the destiny,or go with you heart,<br />
The people who are in persistence,are always insisting on hteir trueness,wiht falith inside,with love to life,nature and the world,with hope and self-worth.<br />
They are good at find a balance changes,regardless of luck and fate,they keep their minds.always,A fantastic world is created by them,as well as the hope and energy within,You belong to them,you are unique,JIM'S Fashion Menswear!



</p>
        </div>
        <!--column2-->
        
        
        <div class="column1" style="position:relative; width:335px; float:left;"> <img src="img/match-leasure.jpg" width="335" height="485" /> 
        <a href="mainmatch.php"><img src="img/match.png" style="position:absolute; left:0px; bottom:0; z-index:1000;" /></a>
        <!--<img src="img/left-leasure.jpg" width="335" height="192" /> 
        <a href="mainproduct.html"><img src="img/style.png" style="position:absolute; left:0px; bottom:0px; z-index:1000;" /></a>-->
        </div>
        <!--column1-->
        
        <div class="column4" style=" width:26px; float:right;"> <img src="img/right-arrow.jpg" width="26" height="485" /> </div>
        <!--column4--> 
      
    </div>
    <!--content--> 
    
</div>
<!--mainLeasure-->
<div class="mainOriginal" style="height:800px; display:none;">
    <div class="kv" style="position:relative; width:960px; height:395px;">
        <div class="navLeasure" style=" border-bottom:solid 3px #83aadd; z-index:1000; width:480px; height:46px; background:url(img/nav-fashion.png) 0 0 no-repeat; float:left; text-indent:-3000px;"> <a href="#" style="width:480; height:46px; display:block;">Leasure Fasion</a> </div>
        <div class="navOriginal" style=" border-bottom:solid 8px #937837;z-index:1000; width:480px; height:46px; background:url(img/nav-fashion.png) -480px 0 no-repeat; float:left;text-indent:-3000px;"> <a href="#" style="width:480; height:46px; display:block; ">Original Fasion</a> </div>
        <img src="img/kv-original.jpg" width="960" height="395" style="position:absolute; top:0; left:0; z-index:-1;" /> <img src="img/playBtn.png" width="72" height="72" style="position:absolute; left:50px; bottom:40px;"  /> 
        
            <img src="img/original-videoword.png"  style="position:absolute; left:149px; top:316px;"    /> 
        </div>
    <!--kv-->
    <div class="content clearfix" style="background:#fff;" >
     
        <div class="column1" style="position:relative; width:335px; float:left;"> <img src="img/match-leasure.jpg" width="335" height="485" /> <a href="mainmatch.php"><img src="img/match.png" style="position:absolute; left:0px; bottom:0; z-index:1000;" /></a>
       
         </div>
        <!--column1-->
        <div class="column2" style="width:295px;float:left; color:#666; background:#fff; height:485px;text-align:center;">
            <p style="text-align:center;"> <img src="img/attitude-original.jpg" width="237" height="105" style="padding:20px 0 0 0;" /> </p>
            <p style=" text-align:center;font-family:微软雅黑,Microsoft YaHei,simhei, 黑体; font-size:12px; line-height:20px; padding:25px 45px 30px 45px;">服装不只是一种产品, 它有灵魂, <br />
有精神的, 是品牌理念的传达者. <br />
本着"爱, 信念, 期许"的设计理念, JIM'S original秉承"大爱即是包容".<br />
讲求"所有风格都可以互相融合, 所有廓形都可以互相演变, 所有色彩都可以<br />
互相转移"的信念, 坚持着<br />
正能量文化的传播.</p>
            <p style=" text-align:center;font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px;padding:0px 45px 30px 45px;">This is a lively, fashion art, out of the ordinary style, is back on a self, return to innocence <br />
- a special feeling.


</p>
        </div>
        <!--column2-->
        <div class="column3" style=" width:302px; float:left; position:relative;"> 
        
         <div id="slider2">
        <img src="img/right-leasure.jpg" width="302" height="485" /> 
        <img src="img/right-original.jpg"  /> 
        <img src="img/right-leasure.jpg"  /> 
        <img src="img/right-original.jpg"  /> 
        </div>
         
        <a href="mainproduct.php"><img src="img/photograph.png" style="position:absolute; left:0px; bottom:0px; z-index:1000;" /></a>
        </div>
        <!--column3-->
        <div class="column4" style=" width:26px; float:right;"> <img src="img/right-arrow.jpg" width="26" height="485" /> </div>
        <!--column4--> 
      
    </div>
    <!--content--> 
    
</div>
<!--mainOriginal-->
<div id="footer">
    <ul>
        <li><b>ACCOUNT</b></li>
        <li><a href="#">LOGIN</a></li>
        <li><a href="#">SHOPPING BAG</a></li>
        <li><a href="#">NEWSLETTER SIGN-UP</a></li>
    </ul>
    <ul>
        <li><b>SOCIAL</b></li>
        <li><a href="#">FACEBOOK</a></li>
        <li><a href="#">TWITTER</a></li>
        <li><a href="#">INSTAGRAM</a></li>
    </ul>
    <ul>
        <li><b>CUSTOMER SERVICE</b></li>
        <li><a href="#">HELP & CONTACT</a></li>
        <li><a href="#">SHIPPING & TAXES</a></li>
        <li><a href="#">RETURN POLICY</a></li>
        <li><a href="#">CAREERS</a></li>
        <li><a href="#">AFFILIATES</a></li>
    </ul>
    <span>Copyright @ 2014Jims. Incorporated. Allright reserved </span> </div>
<!--footer-->
</div>
<!--wrapper-->

</body>
</html>
