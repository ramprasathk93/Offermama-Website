//
//    $(document).ready(function(){
//       click_cat('home',0);
//    });
    
function click_recommend(pid,bid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    $.post('recommend.php',{'pid':pid,'bid':bid,'uid':uid},function(response){
        $('.recommend-button #'+bid).html(response);
    })
    $.post('recommend-increment.php',{'bid':bid,'uid':uid},function(response){
            $('.no-of-recommends #'+bid).html(response);
        })
    }
}
function click_unrecommend(pid,bid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    $.post('unrecommend.php',{'pid':pid,'bid':bid,'uid':uid},function(response){
        $('.unrecommend-button #'+bid).html(response);
    })
    $.post('unrecommend-increment.php',{'bid':bid,'uid':uid},function(response){
            $('.no-of-unrecommends #'+bid).html(response);
        })
    }
}

function click_recommended(pid,bid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    $.post('recommended.php',{'pid':pid,'bid':bid,'uid':uid},function(response){
        $('.recommend-button #'+bid).html(response);
    })
    $.post('recommend-decrement.php',{'bid':bid,'uid':uid},function(response){
            $('.no-of-recommends #'+bid).html(response);
        })
    }
}
function click_unrecommended(pid,bid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    $.post('unrecommended.php',{'pid':pid,'bid':bid,'uid':uid},function(response){
        $('.unrecommend-button #'+bid).html(response);
    })
    $.post('unrecommend-decrement.php',{'bid':bid,'uid':uid},function(response){
            $('.no-of-unrecommends #'+bid).html(response);
        })
    }
}

//function to like a post
function click_like(pid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    	$.post('like.php',{'pid':pid,'uid':uid},function(response){
            $('#'+pid+' .like-button').html(response);
        });
        $.post('like-increment.php',{'pid':pid,'uid':uid},function(response){
            $('#'+pid+' .no-of-likes').html(response);
        })
    }
}
//function to unlike a post
function click_unlike(pid,uid){
    if(!uid.localeCompare('unknown')){
        alert('Not logged in');
    }
    else{
    	$.post('unlike.php',{'pid':pid,'uid':uid},function(response){
            $('#'+pid+' .like-button').html(response);
        });
        $.post('like-decrement.php',{'pid':pid,'uid':uid},function(response){
            $('#'+pid+' .no-of-likes').html(response);
        })
    }
}
//fucntion to load the offer details
    function click_offer(id,bid){
        $('.p2p').innerHTML='Loading...';
        $.post('load_product.php',{'id':id,'bid':bid},function(response){
            $(".p2p").html(response);
        })       
    }  
    //funciton to display offers based on the category
    function click_cat(id,k){
        id=typeof id !== 'undefined'?id:'home';
        k=typeof k !== 'undefined'?k:0;
        $('#restaurants').removeClass('active_category');
        $('#grooming').removeClass('active_category');
        $('#transport').removeClass('active_category');
        $('#cg').removeClass('active_category');
        $('#p2p').removeClass('active_category');
        $('#clothing').removeClass('active_category');
        $('#electronics').removeClass('active_category');
        $('#'+id).addClass('active_category');
        var p2p_minbar='<div class"contain-to-grid fixed">\
        <nav class="top-bar tb" data-topbar>\
        <section class="top-bar-section">\
        <ul class="left">\
        <li class="divider"></li>\
        <li><a onclick="click_target(0)">Acad-Books</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_target(1)">1st year</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_target(2)">Novels</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_target(3)">Cycles</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_target(4)">Electronics</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_target(5)">Others</a></li>\
        <li class="divider"></li>\
        </ul>\
        </section>\
        </nav>\
        </div>';
        var minbar='<div class"contain-to-grid fixed">\
        <nav class="top-bar tb" data-topbar>\
        <section class="top-bar-section">\
        <ul class="left">\
        <li class="divider"></li>\
        <li><a onclick="click_region(0)">All</a></li>\
        <li class="divider"></li>\
        </ul>\
        <ul class="right">\
        <li class="divider"></li>\
        <li><a onclick="click_region(1)">Gandhipuram</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_region(2)">Peelamedu</a></li>\
        <li class="divider"></li>\
        <li><a onclick="click_region(3)">RS Puram</a></li>\
        </ul>\
        </section>\
        </nav>\
        </div>';
        var n=id.localeCompare('p2p');
        $('.wall').innerHTML='Loading...';
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
        $('.p2p').html('');
    }
//To categorize by region
    function click_region(k){
        var cat=$('.active_category').attr('id');
        click_cat(cat,k);
    }
//To categorize by target market in p2p
    function click_target(k){
        $('.wall').innerHTML='Loading...';
        $.post('p2p_offers.php',{year:k},function(response){
               $('.wall').html(response);
               })
        $('.p2p').html('');
    }
    function click_poffer(pid){
        $('.p2p').innerHTML='Loading...';
        $.post('load_poffer.php',{'pid':pid},function(response){
            $('.p2p').html(response);
        })
    }
    function click_review(bid,uid){
        if ( $('#comment_text').val()=='' && ($('#comment_text').val().trim().length == 0) )
        {
            alert('Please type a review');
        }
        
        else if(!uid.localeCompare('unknown')){
            alert('Not logged in');
        }
else{
        $.post('load_comment.php',{'bid':bid,'uid':uid},function(response){
            $('#enter-comment').html(response);
        })
        $.post('validate_comment.php',$('#usercomment').serialize(),function(response){
            $('.comments').html(response);
        })
        }
    }