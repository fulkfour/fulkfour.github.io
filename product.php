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
	/*var params = {
		wmode: "transparent",
		SCALE: "exactfit" 
			
	};
	swfobject.embedSWF("flash/4-5.swf", "flash1", 242, 143, "9.0.0", "flash/expressInstall.swf", "", params);*/
	
	 
	$(".showImg").colorbox();

	//$(".showImg").click(function(){return false;});
	 //$(".btnShowDaodao").colorbox({ inline: true, href: "#daodao",onLoad:function(){
        //$('.hideIni').hide();
    //} }); 

	
});

 
</script>
<style>
a {outline: none;}    a:active {star:expression(this.onFocus=this.blur());} 
#productList li{float:left;}
#productList li a{display:block;float:left;}

#productList li img{width:240px;}
#proudctList li.wider img{width:480px;}
</style>
</head>
<body>
<div id="wrapper" >
	 <? include("header.php"); ?>
     <div id="main" style="position:relative;">
        <h1 style=" border-bottom:solid #2f2f2f 55px;color:#000; padding:0 0 0 30px; font-size:12px; line-height:30px ; height:30px; background:#fff;">原创时尚是由许多知名设计师创作的多风格设计作品.</h1>
        
        <ul id="productList" style="">
        	<li><a href="#"><img src="img/product1.jpg" /></a></li>
        	<li><a href="#"><img src="img/product2.jpg" /></a></li>
        	<li><a href="#"><img src="img/product3.jpg" /></a></li>
        	<li><a href="#"><img src="img/product4.jpg" /></a></li>
        	<li><a href="#"><img src="img/product5.jpg" /></a></li>
        	<li class="wider" ><a href="#"><img src="img/product6.jpg"  style="width:480px; height:391px;" /></a></li>
        	<li><a href="#"><img src="img/product7.jpg" /></a></li>
        </ul>
        <div style="position:absolute;  top:30px; left:0px; background:url(img/bg-product.png)right 10px no-repeat  ; width:960px; height:840px; padding:55px 0 0 0;">
        	<a class="showImg" href="img/overlay7.jpg" style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay6.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay4.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay5.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay3.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay2.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay2.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           <a class="showImg" href="img/overlay1.jpg"  style="width:240px;height:391px; float:left; display:block; "></a>
           
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