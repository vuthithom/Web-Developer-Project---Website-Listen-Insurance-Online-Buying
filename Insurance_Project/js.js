function mON (){
    document.getElementById('test2').style.top = "0%";
}
function mOFF (){
    document.getElementById('test2').style.top = "-160%";
}
function notiOFF() {
    document.getElementById('notiday').style.opacity = 0;
}
setInterval(() => {
    var a = document.getElementById('notiday');
    b = 0;
    if (b == 0){
        a.style.opacity = 1;
        b=1;
        setTimeout(() => {
            b=0;
            a.style.opacity = 0;
        }, 4000);
    } 
}, 13000);
var b = 0;
var go = 0;
function PhoneShow(){
    if (go == 0){
        if (b == 1){
            var a = document.getElementById('phoneshow');
            a.style.right = -500+'px';
            b=0;
        } else {
            var a = document.getElementById('phoneshow');
            a.style.right = 35+'px';
            b=1;
        }
    }
}
/* WINDOW W, */
function FitScreenH(a,b,d,c) {
    if (window.screen.width >= a){
        document.getElementById(b).style.height = c + 'px';
    } else {
        document.getElementById(b).style.height = d + 'px';
    }
}
function FitScreenW(a,b,d,c) {
    if (window.screen.width >= a){
        document.getElementById(b).style.width = c + 'px';
    } else {
        document.getElementById(b).style.width = d + 'px';
    }
}
    $( document ).ready(function() {
        function autoResizeDiv()
        {
            var temp = window.innerHeight;
            FitScreenH(600,'slide-mb',180,temp/1.30);
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
        var view = 0;
        function changeCss () {
            var navElement = document.getElementById("ft-effect");
            if (this.scrollY > 1510 && window.screen.width >= 1){
                navElement.style.opacity = 1;
            } 
        }
      window.addEventListener("scroll", changeCss , false);
    }); 