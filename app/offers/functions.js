
    $(document).ready(function(){
        $.ajax({type: "POST",
    url: "offers.php",             
    dataType: "html",   //expect html to be returned
    data:{cat:"home",sort:0},
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
    
    function click_cat(id,k){
        id=typeof id !== 'undefined'?id:'home';
        k=typeof k !== 'undefined'?k:0;
        $('#restaurants').removeClass('active_category');
        $('#books').removeClass('active_category');
        $('#transport').removeClass('active_category');
        $('#cg').removeClass('active_category');
        $('#p2p').removeClass('active_category');
        $('#'+id).addClass('active_category');
        $.post('offers.php',{'cat':id,'sort':k},function(response){
            $(".wall").html(response);
        });       
    }
    function click_top(){
        var cat=$('.active_category').attr('id');
        click_cat(cat,0);
    }
    
    function click_recent(){
        var cat=$('.active_category').attr('id');
        click_cat(cat,1);
    }