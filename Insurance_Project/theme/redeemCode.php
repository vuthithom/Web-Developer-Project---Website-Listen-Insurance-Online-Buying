<div id="popup" data="redeemcode" cao="325px" ngang="430px" top="40%">
    <div class="cont" style="width:100%;height:100%">
        <div class="top-right" style="color:black;cursor: pointer;" onclick="lgOFF('redeemcode')">
            X
        </div>
        <div class="centered" style="top:-3px">
            <img src="img/logo.png" width="128px" alt="">
        </div>
    </div>
    <div class="top-left" style="width: 90%;margin-top:35px">
        <form action="PHP/login.php" method="post">
            <div style="margin:5px;font-size:14px">
                <h4>Code History:</h4>
            </div>
            <div style="margin:5px">
            <table class="table table-sm table-hover">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Time</th>
                </tr>
                <?php 
                    $select = $conn->query('select * from code where belong = '.$_SESSION['id'].' order by id desc LIMIT 5');
                    while ($pro = mysqli_fetch_array($select)){
                        echo '<tr>';
                        echo '<td>'.$pro['id'].'</td>';
                        echo '<td><a href="check.php?name='.$pro['name'].'">'.$pro['name'].'</a></td>';
                        echo '<td>'.date('H:i:s d/m/Y', $pro['time']).'</td>';
                ?>
                </tr>
            <?php  } ?>
            </table>
            </div>
            <!-- End -->
        </form>
    </div>
</div>