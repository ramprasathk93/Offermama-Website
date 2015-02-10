<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<html>
<head>
<title>Offer Mama</title>
    <link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    <style>
            .tb{
                    box-shadow:0px 0px 0px;
            }
        button:hover, button:focus, button:hover,  button:focus{
            transition:right 1000ms ease-out;
        box-shadow:0px 0px 0px 0px;
        background-color:#0D47A1;
        }
        .button{
                color:#0D47A1;
        }
        .signup-panel{
            margin-top:21%;
        }
         .signup-panel .welcome {
                margin-left:-10%;
                font-size:150%;
             width:150%;
        }
        .error{
            text-align:center;
            color:red;
        }
    </style>
</head>
<body class="login_bg">
<div class"contain-to-grid fixed">
<nav class="top-bar tb" style="background-color:#fff"data-topbar>
<ul class="title-area" style="margin-top:-0.7%">
<li class="name">
<h1>
<a href="index.php" style="color:#0D47A1">
Offermama
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
    <section class="top-bar-login">
 
<ul class="left">
<!--<li class="divider"></li>-->
<li><a href='user_ad.php'>Sell your stuff</a></li>
<!--<li class="divider"></li>-->
</ul>
 
<ul class="right">
<!--<li class="divider"></li>-->
    <li><a href="register.php">Register</a></li>
<!--<li class="divider"></li>-->
<li><a href='login.php'>Login</a></li>
</ul>
        </section>
</section>
</nav>
</div>
<div class="row">
    <div class="small-4 columns small-centered">
      <div class="signup-panel">
        <p class="welcome"> Welcome Back to Offermama</p>
        <form  action="includes/process_login.php" method="post" name="login_form">
          <div class="row collapse">
            <!--<div class="small-2 columns">
              <span class="prefix"><i class="fi-mail"></i></span>
            </div>-->
            <div class="small-10  columns">
              <input type="text" name="email" placeholder="email">
            </div>
          </div>
          <div class="row collapse">
            <!--<div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>-->
            <div class="small-10 columns ">
              <input type="password" name="password" id="password" placeholder="password">
            </div>
          </div>
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="row error">Error Logging In!</div><br>';
        }
        ?>
          <div class="buton_login">
           <!-- <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> -->
              <button class="box box_login" onclick="formhash(this.form,this.form.password);">SUBMIT</button>
            </div>
        </form>
          <div class="login">
              <p>
        If you don't have a login, please <a href="register.php">register</a><br>
                  </p>
          </div>
        
      </div>
    </div>
   </div>
</body>
</html>