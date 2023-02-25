<script>
    function myFunction() {
        var x = document.querySelectorAll("#myInput");
        for (var i = 0;i<x.length;i++){
            x[i].type;
            if (x[i].type == "password") {
                x[i].type = "text";
                } else {
                x[i].type = "password";
            }
        }
}
</script>
<div id="popup" data="c-add" cao="405px" ngang="370px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('c-add')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
        <form action="">
                    <center>
                    <h4>ADDED COMPANIES</h4>
                    </center>
                    Name:
                    <input type="text" class="form-control" name="acompany-name" autocomplete="OFF" required><br>
                    Image Link:
                    <input type="text" class="form-control" name="acompany-link" autocomplete="OFF" required><br>
                    Belong:
                    <input type="text" class="form-control" name="acompany-belong" autocomplete="OFF" required><br>
                    <input type="submit" value="Added" class="form-control">
        </form>
    </div>
</div>