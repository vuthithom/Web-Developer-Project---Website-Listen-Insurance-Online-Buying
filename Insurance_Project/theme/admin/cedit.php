
<div id="popup" data="c-edit" cao="405px" ngang="370px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('c-edit')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
    <form action="">
                    <center>
                    <h4>EDIT COMPANIES</h4>
                    </center>
                    Name:
                    <input type="text" class="form-control" name="company-name" autocomplete="OFF" required><br>
                    Image Link:
                    <input type="text" class="form-control" name="company-link" autocomplete="OFF" required><br>
                    Belong:
                    <input type="text" class="form-control" name="company-belong" autocomplete="OFF" required><br>
                    <select name="company-id">
                        <?php 
                            $select = $conn->query('select * from company');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Edit">
    </form>
    </div>
</div>