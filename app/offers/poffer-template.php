<?php     
       
       echo '<div class="panel offer" id="'.$row['postid'].'" onclick=click_poffer("'.$row['postid'].'")>
                <div class="row">
                    <div class="small-5 small-uncentered columns">
                        <h5>'.$k['name'].'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="small-2 columns" style="width:100;height:100;">
                        <img src="uploads/20140926_095434.jpg">
                    </div>
                    <div class="small-8 small-uncentered columns">
                        '.$row['content'].'
                    </div>
                    <div class="small-2 columns" style="text-align:center;">
                        <div>M.R.P <strike><font style="">Rs.'.$row['mrp'].'</font></strike></div>
                        <div class="row">
                            <font style="color:#CC0000;font-size:18px;">Rs.'.$row['sp'].'</font>
                        </div>
                        <div class="row">
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';   
?>