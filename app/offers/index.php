<html>
<head>
<title>Offer Mama</title>
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
<script src="../../common/js/jquery.min.js"></script>
<script src="functions.js"></script>
<script src="../../common/js/foundation/foundation.js"></script>
</head>
<body>
<div class"contain-to-grid fixed">
<nav class="top-bar tb" data-topbar>
<ul class="title-area">
<li class="name">
<h1>
<a href="home.php">
Offermama
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
 
<ul class="left">
<li class="divider"></li>
<li><a href='user_ad.php'>Sell your stuff</a></li>
<li class="divider"></li>
</ul>
 
<ul class="right">
<li class="divider"></li>
<li><a href="register.php">Register</a></li>
<li class="divider"></li>
<li><a href='login.php'>Login</a></li>
</ul>
</section>
</nav>
</div>
<br/>
<div class="row">
    <div class="small-12 large-2 small-uncentered columns small-12 maincategory">
         <dl class="tabs pill vertical">
          <dd><a id="restaurants" onclick=click_cat("restaurants",0)>Restaurants</a></dd>
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
        <p>wall</p>
        </div>
    </div>
    <div class="small-6 large-4 columns">
        <div class="p2p">
            <p>p2p</p>
        </div>
    </div>
</div>
</body>
</html>