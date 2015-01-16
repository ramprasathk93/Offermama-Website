<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<html>
<head>
<title>Offer Mama</title>
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<script src="../../common/js/jquery.min.js"></script>
<script src=functions.js></script>
<script src="../../common/js/foundation/foundation.js"></script>
  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
<div class"contain-to-grid fixed">
<nav class="top-bar" data-topbar>
<ul class="title-area">
 
<li class="name">
<h1>
<a href="home.html">
Offermama
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
 
<ul class="left">
<li class="divider"></li>
<li><a href='user_ad.html'>Sell your stuff</a></li>
<li class="divider"></li>
</ul>
 
<ul class="right">
<li class="divider"></li>
<li><a href="register.html">Register</a></li>
<li class="divider"></li>
<li><a href='login.html'>Login</a></li>
</ul>
</section>
</nav>
</div>
<div class="row">
    <div class="small-4 columns small-centered">
      <div class="signup-panel">
        <p class="welcome"> Welcome to Offermama</p>
         <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"  method="post" 
                name="registration_form">
          <div class="row collapse">
            <div class="small-2  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" name="username" id="username" placeholder="username">
            </div>
          </div>
          <div class="row collapse">
            <div class="small-2 columns">
              <span class="prefix"><i class="fi-mail"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" name="email" id="email" placeholder="email">
            </div>
          </div>
          <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="password" id="password" name="password" placeholder="password">
            </div>
          </div>
        <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="password" id="confirmpwd" name="confirmpwd" placeholder="password">
            </div>
          </div>
            <div>
            <input type="button" value="Register" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);" /> 
            </div>
        </form>
      
         <p>Already have an account? <a href="login.html">Login here &raquo</a></p>
      </div>
    </div>
   </div>
</body>
</html>