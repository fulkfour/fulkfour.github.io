<? ini_set("display_errors", "On");
error_reporting(E_ALL);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
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

	
});

 
</script>
<style>
#productList li{float:left;}
#productList li a{display:block;float:left;}

#productList li img{width:240px;}
#proudctList li.wider img{width:480px;}

#leftColumn ul li{height:65px; position:relative;padding:25px 10px 25px 20px;background:#000;}
#leftColumn .month{font-size:32px; color:#fff; position:absolute; top:25px;right:200px;}
#leftColumn .day{font-size:16px; color:#fff;position:absolute; top:65px;right:200px;}
#leftColumn .title{font-size:15px; color:#fff;position:absolute; top:25px; left:72px; width:160px;}
#leftColumn .title a{color:#fff; }
#leftColumn .subtitle{font-size:12px; color:#aaa; padding:10px 0 0px 0; line-height:20px;}
#leftColumn .thumb{background:url(img/daymonth.png) 20px 55px no-repeat #000;}

</style>
</head>
<body>
<div id="wrapper" >
	  <? include("header.php"); ?>
      <?php  
	  
	  define('WP_USE_THEMES', false);
 
include_once('wp-load.php');
 
 


global $post;  
$myposts = get_posts('numberposts=5&offset=0&category=2&orderby=post_date&order=DESC');  

 ?>
     <div id="main" style="background:#242424; border-top:solid #fff 3px; min-height:650px;" class="clearfix">
      
        <div id="leftColumn" style="width:260px; height:270px; background:#000; float:left;">
        	<ul>
            	<li style="border-bottom:solid #ff7f7e 5px;">
                	<p style="font-size:30px; color:#fff;">CAMPAIGN</p>
                    <p style="font-size:20px; color:#aaa;">最新活动</p>
                    <div style="width:60px;height:5px; background:#fff; margin:17px 0 0 0;"></div>
                </li>
                <? foreach($myposts as $post) :  ?>     
				<li class="thumb" style="border-bottom:solid #61dac7 5px;">
                	<div class="month">05</div>
                    <div class="day">16</div>
                	<div class="title">
                    	<div><a href="news.php?p=<?php the_ID(); ?>"><?php the_title(); ?></a></div>
                   		<div class="subtitle">该JIMS男装于2006率先进入服装市场, 年稳打稳扎.</div>
                    </div>
                </li>
				<?php endforeach; ?>              	
            </ul>
        </div><!--leftColumn-->
        <div id="rightColumn" style="width:700px; float:right;">
        	<div id="content" style="width:572px; margin:auto; padding:40px 0 40px 0;">
                <p style="font-size:22px; color:#fff;">加盟JIMS(吉牡)男装,为你的成功开启一扇门</p>
                <p style="font-size:20px; color:#aaa; padding:10px 0 15px 0;">2013/05/16</p>
                <div style="color:#fff; font-size:12px; line-height:20px;">
                	<p>该JIMS男装于2006率先进入服装市场, JIMS男装现面向中国的女性投资诚邀加盟,只需要投资20-50万即可成为我们的伙伴, JIMS男装凭借多年稳打稳扎,不断求新突破,最终形成可以满足人们需求的实力品牌.
                    </p>
                    <br />
                	<img src="img/img.jpg" />
                </div>
            </div><!--content-->
        </div><!--rightColumn-->
       <div style="clear:both;"></div>
     </div><!--main-->
     <div id="footer" style="clear:both;">
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
