
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
    
    $(document).on('click','#comment_btn',function(){
        $.post('validate_comment.php',$('#usercomment').serialize(),function(response){
        $('.p2p').html(response);
        });
    });
    
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
    
    function click_cat(id){
        $('#restaurants').removeClass('active_category');
        $('#books').removeClass('active_category');
        $('#transport').removeClass('active_category');
        $('#cg').removeClass('active_category');
        $('#p2p').removeClass('active_category');
        $('#'+id).addClass('active_category');
        $.post('offers.php',{'cat':id},function(response){
            $(".wall").html(response);
        });       
    }
    function click_o_top(){
        //$.post('offer_top.php',{'cat':"home"},function(response){
        //    $(".wall").html(response);
        //});
        
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
