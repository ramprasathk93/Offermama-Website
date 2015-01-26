<?php
$bid=$_POST['bid'];
require_once "../../config/database.php";
echo '<div class"contain-to-grid fixed">
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
<li><a href="user_ad.html">Sell your stuff</a></li>
<li class="divider"></li>
</ul>
<ul class="right">
<li class="divider"></li>
<li><a href="register.html">Register</a></li>
<li class="divider"></li>
<li><a href="login.html">Login</a></li>
</ul>
</section>
</nav>
</div>
</div>

<div class="row" style="text-align:center;">
<img style="height:300;" src="uploads/20140926_095434.jpg">
</div>
<div class="row"><div>

<br>';
?>