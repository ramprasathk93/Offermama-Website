<?php
$bid=$_POST['bid'];
require_once "../../config/database.php";

foreach($conn->query('select * from business_info where b_id="'.$bid.'"')as $x){
    $name=$x['name'];
    $addr=$x['address'];
    $phone=$x['phone'];
    $category=$x['category'];
}

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

<br>
<div class="row" style="text-align:center;">
    <div class="small-5 small-uncentered columns"><img class="row right" style="height:300;" src="uploads/20140926_095434.jpg"></div>
    <div class="small-6 small-uncentered columns" style="text-align:left;">
        <table style="border:none;">
        <div class="row"><div><td colspan="2"><b><h2>'.$name.'</h2></b></td></div></div>
        <tr><div class="row"><div><td><h4><b>Address</b></h4></td><td>:</td><td><h4>'.$addr.'</h4></td></div></div></tr>
        <tr><div class="row"><div><td><h4><b>Phone</b></h4></td><td>:</td><td><h4>'.$phone.'</h4></td></div></div></tr>
        <tr><div class="row"><div><td><h4><b>Category</b></h4></td><td>:</td><td><h4>'.$category.'</h4></td></div></div></tr>
        </table>
    </div>
</div>
<br/>
<br/>
<center>
<div style="width:80%;text-align:left;">
    <div style="background-color:#883e93;padding-left:37px;"><h4><font color="white">Review\'s of '.$name.'</font></h4></div>
</div>
<div class="panel" style="width:80%;text-align:left;">';
foreach($conn->query('select * from review where b_id="'.$bid.'" order by likes')as $y){
    echo '<div class="row"><div class="small-7 small-uncentered columns"><b>User ID : </b>'.$y["u_id"].'</div><div class="small-3 small-uncentered columns">'.$y["likes"].' likes</div></div>';
    echo '<br/><div class="row"><div class="small-12 small-uncentered columns"><b>Review : </b>'.$y["content"].'</div></div>';
    echo '<hr style="">';
}
    echo '</div></center>';
?>