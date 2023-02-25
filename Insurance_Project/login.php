<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/misc/center.css">
    <link rel="stylesheet" href="lib/carousel/main.css">
    <link rel="stylesheet" href="lib/misc/table.css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css.css">
</head>
<script>
    function go(){
        document.getElementById('combo').style.top = "-80%";
        setTimeout(() => {
            document.getElementById('body').style.backgroundColor = 'white';
            setTimeout(() => {
            var a  = document.getElementById('loginday');
            a.style.top = "50%";
            setTimeout(() => {
                document.getElementById('hinh').style.opacity = '1';
            }, 3000);
        }, 300);
        }, 300);
    }
</script>
<style>
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-position-y: -15%;
    }
    #body {
        background-color: #282c34;
        transition: background 4s;
    }
    #combo {
        transition: ease-in 1s;
    }
    #combo1 {
        transition: all 2s;
    }
    #loginday {
        transition: all 1s;
    }
    .form-control{
        padding:2.1vmin;
    }
    #hinh {
        transition: ease-in-out 2s;
    }
</style>
<body id="body">
    <div class="centered" style="width:100%;opacity: 0;" id="hinh">
        <img src="img/slide001.png" alt="" width="100%">
    </div>
    <div class="centered" id="combo" style="top:43%">
            <div style="text-align: center;">
                <img src="img/logo.png" class="" alt="" style="width: 23vmin;">
            </div>
        <p style="font-size: 5vmin;color:white;margin-bottom:2vmin">
            SAFE CARS LIMITED
        </p>
        <center>
            <a href="main.php" class="btn btn-danger" style="width:20vmin;height:6vmin;font-size: 2.5vmin;" onclick="go()">Join Now</a>
        </center>
    </div>

    <div class="centered" id="loginday" style="top:-100%">
        <div style="width:50vmin;height:45vmin;background-color: white;border-radius: 3%;" class="cont">
            <div class="centered1" style="top:-6%">
                <img src="img/logo.png" alt="" style="width:25vmin">
            </div>
            <div style="padding:4vmin;font-size: 2vmin;padding-top:5vmin">
                <!-- Form -->
                <form action="PHP/login.php" method="post">
                    Username
                    <input type="text" class="form-control" name="tk">
                    Password
                    <input type="password" class="form-control" name="mk" id="myInput">
                    <div class="centered2" style="">
                        <div>
                            <input type="submit" class="btn btn-danger" value="Login" style="padding:5px;width:150px">
                        </div>
                    </div>
                </form>
            </div>

            <div style="margin:4vmin;margin-top:0px;font-size:2vmin;position:absolute;z-index:10000;">
                <input type="checkbox" onclick="myFunction()"> Show password
            </div>
            <div style="margin:4vmin;margin-top:0px;font-size:2vmin;width:85%;position:absolute;z-index:9999;">
                <div style="float: right;">
                    <a href="">Create new account?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>