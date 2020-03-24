        
        // вывод поля поиска

$('.bi').on('click',function(){
    $('.aut').hide();
    $('#data_products,#close' ).show(2000); 
   
});

$('#close').on('click',function(){
    
    $('#data_products,#close' ).hide();
    $('.aut').show();

});




        // изменение текста, замедленное появление элемента
 // $('.nav a').on('mouseover',function(){
    //     var text = $(this).text();
    //     console.log(text);
    //     var text = ['Домой','Категория','О компании','Контакты','Обратная связь'];
    //     $('.product-bit-title h2').text(text);
    // });
    // $('.nav').hide(700,function(){
    //     $(this).show(700);
    // });

    // $('.nav .katehori').on('mouseout',function(){
//     $('.nav .katehori').hide(70000);
// });

        // добавление(удаление) классов,стилей
// $('.katehori ').addClass(' open');
                            // .removeClass("myClass noClass");
    // $('.subkat').css('position', 'absolut');
    // $('.katehori' ) .css('position', 'relative');
    // $('.subkat' ) .css('position', 'absolut');

        // перенаправление
// $('.katehori ul').on('click',function(){

//          $(location).attr('href','http://localhost:8888/catalog/lenovo_laptop')    
// });
// $('.katehori').on('click',function(){

//     $(location).attr('href','http://localhost:8888/catalog/lenovo_laptops') 

// });

        // вывод подменю(попытка)
// $('.katehori li').on('mouseover',function(){

//     $('.subkatehori').show();

// });
// $('.katehori ul li').on('mouseover',function(){
    
//     $('.katehori ul li').css('display', 'block');
//     $('.katehori ul li').show();

// });
// $('.katehori,.katehori ul li').on('mouseout',function(){
   
//     $('.subkatehori').hide();

// });

 
