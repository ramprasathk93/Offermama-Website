
    $(document).ready(function(){
        $.ajax({type: "POST",
    url: "offers.php",             
    dataType: "html",   //expect html to be returned
    data:{cat:"home"},
    success: function(response){                    
        $(".wall").html(response); 
        //alert(response);
    }
    });
    });
    $(document).on('click','.o_top',function(){click_o_top();});
    $(document).on('click','.o_recent',function(){click_o_recent();});
    
    
    $(document).on('click','#submit_btn',function(){
        /*
        var formdata= new FormData($('#userpost'));     
        
        $.ajax({
            url:'validate.php',
            dataType:'html',
            type:'POST',
            data:formdata,
            success:function(response){
                $('.p2p').html(response);
            },
            cache:false,
            contentType:false,
            processData:false
        });
        */
       /* var form=document.getElementById('userpost');
        var fileselect=document.getElementById('fileToUpload');
        var files=fileselect.files;
        var formData=new FormData();
        var file=files[0];
        formData.append('photo',file,file.name);
        formData.append('content',$('#userpost').val());
        formData.append('chk',document.getElementsByName('chk').value());
        var xhr=new XMLHttpRequest();
        xhr.open('POST','validate.php',true);
        xhr.send(formData);
        $('.p2p').html("Upload Successfull");
        */
    });
    
    $(document).on('click','#comment_btn',function(){
        $.post('validate_comment.php',$('#usercomment').serialize(),function(response){
        $('.p2p').html(response);
        });
    });
    
    function click_register(){
        $.post('register.html',function(response){
            $(".wall").html(response);
            $(".p2p").html("");
        });
    }
    function click_login(){
        $.post('login.html',function(response){
            $(".wall").html(response);
            $(".p2p").html("");
        });
    }
    function click_home(){
        $.post('offers.php',{'cat':"home"},function(response){                   var str='<div class"contain-to-grid fixed">\
<nav class="top-bar" data-topbar>\
<section class="top-bar-section">\
<ul class="left">\
<li class="divider"></li>\
<li><a onclick="click_o_top()">Top</a></li>\
<li class="divider"></li>\
<li><a onclick="click_o_recent()">Recent</a></li>\
</ul>\
</section>\
</nav>\
</div>';
            
            $(".wall").html(str + response);
        })       
    }
    
    function click_poffer(id){
        $.post('load_product_p2p.php',{'id':id},function(response){
            $(".p2p").html(response);
        })       
    } 

    function click_offer(id){
        $.post('load_product.php',{'id':id},function(response){
            $(".p2p").html(response);
        })       
    }  
    
    function click_res(){
        $.post('offers.php',{'cat':"restaurants"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_books(){
        $.post('offers.php',{'cat':"books"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_pg(){
        $.post('offers.php',{'cat':"pg"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_trans(){
        $.post('offers.php',{'cat':"transport"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_p2p(){
        $.post('p2p_offers.php',function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_o_top(){
        $.post('offer_top.php',{'cat':"home"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_o_recent(){
        $.post('offer_recent.php',{'cat':"home"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_sell(){
        $.post('form.php',function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_res_top(){
        $.post('offer_top.php',{'cat':"restaurants"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_res_recent(){
        $.post('offer_recent.php',{'cat':"restaurants"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_books_top(){
        $.post('offer_top.php',{'cat':"books"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_books_recent(){
        $.post('offer_recent.php',{'cat':"books"},function(response){
            $(".wall").html(response);
        })       
    }
    
    function click_pg_top(){
        $.post('offer_top.php',{'cat':"pg"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_pg_recent(){
        $.post('offer_recent.php',{'cat':"pg"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_trans_top(){
        $.post('offer_top.php',{'cat':"transport"},function(response){
            $(".wall").html(response);
        })       
    }

    function click_trans_recent(){
        $.post('offer_recent.php',{'cat':"transport"},function(response){
            $(".wall").html(response);
        })       
    }
