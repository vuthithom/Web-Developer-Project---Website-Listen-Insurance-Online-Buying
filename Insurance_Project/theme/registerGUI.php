
<div id="popup" data="register" cao="520px" ngang="330px" top="15%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('register')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
        <form action="PHP/register.php" method="post">
            <!-- Account sending -->
            <div style="margin:15px;margin-top:5px">
                <img src="img/user.png" alt="">
                <?=$VN_user?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="text" minlength="6" maxlength="20" pattern="[A-Za-z0-9]+" class="form-control" name="reg-tk" placeholder="<?=$VN_user?>" autocomplete="OFF" required>
            </div>
            <!--  Password sendiun -->
            <div style="margin:15px">
                <img src="img/m2.png" alt="">
                <?=$VN_pass?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="password" minlength="6" 
                class="form-control" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="reg-pass" placeholder="<?=$VN_pass?>" id="myInput" autocomplete="OFF" required>
            </div>
            <div style="margin:15px">
                <img src="img/m2.png" alt="">
                <?=$VN_retype?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="password" minlength="6" 
                class="form-control" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="reg-pass2" placeholder="<?=$VN_retype?> <?=$VN_pass?>" id="myInput" autocomplete="OFF" required>
            </div>
            <!--  Full name send -->
            <div style="margin:15px">
                <img src="img/m2.png" alt="">
                <?=$VN_fullname?>
            </div>
            <div style="margin:15px;margin-top:0px;width:90%">
                <input type="text" minlength="6" maxlength="18" class="form-control" name="reg-name" placeholder="Your name" autocomplete="OFF" pattern="[^'\x22]+" title="Invalid input" required>
            </div>
            <div style="margin:15px;">
                <input type="checkbox" onclick="myFunction()"> <?=$VN_passShow?>
            </div>

            <!-- Login button -->
            <div class="centered2" style="bottom:-62px">
                <div>
                    <input type="submit" class="btn btn-danger" value="<?=$VN_register?>" style="padding:5px;width:150px">
                </div>
            </div>
            <!-- End -->
        </form>
    </div>
</div>