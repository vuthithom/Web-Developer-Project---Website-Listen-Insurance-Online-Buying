
    function lgGUI (a){
        document.getElementById(a).style.display = 'block';
    }
    function lgOFF(a){
        document.getElementById(a).style.display = 'none';
    }
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }