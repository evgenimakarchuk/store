$(function(){
    var fx = {
        'initModal': function(){
           
            if($('.modal_vindow').length==0){
                $('<div>').attr('id','overlay').fadeIn(0)
                                               .appendTo('body');
                return $('<div>').addClass('modal_vindow').appendTo('body');
            }else{
                return $('.modal_vindow');
            }
        }
    }
    $('.modal_ajax').click(function(){

        var data = $(this).attr('data-id');
        // console.log(data);
        var modal = fx.initModal();
       
       $.ajax({
           type : 'post',
           url : '/ajax/modal',
           data : 'id='+data,
           success : function(data){
               modal.append(data);
               console.log('ok');
           },
           error : function(msg){
               console.log(msg);
           }
       })
        $('<a>').attr('href','#')
                .addClass('modal-close')
                .html('&times;')
                .click(function(e){
                    e.preventDefault();
                    modal.remove();
                    // $('#overlay').remove();
                    $('#overlay').fadeOut(1000,function(){
                        $(this).remove();
                    });    

                }).appendTo(modal);
    });
});

