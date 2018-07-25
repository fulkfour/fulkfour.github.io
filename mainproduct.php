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
	
	 
	//$("#daodao").colorbox({iframe:true, innerWidth:468, innerHeight:450});


	 //$(".btnShowDaodao").colorbox({ inline: true, href: "#daodao",onLoad:function(){
        //$('.hideIni').hide();
    //} }); 

	$(".showImg").colorbox({rel:'showImg',slideshow:true,slideshowAuto:false});
});

 
</script>
<style>
#main ul{width:860px; margin:auto; padding:15px 0 25px 0;}
#main ul li{width:188px; padding: 0 0 35px 0; float:left; margin:0 35px 0 0; position:relative;}


#main ul li.last{margin:0 0px 0 0;}
</style>
</head>
<body>
<div id="wrapper" >
	 <? include("header.php"); ?>
     <div id="main" style="font-family:微软雅黑,Microsoft YaHei,simhei, 黑体; background:#fff; ">
     	
        <img src="img/mainproduct-title.jpg" width="960" style="padding:20px 0 20px 0;"/>
        <ul class="clearfix">
        	<li>
            <a class="showImg" href="img/product/big/1-1.jpg" ><img class="product" src="img/product/small/1.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/2-2.jpg" ><img class="product" src="img/product/small/2.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/3-3.jpg" ><img class="product" src="img/product/small/3.jpg" /></a>
             
            </li>
            <li class="last">
            <a class="showImg" href="img/product/big/4-4.jpg" ><img class="product" src="img/product/small/4.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/5-5.jpg" ><img class="product" src="img/product/small/5.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/6-6.jpg" ><img class="product" src="img/product/small/6.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/7-7.jpg" ><img class="product" src="img/product/small/7.jpg" /></a>
             
            </li>
            <li class="last">
            <a class="showImg" href="img/product/big/8-8.jpg" ><img class="product" src="img/product/small/8.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/01-01.jpg" ><img class="product" src="img/product/small/01.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/02－02.jpg" ><img class="product" src="img/product/small/02.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/03-03.jpg" ><img class="product" src="img/product/small/03.jpg" /></a>
             
            </li>
            <li class="last">
            <a class="showImg" href="img/product/big/04－04.jpg" ><img class="product" src="img/product/small/04.jpg" /></a>
             
            </li>
             <li>
            <a class="showImg" href="img/product/big/05-05.jpg" ><img class="product" src="img/product/small/05.jpg" /></a>
             
            </li>
            <li>
            <a class="showImg" href="img/product/big/06-06.jpg" ><img class="product" src="img/product/small/06.jpg" /></a>
             
            </li>
            <!--<li class="last">
            <a class="showImg" href="img/product/big/1-15.jpg" ><img class="product" src="img/product/small/1-15.jpg" /></a>
             
            </li>-->
        </ul>
         
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
