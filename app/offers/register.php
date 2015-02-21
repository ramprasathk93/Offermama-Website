<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>

<html>
    
<head>
    <title>Offer Mama</title>
    <link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">

    <link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400' rel='stylesheet' type='text/css'>
  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    
    <style>
      .bg{
            background-color:#FBC02D;
            z-index:100;
            background-size:cover;
            height:100%;
        }
        .tb
        {
            box-shadow:0px 0px 0px 0px;
               
     
        }
        .left{
            background-color:#fff;
        }
 button:hover, button:focus, .button:hover, .button:focus {
     -webkit-transition:0.7s;
    box-shadow:0px 0px 0px 0px;
 background-color:#f44336;
}


       
     </style>
</head>
<body class="bg">
 
<div class"contain-to-grid fixed">
<nav class="top-bar tb" style="background-color:#fff" data-topbar >
    
<ul class="title-area" style="margin-top:-0.7%">
<li class="name" >
<h1>
<a href="index.php" style="color:#243456">
Offermama<sup>beta</sup>
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
    <section class="top-bar-reg">
<ul class="left">
    
<!--<li class="divider"></li>-->

    
<!--<li><a href='user_ad.php'>Sell your stuff</a></li>-->
    
   <!--<li class="divider"></li>-->

    
</ul>
 
<ul class="right">
<!--<li class="divider"></li>-->

<!--<li class="divider"></li>-->
    <li><a href='contact_us.html'>Contact Us</a></li>
<li ><a href='login.php'>Login</a></li>
</ul>
     </section>
</section>
</nav>
</div>

<div class="row1">
    
    <div class="small-4 columns small-centered">
         <p class="welcome"> Welcome to Offermama</p>
      <div class="signup-panel">
       
         <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
          
        <form class="form1" method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
          <div class="row collapse">
          <!--  <div class="small-1  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>-->
            <div class="small-10  columns">
              <input type="text" name="username" id="username" placeholder="username">
            </div>
          </div>
          <div class="row collapse">
            <!--  <div class="small-1  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>-->
            <div class="small-10  columns">
              <input type="text" name="email" id="email" placeholder="email">
            </div>
          </div>
          <div class="row collapse">
            <!--  <div class="small-1  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>-->
            <div class="small-10 columns ">
              <input type="password" id="password" name="password" placeholder="password">
                
            </div>
          </div>
        <div class="row collapse">
              <!--  <div class="small-1  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>-->
            <div class="small-10 columns ">
                     
              <input type="password" id="confirmpwd" name="confirmpwd" placeholder="confirmpassword">

                    
            </div>
        </div>
             
            </div>
           
        
         
            <div class="buton">
          <!--  <input type="button" value="Register" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);" />-->
                <button class="box box1" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);">Register</button>
            </div>
      </form>
         <p class="reg">The password must contain one Uppercase,one lowercase and a number</p>
         <p class="reg">Already have an account? <a href="login.php">Login here &raquo</a></p>
      </div>
    </div>
   </div>


</body>
</html>