<html>
<head>
<title>Offer Mama</title>
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<script src="../../common/js/jquery.min.js"></script>
    <script src="../../common/js/unslider.min.js"></script>
<script src="functions.js"></script>
<script src="../../common/js/foundation/foundation.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59582237-1', 'auto');
  ga('send', 'pageview');

</script>
     <script>
         $('.slider').unslider({
	speed: 100,               //  The speed to animate each slide (in milliseconds)
	delay: 3000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: true             //  Support responsive design. May break non-responsive designs
});
        $(document).ready(function() {
                    $('.slider').unslider();
                        });
       </script>
          <script>
            var slidey = $('.slider').unslider(),
    data = slidey.data('unslider');
    
//  Start Unslider
data.start();

//  Pause Unslider
data.stop();

//  Move to a slide index, with optional callback
data.move(2, function() {});
//  data.move(0);

//  Manually enable keyboard shortcuts
data.keys();

//  Move to the next slide (or the first slide if there isn't one)
data.next();

//  Move to the previous slide (or the last slide if there isn't one)
data.prev();

//  Append the navigation dots manually
data.dots();
    </script>
    <script>
        $(document).ready(function(){
        $("#all").click(function(){
            $("#paperwall").css("background-image","url(images/all.png)","no-repeat");
            $("#paperwall").css("background-color","#ef5350");
            $("#paperwall .wall").css("opacity",0.9);
            $(".off").css("background","transparent");
            $(".off").css("background-size","auto");
            $("#mini_bar").css("opacity",1); 
            $(".slider li").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $(".dots").css("opacity",0);
            $(".row .p2p").css("opacity",0.9);
            $(".top a").css("color","#fff");
            $(".Logo").css("opacity",0);
            
        });
    });
    $(document).ready(function(){
        $("#restaurants").click(function(){
            $("#paperwall").css("background-image","url(images/rest.jpg)","no-repeat");
            $("#paperwall").css("background-color","#ef5350");
            $(".dots").css("opacity",0);
            $(".off").css("background","transparent");
            $(".off").css("background-size","100%");
            $("#mini_bar").css("opacity",1); 
            $(".slider li").css("background","transparent"); 
            $(".slider li p").css("opacity",0);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $(".top a").css("color","#fff");
            $(".index h1").css("opacity",1);
            $(".index h4").css("opacity",1);
            $(".index img").css("opacity",1);
            $(".Logo").css("opacity",0);
            
        });
    });
        $(document).ready(function(){
        $("#grooming").click(function(){
            $("#paperwall").css("background-image","url(images/spects.jpg)");
            $("#paperwall").css("background-color","#ef5350");
            $(".off").css("background","transparent");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $(".slider li").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $("#mini_bar").css("opacity",1);
            $(".dots").css("opacity",0);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $(".top a").css("color","#fff");
            $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            $(".Logo").css("opacity",0);
            
        });
    });
        $(document).ready(function(){
            $("#transport").click(function(){
            $("#paperwall").css("background-image","url(images/taxi.jpg)");
            $("#paperwall").css("background-color","#F3D575");
            $(".off").css("background","transparent");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $(".slider li").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $(".dots").css("opacity",0);
            $(".row .tb").css("opacity",1);
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $(".top a").css("color","#fff");
            $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            $(".Logo").css("opacity",0);
        });
        });
        $(document).ready(function(){
            $("#cg").click(function(){
            $("#paperwall").css("background-image","url(images/cake3.jpg)");
            $("#mini_bar").css("opacity",1);
            $("#paperwall").css("background-color","#DEB77E");
            $(".dots").css("opacity",0);
            $(".off").css("background","transparent");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $(".slider li").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $("#mini_bar").css("opacity",1);  
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $(".top a").css("color","#fff");
            $(".Logo").css("opacity",0);
            $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        $(document).ready(function(){
            $("#clothing").click(function(){
            $("#paperwall").css("background-image","url(images/women.jpg)");
            $("#paperwall").css("background-color","#F48FB1");
            $(".off").css("background","transparent");
            $(".off").css("background-repeat","no-repeat");
            $(".dots").css("opacity",0);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $("#mini_bar").css("opacity",1);
            $(".slider li").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            $(".Logo").css("opacity",0);
        });
        });
        $(document).ready(function(){
            $("#electronics").click(function(){
            $("#paperwall").css("background-image","url(images/electronic1.jpg)");
            $("#paperwall").css("background-color","#616161");
            $(".off").css("background","transparent");
            $(".slider li p").css("opacity",0);
            $(".off").css("background-repeat","no-repeat");
            $(".dots").css("opacity",0);
            $(".slider li").css("background","none");
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            $(".Logo").css("opacity",0);
        });
        });
        </script>
   
<!-- <style>
           .row .off{
                  box-shadow:0px 0px 0px 0px rgba(0,0,0,0.24)
           }
        
    </style>-->
    <style>
        .slider li{
            list-style:none;
        }
        .slider ul li { float: left;color: white;margin-left:0%;background-size:100% auto;height:320px; }
        .slider ul{
            height:100%;width:80%;margin-top:0;position:relative;margin-left:-0.1%;
        }
       
    </style>
</head>
<body id="paperwall">
<div class"contain-to-grid fixed">
<nav class="top-bar tb_index" data-topbar>
      
<ul class="title-area">
 
      
      
        

<li class="name index">
<h1>
<a href="index.php" style="color:blue">
Offermama<sup>beta</sup>
</a>
</h1>

</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section top_index"> 
<ul class="right index">
<!--<li><a href='user_ad.php'>Sell your stuff</a></li>-->
    <li><a href='contact_us.html'>Contact Us</a></li>
<li><a href="register.php">Register</a></li>

<li><a href='login.php'>Login</a></li>
</ul>
</section>
</nav>
</div>
<br/>
    
<div class="row off">
   <div class="slider" style="height:600px;width:100%">
       
       <ul>
          <li style=" background-image:url(images/rest_slider8.jpg);">
           <p style="color:#fff;font-family:Open Sans;margin-left:37%;margin-top:7%;font-size:400%;font-weight:bold;height:10%;">Restaurants</p><br>
              <p style="color:#fff;font-family:Open Sans;;margin-left:35.5%;margin-top:2%;font-size:120%;font-weight:bold">Look for awesome food with great ambience!</p>
              
           </li>
  <li style=" background-image:url(images/cake_slider2.jpg);">
            <p style="color:#fff;font-family:Open Sans;margin-left:33%;margin-top:7%;font-size:400%;font-weight:bold">Cakes and Gifts</p><br>
            <p style="color:#fff;font-family:Open Sans;margin-left:35%;margin-top:-3%;font-size:120%;font-weight:bold">Offers enriched with affection             and sweetness</p>
  </li>
  <li style=" background-image:url( images/electronics_slider1.jpg);">
          <p style="color:#fff;font-family:Open Sans;margin-left:37.5%;margin-top:7%;font-size:400%;font-weight:bold">Electronics</p><br>
          <p style="color:#fff;font-family:Open Sans;margin-left:44%;margin-top:-3%;font-size:120%;font-weight:bold">Go! Go! Gadgets!</p>
  </li>
  <li style=" background-image:url( images/spects_slider.jpg);">
          <p style="color:#fff;font-family:Open Sans;margin-left:28%;margin-top:7%;font-size:400%;font-weight:bold">Grooming and Optics</p><br>
          <p style="color:#fff;font-family:Open Sans;margin-left:35%;margin-top:-3.5%;font-size:120%;font-weight:bolder">See the beautiful world and             the beautiful You!</p>
  </li>
  </ul>
       <ol class="dots">
           <li class="dot"></li>
           <li class="dot"></li>
           <li class="dot"></li>
           <li class="dot"></li>
       </ol>
    </div>
    <div class="small-12 large-2 small-uncentered columns small-12 maincategory menu">
       
         <dl class="tabs pill vertical" style="z-index:100">
            <dd><a id="all" onclick=click_cat("home",0) >All</a></dd>
            <dd><a id="restaurants" onclick=click_cat("restaurants",0) >Restaurants</a></dd>
            <dd><a id="grooming" onclick=click_cat("grooming",0)>Grooming/Optics</a></dd>
            <dd><a id="transport" onclick=click_cat("transport",0)>Cabs/Tours</a></dd>
            <dd><a id="cg" onclick=click_cat("cg",0)>Cakes/Gifts</a></dd>
            <dd><a id="clothing" onclick=click_cat("clothing",0)>Clothing</a></dd>
            <dd><a id="electronics" onclick=click_cat("electronics",0)>Electronics</a></dd>
            <!--<dd><a id="p2p" onclick=click_cat("p2p",0)>Peer2Peer</a></dd>-->
          </dl>
    </div>
  
        <div id="mini_bar">
        </div>
        <div class="wall">
        </div>
        

    
        <div class="p2p">
        </div>
  
    </div>    
</div>
    <div class="Logo">
        <img src="images/Logo.PNG" >
    </div>
    <div class="offermama_logo">
        <p style="">Offermama.com</p>
    </div>
</body>
</html>