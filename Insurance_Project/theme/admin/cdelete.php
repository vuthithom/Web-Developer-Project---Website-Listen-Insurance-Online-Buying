
<div id="popup" data="c-delete" cao="135px" ngang="330px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('c-delete')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
    <form action="">
                    <center>
                    <h4>DELETE COMPANIES</h4>
                    
                    <form action="">
                    <select name="delcompany-id">
                        <?php 
                            $select = $conn->query('select * from company');
                            while ($pro = mysqli_fetch_array($select)){
                                echo '<option value="'.$pro['id'].'">'.$pro['name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Delete"></center>
                </form>
    </form>
    </div>
</div>