$(document).ready(function(){
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $('.status-change').click(function(){
        var url = '/admin/banner/updateStatusBanner';
        var id = $(this).val();
        var status;
        if($(this).is(":checked")){
            status = 1;
        } else {
            status = 0;
        }
        var data = {id:id ,status: status};
        $.get(url, data, function(res){
            console.log(res);
        });
    });

    $('#editor-one').on('keyup keypress blur dragenter dragover drop focus keydown mouseout mouseup',function(){
        var text = $(this).html();
        $('#descr').html(text);
    });


});