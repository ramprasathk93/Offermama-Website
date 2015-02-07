<html>
<head>
<title>Offer Mama</title>
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<script src="../../common/js/jquery.min.js"></script>
<script src="functions.js"></script>
<script src="../../common/js/foundation/foundation.js"></script>
    <script>
    $(document).ready(function(){
        $("#restaurants").click(function(){
            $("#paperwall").css("background-image","none");
            $("#paperwall").css("background-color","#ef5350");
           $(".off").css("background-image","url(http://localhost/offermama/app/offers/images/rest.jpg)","no-repeat");
            $(".off").css("background-size","100%");
            $("#mini_bar").css("opacity",1); 
            $(".off").css("box-shadow"," 0px 1px 12px 7px #C63633");
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.7);
              $(".top a").css("color","#fff");
            $(".index h1").css("opacity",1);
             $(".index h4").css("opacity",1);
            $(".index img").css("opacity",1);
            
        });
    });
        $(document).ready(function(){
        $("#grooming").click(function(){
            $("#paperwall").css("background-image","none");
            $("#paperwall").css("background-color","#ef5350");
           $(".off").css("background-image","url(http://localhost/offermama/app/offers/images/spects.jpg)");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $(".off").css("box-shadow"," 0px 1px 12px 7px #C63633");
          $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.7);
              $(".top a").css("color","#fff");
                  $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            
        });
    });
        $(document).ready(function(){
        $("#transport").click(function(){
            $("#paperwall").css("background-image","none");
            $("#paperwall").css("background-color","#F3D575");
           $(".off").css("background-image","url(images/taxi.jpg)");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
             $(".off").css("box-shadow"," 0px 1px 5px 6px #C9A84C");
            $(".row .tb").css("opacity",1);
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.7);
            $(".top a").css("color","#fff");
                  $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        $(document).ready(function(){
        $("#cg").click(function(){
            $("#paperwall").css("background-image","none");
               $("#mini_bar").css("opacity",1);
            $("#paperwall").css("background-color","#DEB77E");
           $(".off").css("background-image","url(images/cake1.jpg)");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
        
            $(".off").css("box-shadow"," 0px 1px 5px 6px #C69C61");
         $("#mini_bar").css("opacity",1);  
            $("#paperwall .wall").css("opacity",0.7);
            $(".row .p2p").css("opacity",0.7);
              $(".top a").css("color","#fff");
          
                  $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        $(document).ready(function(){
        $("#clothing").click(function(){
            $("#paperwall").css("background-image","none");
            $("#paperwall").css("background-color","#F48FB1");
           $(".off").css("background-image","url(images/women.jpg)");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $("#paperwall .wall").css("opacity",0.9);
            $("#mini_bar").css("opacity",1);
            $(".off").css("box-shadow"," 0px 1px 8px 6px #CC6687");
              $(".top a").css("color","#fff");
                 $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        $(document).ready(function(){
        $("#electronics").click(function(){
            $("#paperwall").css("background-image","none");
            $("#paperwall").css("background-color","#616161");
           $(".off").css("background-image","url(images/electronic.jpg)");
            $(".off").css("background-repeat","no-repeat");
            $(".off").css("background-size","100% 100%");
            $(".off").css("box-shadow"," 0px 1px 10px 3px #383333");
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.5);
            $(".row .p2p").css("opacity",0.7);
              $(".top-bar-section a").css("color","#fff");
              $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
    </script>
    <!--<style>
           .off{
                 box-shadow: 0px 1px 20px 7px #C63633;
           }
        
    </style>-->
</head>
<body id="paperwall">
<div class"contain-to-grid fixed">
<nav class="top-bar tb" data-topbar>
      
<ul class="title-area">
 
      
      
        

<li class="name index">
<h1>
<a href="index.php">
      
     
     Offermama<sup>beta</sup>
   

</a>
</h1>

</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section top"> 
<ul class="right index">
<li><a href='user_ad.php'>Sell your stuff</a></li>
<li><a href="register.php">Register</a></li>

<li><a href='login.php'>Login</a></li>
</ul>
</section>
</nav>
</div>
<br/>
    
<div class="row off">
    <div class="small-12 large-2 small-uncentered columns small-12 maincategory menu">
       
         <dl class="tabs pill vertical" style="z-index:99">
            <dd><a id="All" onclick=click_cat("home",0) >ALL</a></dd>
            <dd><a id="restaurants" onclick=click_cat("restaurants",0) >Restaurants</a></dd>
            <dd><a id="grooming" onclick=click_cat("grooming",0)>Grooming/Optics</a></dd>
            <dd><a id="transport" onclick=click_cat("transport",0)>Cabs/Tours</a></dd>
            <dd><a id="cg" onclick=click_cat("cg",0)>Cakes/Gifts</a></dd>
            <dd><a id="clothing" onclick=click_cat("clothing",0)>Women's clothing</a></dd>
            <dd><a id="electronics" onclick=click_cat("electronics",0)>Electronics</a></dd>
            <dd><a id="p2p" onclick=click_cat("p2p",0)>Peer2Peer</a></dd>
             
          
        </dl>
       
    </div>
    <div class="small-6 large-6 columns">
        <div id="mini_bar">
        </div>
        <div class="wall">
        </div>
        
    </div>
    <div class="small-6 large-4 columns">
        <div class="p2p">
        </div>
    </div>
</div>
</body>
</html>