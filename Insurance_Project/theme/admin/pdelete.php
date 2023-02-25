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
<div id="popup" data="p-delete" cao="150px" ngang="370px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('p-delete')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
        <form action="">
                    <center>
                    <h4>DELETE Product</h4>
                    ID:
                    <select name="dproduct-id" id="">
                        <?php 
                            $select = $conn->query('select * from packet');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.'ID: '.$pro['id'].' '.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Delete"></center>
        </form>
    </div>
</div>