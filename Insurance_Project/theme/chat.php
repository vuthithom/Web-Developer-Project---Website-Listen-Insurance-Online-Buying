<!-- Chat -->
<?php ?>
    <script>
        var count = 0;
        function MessShow(){
            if (count == 0){
                    document.getElementById("demo").style.display="none";
                    count = 1;
            } else {
                document.getElementById("demo").style.display="block";
                count = 0;
            }
        }
        function demo(a){
        document.getElementById("field1").value += a;
        }
        var data =0;
        function icon(a){
            if (data == 0 ){
                data = 1;
                document.getElementById(a).style.display="block";
            } else {
                data = 0;
                document.getElementById(a).style.display="none";
            }
        }
        var data2 =0;
        function name(a){
            if (data2 == 0 ){
                data2 = 1;
                document.getElementById(a).style.top="38px";
            } else {
                data2 = 0;
                document.getElementById(a).style.top="4px";
            }
        }
        var data3 =0;
        function Filec(a){
            if (data3 == 0 ){
                data3 = 1;
                document.getElementById(a).style.display="block";
            } else {
                data3 = 0;
                document.getElementById(a).style.display="none";
            }
        }
    </script>
    <div class="fixed-bottom">
        <div id="demo" style="display:none;right:120px;height:fit-content;width:350px;margin:auto;background-color: white;border-radius:1.2vmin;padding-bottom:1px;transition: all 1s"
     class="bottom-right">
    <!-- Icon -->
    <div style="display:none" id="chatok">
    <div style="bottom:38px;right:77px;width:200px;
    height:117px;background-color:black;opacity:0.8;display:flex;z-index:9999" class="bottom-right" id="icon">
        <div style="cursor:pointer;height:fit-content" onclick="demo(':)')">
        🙂
        </div>
        <div style="cursor:pointer;height:fit-content" onclick="demo(':D')">
        😁
        </div>
        <div style="cursor:pointer;height:fit-content" onclick="demo('XD')">
        😆
        </div>
        <div style="cursor:pointer;height:fit-content" onclick="demo('<3')">
        ❤️
        </div>
        <div style="cursor:pointer;height:fit-content" onclick="demo('</3')">
        💔
        </div>
    </div>
    </div>
    <!-- Menu  -->
    <div style="display:none;" id="colorok">
    <div style="bottom:38px;right:77px;width:200px;
    height:50px;background-color:black;opacity:0.8;display:flex;padding:10px;z-index:9999" class="bottom-right" id="color">
        <a href="chat/main.php?id=3578E5" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:#3578E5;border-radius:50%;margin-right:5px"></div>
        </a>
        <a href="chat/main.php?id=pink" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:pink;border-radius:50%;margin-right:5px"></div>
        </a>
        <a href="chat/main.php?id=red" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:red;border-radius:50%;margin-right:5px"></div>
        </a>
        <a href="chat/main.php?id=green" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:green;border-radius:50%;margin-right:5px"></div>
        </a>
        <a href="chat/main.php?id=wheat" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:wheat;border-radius:50%;margin-right:5px"></div>
        </a>
        <a href="chat/main.php?id=gray" target="_black">
            <div style="cursor:pointer;height:25px;width:25px;background-color:gray;border-radius:50%;margin-right:5px"></div>
        </a>
    </div>
    </div>
        <!--  -->
    <div style="height:30px;width:100%;padding:3px;margin:auto;z-index:51" class="cont">
        <div style="background-color:white;z-index:51;display:flex;width:101%;left:0px;height:35px;top:4px" class="bottom-left">
            <div style="z-index:51" id="tennhom" class="top-left">
            <?php 
                $select = $conn->query("SELECT * from groupchat");
                while ($pro = mysqli_fetch_array($select)){
                    echo $pro['name'];
                }
            ?>
            </div>
            <div style="cursor: pointer;right:40px;z-index:51;margin-left:100px" class="top-right" onclick="name('name');">
                Đổi tên
            </div>
            <div style="cursor: pointer;z-index:51" class="top-right" onclick="MessShow();">
                X
            </div>
        </div>
        <div style="position:absolute;top:4px;transition:all 1s;z-index:50;background-color:gray;width:100%;height:130%"id="name">
            <form id="formnameS">
                <div style="display:flex">
                <input type="text" class="form-control" name="field2" id="field2" style="width:80%" autocomplete="OFF">
                <button class="btn form-control" value="Đổi Tên" id="formnameS" style="padding:7px">Đổi Tên</button>
                </div>
            </form>
        </div>
    </div>
    <div style="margin:auto;width:100%;height:290px;color:white;overflow-y:scroll;overflow-x: hidden;padding-top:10px;padding-right:10px;word-break: break-word" id="chatday">
    </div>
    <div style="margin:auto;width:100%;padding:5px;margin-bottom:10px" class="cont">
        <form id="form21">
            <div style="width:80%" class="cont">
                <div class="bottom-right" style="cursor:pointer;bottom:3px;right:-25px" onclick="Filec('chonfile')">
                <i class="fab fa-500px"></i>
                </div>
                <!--  -->
                <div class="bottom-right"style="bottom:4px;right:8px;cursor:pointer" onclick="icon('chatok')">
                    <i class="fas fa-smile-wink"></i>
                </div>
                <div class="bottom-right"style="bottom:4px;right:8px;cursor:pointer;right:30px" onclick="icon('colorok')">
                    <i class="fas fa-adjust"></i>
                </div>
                <!--  -->
                <input type="text" name="field1" id="field1" autocomplete="OFF" class="" style="width:100%;height:30px;border-radius: 3vmin;outline:0px;padding:5px">
            </div>
               
            <!-- Color -->
            <div class="bottom-right" style="cursor: pointer;bottom:5px" id="buttonID">
                <i class="fas fa-paper-plane"></i>
            </div>
        </form>
        <div id="chonfile" style="display:none">
            <form action="PHP/uploads.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileupload" id="fileupload" class="" onchange="form.submit()">
            </form>
        </div>
    </div>
    </div>
    </div>
    <?php ?>
    <script src="chat/js.js"></script>