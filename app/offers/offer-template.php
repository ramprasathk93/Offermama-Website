<?php
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       if( ($k['recommend'] + $k['unrecommend']) != 0 ){
            $rating=($k['recommend']/($k['recommend']+$k['unrecommend']))*5;
       }

        else{
            $rating=0;
        }
       $str='<a onclick=click_like("'.$row['post_id'].'","'.$u_id.'")>Like</a>';
       $r1='<a onclick=click_recommend("'.$row['post_id'].'","'.$row['b_id'].'","'.$u_id.'")>approve</a>';
       $r2='<a onclick=click_unrecommend("'.$row['post_id'].'","'.$row['b_id'].'","'.$u_id.'")>disapprove</a>';
       foreach($conn->query('select * from likes where u_id="'.$u_id.'" and post_id="'.$row['post_id'].'"')as $x){
       $str='<a onclick=click_unlike("'.$row['post_id'].'","'.$u_id.'")>Unlike</a>';
       }
       foreach($conn->query('select * from recommend where u_id="'.$u_id.'" and b_id="'.$row['b_id'].'"') as $x){
           $r1='<a onclick=click_recommended("'.$row['post_id'].'","'.$row['b_id'].'","'.$u_id.'")>approved</a>';
       }
       foreach($conn->query('select * from unrecommend where u_id="'.$u_id.'" and b_id="'.$row['b_id'].'"') as $x){
           $r2='<a onclick=click_unrecommended("'.$row['post_id'].'","'.$row['b_id'].'","'.$u_id.'")>disapproved</a>';
       }
       
       
       if( $row['mrp'] != 0 ){
       echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'","'.$row['b_id'].'")>
                <div class="row">
                    <div class="small-5 small-uncentered columns">
                        <div><a href="business-info.php?bid='.$row['b_id'].'"><h5>'.$k['name'].'</h5></a></div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                      <div class="rating">'.number_format((float)$rating, 1, '.', '').'
                        </div>
                    </div>
                    <div class="small-2 small-uncentered columns">
                    <div class="recommend-button">
                    <div id="'.$k['b_id'].'">
                    '.$r1.'
                    </div>
                    </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                    <div class="no-of-recommends">
                    <div id="'.$k['b_id'].'">
                    '.$k['recommend'].'
                    </div>
                    </div>
                    </div>
                    <div class="small-2 small-uncentered columns">
                    <div class="unrecommend-button">
                    <div id="'.$k['b_id'].'">
                    '.$r2.'
                    </div>
                    </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                    <div class="no-of-unrecommends">
                    <div id="'.$k['b_id'].'">
                    '.$k['unrecommend'].'
                    </div>
                    </div>
                    </div>
                </div>
                <span>
                <div class="row">
                    <div class="small-2 columns">
                        <a href="business-info.php?bid='.$row['b_id'].'"><img src="businesslogos/'.$k['logo'].'"/></a>
                    </div>
                    <div class="small-8 small-uncentered columns">
                        <font style="font-family:Open Sans;font-size:14px;">
                        '.$row['content'].'
                        </font>
                    </div>
                    <div class="small-2 columns amount" style="text-align:center;">
                        <div><strike><font style="font-family:Open Sans;font-size:14px; margin-left:-10;">Rs.'.$row['mrp'].'</font></strike></div>
                        <div class="row">
                            <font style="font-family:Open Sans;color:#CC0000;font-size:16px; margin-right:5;">Rs.'.$row['sp'].'</font>
                        </div>
                    </div>
                </div>
                </span>
                <div class="row">
                    <div class="small-12 small-uncentered columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <div class="like-button">'.$str.'</div>
                            </div>
                            <div class="small-7 small-uncentered columns">
                            <div class="no-of-likes" style="font-family: Open Sans;color:#1E52A2">
                            '.$row['likes_count'].' likes
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
       }
    else{
               echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'","'.$row['b_id'].'")>
                <div class="row">
                    <div class="small-5 small-uncentered columns">
                        <div><h5><a href="business-info.php?bid='.$row['b_id'].'">'.$k['name'].'</a></h5></div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                      <div class="rating">'.number_format((float)$rating, 1, '.', '').'
                        </div>
                    </div>
                    <div class="small-2 small-uncentered columns">
                    <div class="recommend-button">
                    <div id="'.$k['b_id'].'">
                    '.$r1.'
                    </div>
                    </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                    <div class="no-of-recommends">
                    <div id="'.$k['b_id'].'">
                    '.$k['recommend'].'
                    </div>
                    </div>
                    </div>
                    <div class="small-2 small-uncentered columns">
                    <div class="unrecommend-button">
                    <div id="'.$k['b_id'].'">
                    '.$r2.'
                    </div>
                    </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                    <div class="no-of-unrecommends">
                    <div id="'.$k['b_id'].'">
                    '.$k['unrecommend'].'
                    </div>
                    </div>
                    </div>
                </div>
                <span>
                <div class="row">
                    <div class="small-2 columns">
                        <a href="business-info.php?bid='.$row['b_id'].'"><img src="businesslogos/'.$k['logo'].'"></a>
                    </div>
                    <div class="small-8 small-uncentered columns">
                        <font style="font-family:Open Sans;font-size:14px;">
                        '.$row['content'].'
                        </font>
                    </div>
                </div>
                </span>
                <div class="row">
                    <div class="small-12 small-uncentered columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <div class="like-button">'.$str.'</div>
                            </div>
                            <div class="small-7 small-uncentered columns">
                            <div class="no-of-likes" style="font-family: Open Sans">
                            '.$row['likes_count'].' likes
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
?>