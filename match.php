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
@import 'jsimgslider/slider.css';
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

    <script src="jsimgslider/thumbnail-slider.js" type="text/javascript"></script>
	 
	<!--[if lt IE 7]>
    <script type="text/javascript" src="js/iepngfix_tilebg.js"></script>

 <style type="text/css">
 

 img, div, input,li,h4 { behavior: url("js/iepngfix.htc") }

 
 </style>
    
    <![endif]-->
<script type="text/javascript">
$(document).ready(function(){
	
	var bigImg=$.profero.getQueryString("big");
	 
	$( ".each" ).each(function( index ) {
 		var src=$( this ).children("a").children("img").attr("src");
  		 //alert(src);
		if(src.indexOf(bigImg)<0){
		//	 alert(index);
			$temp=$( this ).clone();
			$last=$( ".each" ).last();
			$last.after($temp);
			$( this ).remove();
			
		}else{return false;}
	});
	/*var params = {
		wmode: "transparent",
		SCALE: "exactfit" 
			
	};
	swfobject.embedSWF("flash/4-5.swf", "flash1", 242, 143, "9.0.0", "flash/expressInstall.swf", "", params);*/
	
	 
	//$(".showImg").colorbox();

	//$(".showImg").click(function(){return false;});
	 //$(".btnShowDaodao").colorbox({ inline: true, href: "#daodao",onLoad:function(){
        //$('.hideIni').hide();
    //} }); 
	
	var mct1_Options =
{
    sliderId: "mcts1",
    direction: "",
    scrollInterval: 3900,
    scrollDuration: 1100,
    hoverPause: true,
    autoAdvance: true,
    scrollByEachThumb: true,
    circular: true,
    largeImageSlider: null,
    inSyncWithLargeImageSlider: true,
    license: "b6t80"
};

var thumbnailSlider = new ThumbnailSlider(mct1_Options);

	
});

 
</script>
<style>
a {outline: none;}    a:active {star:expression(this.onFocus=this.blur());} 
#productList li{float:left;}
#productList li a{display:block;float:left;}

#productList li img{width:240px;}
#proudctList li.wider img{width:480px;}
#back{position:absolute;top:89px; left:80px; background:none; width:118px; height:32px; display:block;}

</style>
</head>
<body>
<div id="wrapper" >
	 <? include("header.php"); ?>
     <div id="main" style="position:relative;padding:0px 0 40px 0;background:url(img/bg-match.jpg) center top #fff;">
         
        
       <div id="mcts1">
            <div class="each">
                <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/01.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/02.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/03.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/04.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/06.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/07.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/08.png" /></a>
            </div>
            <!--<div class="each">
                <img src="img/match/big/09.png" />
            </div>-->
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/10.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/11.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/12.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/13.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/14.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/15.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/16.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/17.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/18.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/19.png" /></a>            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/20.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/21.png" /></a>
            </div>
            <div class="each">
                 <a href="http://jims.tmall.com/?spm=a220o.1000855.w5001-3116494140.4.wlRZeB&scene=taobao_shop" target="_blank"><img src="img/match/big/22.png" /></a>
            </div>


        </div>  
         <a href="mainmatch.php" id="back" >&nbsp;</a>
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
