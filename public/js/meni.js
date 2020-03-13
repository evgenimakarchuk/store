        // ЧЕРНОВИК
$('.katehori').on('mouseover',function(){

    $('.katehori ul ').show();

});
$('.katehori ul li ').on('mouseover',function(){

    $('.katehori ul li a').css({'background': '#f4f4f4','left': '100%'});
    $('.katehori ul').show();
});
$('.katehori,.katehori ul li').on('mouseout',function(){

    $('.katehori ul li a').css({'z-index': '2000','background': '#fff'});
    $('.katehori ul').hide();

});



$('.bi').on('click',function(){
    $('.aut').hide();
    $('#data_products,#close' ).show(1000);

});

$('#close').on('click',function(){
    
    $('#data_products,#close' ).hide();
    $('.aut').show();

});