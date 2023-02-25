
$(document).on('click', '#like', function (e) {
    var thongtin = $("#like").attr("thongtin");
    $.ajax({
        url:"chat/like/data.php?v="+thongtin,
        method:"GET",
        success:function(data){
            $('#likeif').html(data);
        }
    })
});