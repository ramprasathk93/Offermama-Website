<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true){ 
$uid=htmlentities($_SESSION['email']);
}
else {
    $uid='unknown';
}
?>
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
    <style>
    .offer{
        background-color:#efefef;
        font-family:"Open Sans";
        font-size:100%;
        color:#000;
        margin-top:0;
        border-radius:2px;
        box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
          opacity:0.9;
    }
        .prof dd{
        color:#FFF;
            box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
            opacity:1;
        }
        .p2p{
        margin-top:0;
            background-color:#efefef;
            opacity:0.95;
            height:50%;
            border-radius:2px;
           box-shadow:0px 2px 5px 0px rgba(0,0,0,0.70);
        }
        
    </style>
<script>
$(document).ready(function(){
    click_posts("<?php echo $uid;?>");
})
function click_posts(uid){
    $.post('posts.php',{'uid':uid},function(response){
        $('.wall1').html(response);
    })
}
function click_delete(pid){
    $.post('delete_post.php',{'pid':pid},function(response){
        $('.wall1').html(response);
    })
}
</script>
</head>
<body style="background-color:#efefef;background-image:url(images/suit1.jpg);background-size:cover">
   
<?php if (login_check($mysqli) == true) : ?>
<div class"contain-to-grid fixed">
<nav class="top-bar profile" data-topbar>
<ul class="title-area">
<li class="name" >
<h1>
<a href="home.php">
Offermama<sup style="font-size:80%">beta</sup>
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
 

 
<ul class="right">
    <li class="divider"></li>
<li><a href='user_ad.php'>Sell your stuff</a></li>
<li class="divider"></li>
<li class="divider"></li>
<li><a href="profile.php">Profile</a></li>
<li class="divider"></li>
<li><a href="register.php">Register</a></li>
<li class="divider"></li>
<li><a href='includes/logout.php'>Logout</a></li>
</ul>
</section>
</nav>
</div>
<br/>
<div class="row prof_offer"> 
  
    <div class="small-12 large-2 small-uncentered columns small-12 maincategory">
         <dl class="tabs pill vertical prof">
            <dd><a id="posts" onclick=click_posts("<?php echo $uid;?>")>Posts</a></dd>
            <dd><a id="grooming" onclick=click_settings("<?php echo $uid; ?>")>Settings</a></dd>
        </dl>
    </div>
    <div class="small-6 large-6 columns view">
        <div class="wall1">
        </div>
    </div>
    <div class="small-6 large-4 columns">
        <div class="p2p">
        </div>
    </div>
  
</div>
   
<?php else : ?>
        <p>
            <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
        </p>
        <?php endif; ?>
</body>
</html>