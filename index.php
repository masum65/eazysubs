<?php
if($_SERVER['PHP_SELF'] == '/index.php' or $_SERVER['PHP_SELF'] == '/eazysubs/index.php')
{
     include 'init.php';
}
if (is_authed()) 
{
    	header( 'Location: home.php' ) ;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><title>EazySubs - Gain youtube success!</title>
<meta name="title" content="EazySubs - Gain youtube success!" />
<meta name="description" content="The Most Convenient Way To Gain Youtube Success." />
<meta name="keywords" content="you tube youtube, youtube you tube, you tube.com, what is twitter, watch youtube, about twitter, how to twitter, about facebook, how to facebook, face book, Youtube subscribers,youtube,you,tube,get,more,channel,sub4sub,exchange, subscription" />

<div class='back'></div>
<?
if(isset($_GET['f'])){
$f = $_GET["f"]; 
if($f == 'sf')
{
?>
<script type="text/javascript">
setTimeout("alert('Thank you for registering. Please sign in now.')",500);
</script>
<?php
}
}

if(isset($_GET['r'])){ 
$_SESSION['ref'] = $_GET["r"];
}
?>
<div align='center' style='text-align: center;margin-right:auto; margin-left:auto;width:1000px;'>

<div style='position:absolute; margin-top:7px;margin-left:15px;'><img src='images/logo2.png'></div>
<div style='position:absolute; margin-top:49px;margin-left:-5px;'><img src='images/underlineLogo.png'></div>
    <!--<div style='font-weight:bold; font-size:small; font-family:arial;width:1000px;color:Black;position:absolute; margin-top:60px;'>
        Important message: Sorry, for the inconvenience. As the site usage has increased dramatically and it gets over 100,000 page views a day, the current hardware is not sufficient and the site is experiencing temporary difficulties. Over the next few days we will be upgrading our hardware. Thank you for your participation in the success of www.EazySubs.com and for your valuable comments and suggestions.
    </div>-->
<div style='position:absolute; margin-top:15px;margin-left:550px;'><img src='images/logoTitle.png'></div>
<div style='position:absolute; margin-top:125px;margin-left:10px;'><img src='images/registerBox.png'></div>
<div style='position:absolute; margin-top:125px;margin-left:460px;'><img src='images/loginBox.png'></div>

<div style='position:absolute; margin-top:320px;margin-left:610px;'><img border='0' src='images/faqBox.png'><a style='position:absolute;margin-left:-135px;margin-top:135px;' href='faq.php'><img border='0' src='images/faqButton2.png'></a></div>

<div style='position:absolute; margin:auto; margin-top:530px;margin-left:100px;'><img border='0' src='images/descBox.png'>
    <div style="text-align:justify;margin-top:-210px;margin-left:33px;font-family:arial;font-weight:bold;width:680px;font-size:18px;">
    You get a point, you lose a point, we work on a points system that is the best way!
We recycle points to make our server the fastest on the web! Gain a point for
watching, commenting, liking or viewing and lose a point if someone does the
same to you! EazySubs is a website where people from all around the world can
watch, comment, like, and subscribe to you! It is a great way for people to increase
their YouTube traffic. This site is 100% YouTube Partnership Safe, and the subs are
100% real! Not stupid bots that sub to you like some other sites...
        </div>
    </div>

    
<?php

if(isset($error)){
echo"<div style='color:white;font-weight: bold;position:absolute; margin-top:455px;margin-left:40px;'>$error</div>";
}

if(isset($loginerror)){
echo"<div style='color:white;font-weight: bold;position:absolute; margin-top:270px;margin-left:490px;'>$loginerror</div>";
}

?>
<div style="position:absolute;margin-top:161px;margin-left:152px;"><?php include 'register_form.inc.php'; ?></div>

<div style="position:absolute;margin-top:161px;margin-left:602px;"><?php include 'login_form.inc.php'; ?></div>
</div></body></html>

<style type="text/css">
html{
color:white;
}
.back{
padding:10px;
margin-top:-10px;
margin-left:-10px;
height:100%;
width: 100%;
position: fixed;
background-image:url('images/background3.png');
}
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11908777-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>