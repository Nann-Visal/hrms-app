$(document).ready(function(){

    // // hide/show sidebar function
    // hide_show_sidebar();
    // function hide_show_sidebar(){
    //     var i_sidebar = 1;
    //     $("#btn-mn").click(function(){

    //         if(i_sidebar == 1){
    //             $(".box-sidebar").css({'left':'-240px'});
    //             i_sidebar = 0;
    //         }else if(i_sidebar == 0){
    //             $(".box-sidebar").css({'left':'0px'});
    //             i_sidebar = 1;
    //         }

    //     });
    // };

    //active and unactive of item in sidebar menu
    // active_unactive_mn();
    // function active_unactive_mn(){
    // $('.box-sidebar ul li a').on('click', function(){
    //         $('.box-sidebar ul li a').removeClass('item-active');
    //         $(this).addClass('item-active');
    // })
    // }
    
    //sub menu in navbar
    nav_submenu();
    function nav_submenu(){
        var i = 0;
        $('.box-dropmn').on('click','#ic-dropmn',function(){
            $('.sub-menu').css({'display':'block'});
            if(i==0){
                $('#ic-dropmn').css({'transform':'rotate(180deg)'});
                $('.box-username').find('.sub-menu').slideDown(800);
                i=1;
            }else if(i==1){
                $('#ic-dropmn').css({'transform':'rotate(0deg)'});
                $('.box-username').find('.sub-menu').slideUp(800);
                i=0;
            }
        })
    }

    //side sub menu
    side_submenu1();
    function side_submenu1(){
        var i =0;
        $('.box-sidebar ul li a ').on('click','#ic-img2',function(){
            $('.side-sub-menu1').css({'display':'block'});
            if(i==0){
                $('#ic-img2').css({'transform':'rotate(180deg)'});
                $('.box-sidebar ul li').find('.side-sub-menu1').slideDown(800);
                i=1;
            }else if(i==1){
                $('#ic-img2').css({'transform':'rotate(0deg)'});
                $('.box-sidebar ul li').find('.side-sub-menu1').slideUp(800);
                i=0;
            }
        })
    }

    side_submenu2();
    function side_submenu2(){
        var i =0;
        $('.box-sidebar ul li a ').on('click','#ic-img3',function(){
            $('.side-sub-menu2').css({'display':'block'});
            if(i==0){
                $('#ic-img3').css({'transform':'rotate(180deg)'});
                $('.box-sidebar ul li').find('.side-sub-menu2').slideDown(800);
                i=1;
            }else if(i==1){
                $('#ic-img3').css({'transform':'rotate(0deg)'});
                $('.box-sidebar ul li').find('.side-sub-menu2').slideUp(800);
                i=0;
            }
        })
    }
});