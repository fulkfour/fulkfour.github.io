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
	 
	<!--[if lt IE 7]>
    <script type="text/javascript" src="js/iepngfix_tilebg.js"></script>

 <style type="text/css">
 

 img, div, input,li,h4 { behavior: url("js/iepngfix.htc") }

 
 </style>
    
    <![endif]-->
<script type="text/javascript">
$(document).ready(function(){
	
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

var imageSlider=new mcImgSlider(sliderOptions);

	/*var params = {
		wmode: "transparent",
		SCALE: "exactfit" 
			
	};
	swfobject.embedSWF("flash/4-5.swf", "flash1", 242, 143, "9.0.0", "flash/expressInstall.swf", "", params);*/
	
	 
	//$("#daodao").colorbox({iframe:true, innerWidth:468, innerHeight:450});


	 //$(".btnShowDaodao").colorbox({ inline: true, href: "#daodao",onLoad:function(){
        //$('.hideIni').hide();
    //} }); 

	
});

 
</script>
<style>
#slider div.navBulletsWrapper{right:30px;}
</style>
</head>
<body>
<div id="wrapper" >
	 <? include("header.php"); ?>
     <div id="main">
         <div id="gallery">
         	<div id="slider">
         
                    <img src="img/kv1.jpg" width="960" height="535" />
                    <img src="img/kv2.jpg"  />
                    <img src="img/kv3.jpg"  />
                    <img src="img/kv4.jpg"  />
                  
            </div>
         </div><!--gallery-->
         <a href="#" id="showtime"><img src="img/attitude.png" /></a>
         <!--
         <div id="video" class="video" style="width:477px;height:129px;border-top:solid #ff7f7e 5px; border-bottom:solid #a3db8a 5px; position:relative; top:-5px;">
         	<a href="#" class="label" style="">
            <div class="greenBoard" style="position:relative; top:0px;left:0px;width:477px;height:129px;background:#a3db8a;">
            <img src="img/label-campaign.png" style="position:absolute; left:30px; top:50px;" /><div class="bar" style="position:absolute; left:30px; bottom:15px; width:390px; height:3px; background:#fff;"></div>
            </div>
            </a>
         </div>
          <div id="productNew" style="width:238px;height:129px;border-top:solid #e3c18f 5px; border-bottom:solid #e9ac90 5px; position:relative; top:-5px;">
         	 
            <a href="#" class="label" style="">
            <div class="greenBoard" style="position:relative; top:0px;left:0px;width:238px;height:129px;background:#e9ac90;">
            <img src="img/label-video.png" style="position:absolute; left:30px; top:50px;" /><div class="bar" style="position:absolute; left:30px; bottom:15px; width:180px; height:3px; background:#fff;"></div>
            </div>
            </a>
            
            
         </div>
          <div id="productCombine"  style="width:237px; height:129px;border-top:solid #61dac7 5px; border-bottom:solid #83aadd 5px; position:relative; top:-5px;">
         	 
          
             <a href="#" class="label" style="">
            <div class="greenBoard" style="position:relative; top:0px;left:0px;width:237px;height:129px;background:#83aadd;">
            <img src="img/label-fashion.png" style="position:absolute; left:30px; top:50px;" /><div class="bar" style="position:absolute; left:30px; bottom:15px; width:180px; height:3px; background:#fff;"></div>
            </div>
            </a>
            
         </div>
         -->
         
         
          <div id="video" class="video" style="border-top:solid #ff7f7e 5px; border-bottom:solid #a3db8a 5px; position:relative; top:0px;">
         	<img src="img/campaign.jpg" width="477" height="171" />
            <div class="greenBoard" style="width:477px;"></div>
            <div class="bar" style="position:absolute; left:35px; bottom:23px; width:50px; height:3px; background:#fff;"></div>
            <a href="news.php" class="label" style="display:block; width:447px; height:171px; z-index:1000;background:url(img/label-campaign.png) 35px 90px no-repeat;"> </a>
            
         </div>
         <div id="productNew" style="border-top:solid #e3c18f 5px; border-bottom:solid #e9ac90 5px; position:relative; top:0px;">
         	<img src="img/video.jpg" width="238" height="171" />
            <div class="greenBoard" style="width:238px;background:#e9ac90;"></div>
            <div class="bar" style="position:absolute; left:35px; bottom:23px; width:50px; height:3px; background:#fff;"></div>
            <a href="fashion.php" class="label" style="display:block; width:447px; height:171px; z-index:1000;background:url(img/label-video.png) 35px 90px no-repeat;"> </a>
            
         </div>
          <div id="productCombine"  style="border-top:solid #61dac7 5px; border-bottom:solid #83aadd 5px; position:relative; top:0px;">
         	<img src="img/fashion.jpg" width="237" height="171" />
            <div class="greenBoard" style="width:237px; background:#83aadd;"></div>
           <div class="bar" style="position:absolute; left:35px; bottom:23px; width:50px; height:3px; background:#fff;"></div>
            <a href="mainmatch.php" class="label" style="display:block; width:237px; height:171px; z-index:1000;background:url(img/label-fashion.png) 35px 90px no-repeat;"> </a>
            
         </div>
     </div><!--main-->
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
         
     	 <span>Copyright @ 2014Jims. Incorporated. Allright reserved </span>
     </div><!--footer-->
</div><!--wrapper-->
 
</body>
</html>
