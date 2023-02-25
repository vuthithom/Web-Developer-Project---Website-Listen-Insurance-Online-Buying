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
<div id="popup" data="p-edit" cao="485px" ngang="370px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('p-edit')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
    <form action="">
                    <center>
                    <h4>EDIT Product</h4>
                    </center>
                    ID:
                    <select name="eproduct-id" id="">
                        <?php 
                            $select = $conn->query('select * from packet');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.'ID: '.$pro['id'].' '.$pro['name'].'</option>';
                            }
                        ?>
                    </select><br>
                    Name:
                    <input type="" class="form-control" name="eproduct-name" autocomplete="OFF" required>
                    Image Link:
                    <input type="text" class="form-control" name="eproduct-link" autocomplete="OFF">
                    Price:
                    <input type="number" class="form-control" name="eproduct-price" autocomplete="OFF" required>
                    Quantity:
                    <input type="number" class="form-control" name="eproduct-quantity" autocomplete="OFF" required>
                    Desc:
                    <input type="text" class="form-control" name="eproduct-desc" autocomplete="OFF" required>
                    Vehicle:
                    <select name="eproduct-vehicle" id="">
                        <?php 
                            $select = $conn->query('select * from vehicle');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <br>
                    Belong:
                    <select name="eproduct-belong" id="">
                        <?php 
                            $select = $conn->query('select * from company');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.'ID: '.$pro['id'].' '.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Add">
                </form>
    </div>
</div>