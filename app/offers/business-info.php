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
    <link rel="stylesheet" type="text/css" href="../../common/fonts">
    <link rel="stylesheet" type="text/css" href="../../common/css/main.css">
    <script src="../../common/js/jquery.min.js"></script>
    <script src="functions.js"></script>
    <script src="../../common/js/foundation/foundation.js"></script>

</head>


<body>
    <div class "contain-to-grid fixed">
        <nav class="top-bar tb" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1>
                        <a href="index.php">
                            Offermama
                        </a>
                    </h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
                </li>
            </ul>
            <section class="top-bar-section">
                <ul class="left">
                    <li class="divider"></li>
                    <li><a href="user_ad.html">Sell your stuff</a>
                    </li>
                    <li class="divider"></li>
                </ul>
                <ul class="right">
                    <li class="divider"></li>
                    <li><a href="register.html">Register</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </section>
        </nav>
    </div>
    </div>
    <br>
    <div class="row" style="text-align:center;">
        <div class="small-5 small-uncentered columns">
            <?php echo '<img class="row right" style="height:300;" src="businesslogos/'.$img. '">'; ?>
        </div>
        <div class="small-6 small-uncentered columns" style="text-align:left;">
            <table style="border:none;">
                <div class="row">
                    <div>
                        <td colspan="2">
                            <?php echo '<b><h2>'.$name. '</h2></b>' ?>
                        </td>
                    </div>
                </div>
                <tr>
                    <div class="row">
                        <div>
                            <td>
                                <h4><b>Address</b></h4>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h4>'.$addr. '</h4>'; ?>
                            </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="row">
                        <div>
                            <td>
                                <h4><b>Phone</b></h4>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h4>'.$phone. '</h4>'; ?>
                            </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="row">
                        <div>
                            <td>
                                <h4><b>Category</b></h4>
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo '<h4>'.$category. '</h4>'; ?>
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
            <div style="background-color:#883e93;padding-left:37px;">
                <?php echo '<h4><font color="white">Review\'s of '.$name.'</font></h4>'; ?></div>
        </div>
        <div class="panel" style="width:80%;text-align:left;">';
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