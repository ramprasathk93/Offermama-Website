<?php 
//session_start();
//require_once "../main.php";
require_once "../../config/database.php";

$cat=$_POST['cat'];
$sort=$_POST['sort'];
$u_id='ram11233';
//sort variable is for the areas where 0,1,2,3 is for all,gandhipuram,peelamedu,rspuram resp.
//cat variable tells us which category we have currently clicked
if($sort==0){
if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b order by likes_count desc") as $row)
   {
       foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k)
       {
       include 'offer-template.php';
       }
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"transport"))
{
//    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div>'.
  //      '<div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
        include 'offer-template.php';
        }
   }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       include 'offer-template.php';
    }
   }
}
else if(!strcmp($cat,"p2p"))
{
      //echo '<div class="mini_taskbar"><div class="o_recent">Recent</div><div class="o_top">Top</div></div>';
    foreach($conn->query("select * from postuser") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
		//echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
            include 'poffer-template.php';
        }
    }
	
}
}
else if($sort==1){
    if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b where area='gandhipuram' order by likes_count desc") as $row)
   {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' and area='gandhipuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' and area='gandhipuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
        include 'offer-template.php';
        }
   }
}
else if(!strcmp($cat,"transport"))
{
//    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div>'.
  //      '<div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' and area='gandhipuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
    }
   }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' and area='gandhipuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
    }
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
else if($sort==2){
        if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b where area='peelamedu' order by likes_count desc") as $row)
   {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' and area='peelamedu' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       //echo '<div class="panel offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' and area='peelamedu' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
        include 'offer-template.php';
        }
   }
}
else if(!strcmp($cat,"transport"))
{
//    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div>'.
  //      '<div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' and area='peelamedu' order by likes_count desc") as $row)
   {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' and area='peelamedu' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
    }
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
else if($sort==3){
        if(!strcmp($cat,"home"))
{
   foreach($conn->query("select * from post_b where area='rspuram' order by likes_count desc") as $row)
   {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"restaurants"))
{
 //   echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div>'.
   //     '<div class="res_top" onclick=click_res_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='restaurants' and area='rspuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"books"))
{
    //echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div>'.
      //  '<div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' and area='rspuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
    }
   }
}
else if(!strcmp($cat,"transport"))
{ 
    foreach($conn->query("select * from post_b where category='transport' and area='rspuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       
       include 'offer-template.php';
   }
   }
}
else if(!strcmp($cat,"cg"))
{
    //echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div>'.
      //  '<div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' and area='rspuram' order by likes_count desc") as $row)
    {   foreach($conn->query('select * from business_info where b_id="'.$row['b_id'].'"') as $k){
       include 'offer-template.php';
    }
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