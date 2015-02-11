<html>
<?php 
$bid=$_GET[ 'bid'];
require_once "../../config/database.php";
foreach($conn->query('select * from business_info where b_id="'.$bid.'"')as $x){
    $name=$x['name'];
    $addr=$x['address'];
    $phone=$x['phone'];
    $category=$x['category'];
    $img=$x['logo'];
    }
    ?>
<head>
    <?php echo '<title>'.$name. '</title>'; ?>
    <link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../../common/font-awesome-4.2.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
      
    <script src="../../common/js/jquery.min.js"></script>
    <script src="functions.js"></script>
    <script src="../../common/js/foundation/foundation.js"></script>
    <style>
       .row .right{
             background-color: #fff;
  box-shadow:0px 2px 5px 0px rgba(0,0,0,0.70);
           width:110%;
           height:93%;
           margin-top:3%;
           margin-left:5%;
           margin-right:-5%;
          
         
           
       }
        .row .bus_column{
            
            width:40%;
            margin-left:5%;
            height:50%;
          box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
            border-radius:3px;
            background-color:#fff;
            
        }
        .row .bus_ad{
            border-radius:2px;
            margin-left:2%;
            height:20%;
            width:50%;
            background-color:#DCE775;
            box-shadow:2px 2px 5px 0px rgba(0,0,0,0.50);
        }
        .bus_img{
            width:100%;
         
            
        }
        table{
            margin-top:7%;
           
         
        }
        tbody{
            
             margin-top:7%;
           
            background-color:#fff;
        }
        table .bus_tab{
            border-radius:3px;
           border:transparent;
          
        }
    
        .row .right{
   background-color: #fff;
  box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
}
        .review{
            height:5%;
            border-radius:2px;
            background-color:#DCE775;
              box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
            z-index:100;
        }
        .review h6{
            line-height:200%;
            font-family:"Open Sans";
          
        }
        .review_panel{
            font-family: "Open Sans";
            background-color:#fff;
           z-index:50;
            height:20%;
            width:79%;
            border-radius:2px;
             box-shadow:0px 2px 5px 0px rgba(0,0,0,0.50);
        }
        
    </style>

</head>


<body style="background-color:#4CAF50">
    <div class "contain-to-grid fixed">
        <nav class="top-bar bus_tb" data-topbar>
            <ul class="title-area">
                <li class="name bus_index">
                    <h1>
                        <a href="index.php">
                            Offermama<sup>beta</sup>
                        </a>
                    </h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
                </li>
            </ul>
            <section class="top-bar-section bus_section">
             
                <ul class="right">
                    <li class="divider"></li>
                    <li><a href="user_ad.php">Sell your stuff</a>
                    </li>
                    <li class="divider"></li>
                    <li class="divider"></li>
                    <li><a href="register.php">Register</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.php">Login</a>
                    </li>
                </ul>
            </section>
        </nav>
    </div>
    </div>
    <br>
    <div class="row" style="text-align:center;">
        <div class="small-5 small-uncentered columns bus_column">
             <div class="small-5 small-uncentered columns bus_img">
            <?php echo '<img class="row right";" src="businesslogos/'.$img.'.jpg">'; ?>
                 </div>
        </div>
        <div class="small-5 small-uncentered columns bus_ad" style="text-align:left;">
            <table class="bus_tab"style="box-shadow:2px 2px 5px 0px rgba(0,0,0,0.50);">
                <div class="row" style="background-color:#4CAF50">
                    <div >
                        <td colspan="4">
                            <?php echo '<b><h3>'.$name. '</h3></b>' ?>
                        </td>
                    </div>
                </div>
                <tr style="background-color:#DCE775">
                    <div class="row">
                        <div>
                            <td>
                                <h5><b>Address</b></h5>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h5>'.$addr. '</h5>'; ?>
                            </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="row">
                        <div>
                            <td>
                                <h5><b>Phone</b></h5>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h5>'.$phone. '</h5>'; ?>
                            </td>
                        </div>
                    </div>
                </tr>
                <tr style="background-color:#DCE775">
                    <div class="row">
                        <div>
                            <td>
                                <h5><b>Category</b></h5>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h5>'.$category. '</h5>'; ?>
                            </td>
                        </div>
                    </div>
                </tr>
            </table>
        </div>
    </div>
    <br/>
    <br/>
    <center>
        <div style="width:80%;text-align:left;">
            <div class="review" style="padding-left:37px;">
                <?php echo '<h6><font color="#424242">Review\'s of '.$name.'</font></h6>'; ?></div>
        </div>
        <div class="review_panel" style="text-align:left;">';
            <?php
            foreach($conn->query('select * from review where b_id="'.$bid.'" order by likes')as $y){ 
                echo '<div class="row">
                <div class="small-7 small-uncentered columns"><b>User ID : </b>'.$y["u_id"].'</div>
                <div class="small-3 small-uncentered columns">'.$y["likes"].' likes</div>
                </div>';
                echo '<br/>
                <div class="row">
                <div class="small-12 small-uncentered columns"><b>Review : </b>'.$y["content"].'</div>
                </div>'; 
                echo '
                <hr style="">';
            } 
            ?>
        </div>
    </center>
</body>

</html>