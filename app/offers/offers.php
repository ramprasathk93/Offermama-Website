<?php 
//session_start();
//require_once "../main.php";
require_once "../../config/database.php";

$cat=$_POST['cat'];
$sort=$_POST['sort'];

if($sort==0){
if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b order by likes_count desc") as $row)
   {
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' order by likes_count desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' order by likes_count desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"transport"))
{
//    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div>'.
  //      '<div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' order by likes_count desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' order by likes_count desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"p2p"))
{
      //echo '<div class="mini_taskbar"><div class="o_recent">Recent</div><div class="o_top">Top</div></div>';
    foreach($conn->query("select * from postuser") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
    }
	
}
}
else{
    if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b order by time desc") as $row)
   {
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' order by time desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' order by time desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"transport"))
{
//    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div>'.
  //      '<div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' order by time desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' order by time desc") as $row)
    {
        //echo '<div class="panel offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>
                <div class="row">
                    <div class="small-10 small-uncentered columns">
                        <div class="row">
                            <div class="small-8 small-uncentered columns">
                                <h5>The Title of the Company</h5>
                            </div>
                            <div class="small-4 small-uncentered columns">
                                Rating - 2.65/5
                            </div>
                        </div>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-up fa-lg" id="recommend" title="Recommend Business"></i>
                    </div>
                    <div class="small-1 small-uncentered columns">
                        <i class="fa fa-hand-o-down fa-lg" id="unrecommend" title="Unrecommend Business"></i>
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
                        <div>M.R.P <strike><font style="">Rs.400</font></strike></div>
                        <div>
                            <font style="color:#CC0000;font-size:18px;">Rs.200</font>
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 small-uncentered columns">
                        <div class="row">
                            <div class="small-1 columns">
                                <i class="fa fa-thumbs-o-up fa-lg" title="Like" style="color:gold;"></i>
                            </div>
                            <div class="small-9 small-uncentered columns">
                                10 people liked this
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
else if(!strcmp($cat,"p2p"))
{
      //echo '<div class="mini_taskbar"><div class="o_recent">Recent</div><div class="o_top">Top</div></div>';
    foreach($conn->query("select * from postuser") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
    }
	
}   
}
?>