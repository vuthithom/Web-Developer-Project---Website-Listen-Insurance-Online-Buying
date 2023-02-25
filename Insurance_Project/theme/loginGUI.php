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
<div id="popup" data="id-01" cao="345px" ngang="330px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('id-01')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
        <form action="PHP/login.php" method="post">
            <!-- Account sending -->
            <div style="margin:15px;margin-top:5px">
                <img src="img/user.png" alt="">
                <?=$VN_user?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="text" minlength="5" pattern="[A-Za-z0-9]+" class="form-control" name="tk" placeholder="User" autocomplete="OFF">
            </div>
            <!--  Password sendiun -->
            <div style="margin:15px">
                <img src="img/m2.png" alt="">
                <?=$VN_pass?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="password" id="myInput" pattern="[A-Za-z0-9]+" minlength="6" class="form-control" name="mk" placeholder="******" autocomplete="OFF">
            </div>
            <!-- Register button -->
            <div class="bottom-left" style="width: 100%;bottom:-53px;left:-0px;float:right">
                <div style="margin-left:0px;margin:15px;margin-top:0px;width:50%;float: right;margin-right:15px" onclick="lgGUI('register');lgOFF('id-01');">
                    <a style="color:#149DCC"><?=$VN_accounts?></a>
                </div>
            </div>
            <!-- Show Password -->
            <div style="margin:15px;font-size:14px;position:absolute;z-index:9999;">
                <input type="checkbox" onclick="myFunction()"> <?=$VN_passShow?>
            </div>
            <!-- Login button -->
            <div class="centered2" style="bottom:-110px;margin-left:0px">
                <div>
                    <input type="submit" class="btn btn-danger" value="<?=$VN_login?>" style="padding:5px;width:150px">
                </div>
            </div>
            <!-- End -->
        </form>
    </div>
</div>