<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<html>
<head>
<title>Offer Mama</title>
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>-->
    

<script src="../../common/js/jquery.min.js"></script>
<script src="functions.js"></script>
<script src="../../common/js/foundation/foundation.js"></script>
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
        $(document).ready(function(){
        $("#all").click(function(){
            $("#paperwall").css("background-image","url(images/all.png)","no-repeat");
            $("#paperwall").css("background-color","#ef5350");
             $("#paperwall .wall").css("opacity",0.9);
           $(".off").css("background","transparent");
            $(".off").css("background-size","auto");
            $("#mini_bar").css("opacity",1); 
          $(".slider li").css("background","transparent");
            $(".dots").css("opacity",0);
           $(".row .p2p").css("opacity",0.9);
             
            $(".index h1").css("opacity",1);
             $(".index h4").css("opacity",1);
            $(".index img").css("opacity",1);
          
      
            
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
            $("#paperwall .wall").css("opacity",0.9);
           $(".row .p2p").css("opacity",0.9);
             
            $(".index h1").css("opacity",1);
             $(".index h4").css("opacity",1);
            $(".index img").css("opacity",1);
            
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
          $("#mini_bar").css("opacity",1);
              $(".dots").css("opacity",0);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
             
                  $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
            
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
              $(".dots").css("opacity",0);
            $(".row .tb").css("opacity",1);
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
          $(".row .p2p").css("opacity",0.9);
           
                  $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
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
         $("#mini_bar").css("opacity",1);  
            $("#paperwall .wall").css("opacity",0.9);
           $(".row .p2p").css("opacity",0.9);
            
          
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
           
                 $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        $(document).ready(function(){
        $("#electronics").click(function(){
            $("#paperwall").css("background-image","url(images/electronic1.jpg)");
            $("#paperwall").css("background-color","#616161");
                     $(".off").css("background","transparent");
            $(".off").css("background-repeat","no-repeat");
             $(".dots").css("opacity",0);
            $(".slider li").css("background","none");
            $("#mini_bar").css("opacity",1);
            $("#paperwall .wall").css("opacity",0.9);
            $(".row .p2p").css("opacity",0.9);
            
              $(".index h1").css("opacity",1);
            $(".index img").css("opacity",1);
        });
        });
        </script>
   
    <style>
           .off{
                  
                background-image:none;
           }
         #paperwall{
            background-image:url(images/all.png);
             
        }
        
       
        .index_leftuser{
            opacity:1;
        }
        .menu{
           margin-top:0%;
       }
        .wall{
            margin-top:3%;
            height:63%;
        }
        #mini_bar{
            margin-top:0%;
        }
        .p2p{
            margin-top:0;
        }
       .tb{
           background-color:#fff;
           height:9%;
       }
        .top li:not(.has-form) a:not(.button){
    background-color:transparent;
            color:blue;

 
}
.top li:not(.has-form) a:not(.button):hover{
   background-color: transparent;
    color:blue;
  
}
.top ul li{
   background-color: transparent;
    margin-top:2%;
  
        
}
.top ul li > a{
    font-size: 100%;
    font-weight: 400;
    font-family: "Open Sans";
    color:blue;
}
    </style>
    
</head>
<body id=paperwall>
<?php if (login_check($mysqli) == true) : ?>

<div class"contain-to-grid fixed">
<nav class="top-bar tb" data-topbar>
      
<ul class="title-area">
 
      
      
        

<li class="name index">
<h1>
<a href="home.php" style="color:blue">
      
     
     Offermama<sup>beta</sup>
   

</a>
</h1>

</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section top"> 
    
    <ul class="left index_leftuser">
    <li>Welcomes <?php echo htmlentities($_SESSION['username']); ?></li>
        </ul>
<ul class="right index">
<!--<li><a href='profile.php'>Profile</a></li>-->
<!--<li><a href='user_ad.php'>Sell your stuff</a></li>-->
<li><a href='user_ad.php' style="color:blue">Sell Your Stuff</a></li>
<li><a href='contact_us.html' style="color:blue">Contact Us</a></li>
<li ><a href='includes/logout.php'>Logout</a></li>
</ul>
</section>
</nav>
</div>
<br/>
    
<div class="row off">
  
    <div class="small-12 large-2 small-uncentered columns small-12 maincategory menu">
       
         <dl class="tabs pill vertical" style="z-index:99">
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

<?php else : ?>
        <p>
            <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
        </p>
        <?php endif; ?>
</body>
</html>