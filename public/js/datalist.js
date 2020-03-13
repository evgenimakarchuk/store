$(function(){
    $('#data_products').on('input',function(){
        var data = $(this).val();
        // console.log(data);
    $.ajax({
        url:'/ajax/datalist',
        data:{'list':data },
        type:'post',
        dataType:'json',
        success:function(data){
            console.log(data.length);
            $('#mydata').empty();
            for(var i=0; i< data.length; i++){
                console.log(data[i]);
                $('#mydata').append("<option value='"+data[i].name+"'/>");
            }
        },
        error:function(msg){
            console.log(msg);
        }
    });
    });
});