
$(document).ready(function(){

cash();
setTimeout(() => {
        document.getElementById('chatday').scrollTop = 33331;
    }, 300);
setInterval(function(){
    var okne =document.getElementById('chatday').scrollTop;
    cash();
        setTimeout(() => {
            document.getElementById('chatday').scrollTop = okne;
        }, 30);
}, 3000);
/*  */
});  
/*  */
function cash()
{
    $.ajax({
        url:"chat/realchat.php",
        method:"GET",
        success:function(data){
            $('#chatday').html(data);
        }
    })
}
/*  */
function group()
{
    $.ajax({
        url:"chat/groupchat.php",
        method:"GET",
        success:function(data){
            $('#tennhom').html(data);
        }
    })
}


    $('#form21').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'chat/ajax.php',
            data: $(this).serialize(),
            dataType: 'json',
            
            success: function (data) {
                console.log(data);
                $('#det').html(data.msg);
            }
        });
        setTimeout(() => {
            cash();
            document.getElementById('field1').value= "";
        }, 0);
    });

    $('#buttonID').click(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'chat/ajax.php',
            data: $('#form21').serialize(),
            dataType: 'json',
            
            success: function (data) {
                console.log(data);
                $('#det').html(data.msg);
            }
        });
        setTimeout(() => {
            cash();
            document.getElementById('field1').value= "";
        }, 0);
    });

    $('#formnameS').click(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'chat/name.php',
            data: $('#formnameS').serialize(),
            dataType: 'json',
            
            success: function (data) {
                console.log(data);
                $('#tennhom').html(data.msg);
            }
        });
        setTimeout(() => {
            cash();
            group();
            document.getElementById('field2').value= "";
        }, 0);
    });