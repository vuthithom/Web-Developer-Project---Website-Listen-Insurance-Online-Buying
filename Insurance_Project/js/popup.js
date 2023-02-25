var popup = document.querySelectorAll("#popup");
var count = document.querySelectorAll("#popup").length;
for (var i = 0; i < count; i ++){
    var data = popup[i].getAttribute('data');
    var ngang = popup[i].getAttribute('ngang');
    var cao = popup[i].getAttribute('cao');
    var top = popup[i].getAttribute('top');
    popup[i].innerHTML = '<!-- Login GUI --><div id="' + data +'" class="fixed-top" style="z-index: 9999;height:100%;width:100%;display:none">        <div class="trans" style="position:absolute;background-color: black;opacity: 0.6;width:100%;height:100%">         </div>        <div class="centered cont" style="background-color:white;width:'+ ngang + ';height:' + cao + ';color:black;top:' + top +';border-radius: 3vmin;">            ' + popup[i].innerHTML + '        </div></div>';
}
