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
<div id="popup" data="p-add" cao="455px" ngang="370px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('p-add')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
    <form action="">
                    <center>
                        <h4>ADDED Product</h4>
                    </center>
                    Name:
                    <input type="" class="form-control" name="aproduct-name" autocomplete="OFF" required>
                    Image Link:
                    <input type="text" class="form-control" name="aproduct-link" autocomplete="OFF">
                    Price:
                    <input type="number" class="form-control" name="aproduct-price" autocomplete="OFF" required>
                    Quantity:
                    <input type="number" class="form-control" name="aproduct-quantity" autocomplete="OFF" required>
                    Desc:
                    <input type="text" class="form-control" name="aproduct-desc" autocomplete="OFF" required>
                    Vehicle:
                    <select name="aproduct-vehicle" id="">
                        <?php 
                            $select = $conn->query('select * from vehicle');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <br>
                    Belong:
                    <select name="aproduct-belong" id="">
                        <?php 
                            $select = $conn->query('select * from company');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Add">
                </form>
    </div>
</div>