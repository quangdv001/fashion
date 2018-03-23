$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
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
        console.log(url);
        console.log(data);
        $.ajax({
            type:'GET',
            url: url,
            data:data,
            success:function(res){
                console.log(res);
            }
        });
    });
});