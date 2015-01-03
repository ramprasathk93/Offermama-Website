
    $(document).ready(function(){
       click_cat('home',0);
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
        var p2p_minbar='<div class"contain-to-grid fixed">\
        <nav class="top-bar" data-topbar>\
        <section class="top-bar-section">\
        <ul class="left">\
        <li class="divider"></li>\
        <li><a onclick="click_year(0)">General</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_year(1)">1st year</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_year(2)">2nd year</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_year(3)">3rd year</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_year(4)">4th year</a></li>\
        <li class="divider"></li>\
        </ul>\
        </section>\
        </nav>\
        </div>';
        var minbar='<div class"contain-to-grid fixed">\
        <nav class="top-bar" data-topbar>\
        <section class="top-bar-section">\
        <ul class="left">\
        <li class="divider"></li>\
        <li><a onclick="click_top()">Top</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_recent()">Recent</a></li>\
        <li class="divider"></li>\
        </ul>\
        </section>\
        </nav>\
        </div>';
        var n=id.localeCompare('p2p');
        if(n==0){
            //$('#mini_bar').html(str);
            $.post('offers.php',{'cat':id,'sort':k},function(response){
            $('#mini_bar').html(p2p_minbar);
            $(".wall").html(response);
        });
        }
        else{
        $.post('offers.php',{'cat':id,'sort':k},function(response){
            $('#mini_bar').html(minbar);
            $(".wall").html(response);
        });
        }
    }
    function click_top(){
        var cat=$('.active_category').attr('id');
        click_cat(cat,0);
    }
    
    function click_recent(){
        var cat=$('.active_category').attr('id');
        click_cat(cat,1);
    }
    function click_year(k){
        $.post('p2p_offers.php',{year:k},function(response){
               $('.wall').html(response);
               });
    }