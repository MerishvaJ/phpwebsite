<html>

<head>

    <title></title>
    <style>
        #address {
            width: 300px;
            height: 100px;
            
        }

        .content1 a {
            background-color: #FFA200;
            border: none;
            color: white;

            padding: 10px 20px;
            text-decoration: none;
            margin: 4px 2px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        .content1 a:hover {
            background-color: #00fc37;
            border: none;
            color: white;

            padding: 10px 20px;
            text-decoration: none;
            margin: 4px 2px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once('header1.php');
    ?>
    <div class="content">
        <div id="head1">MOBILE</div>
        <div class="content1">
            <form action="payment_process.php" method="post">
                <?php
                 session_start();
                 include_once('config.php');
                if (isset($_GET['sno'])) {
                    $sno = $_GET['sno'];
                    
                    $x = 1;
                    $addr = "";
                   
                    $email = $_SESSION["email"];
                    $sql = mysqli_query($mysqli, "SELECT * FROM product where sno='$sno'");
                    $sql1 = mysqli_query($mysqli, "SELECT * FROM user where email='$email'");

                    if ($rs = mysqli_fetch_array($sql)) {
                        $_SESSION["sno"] = $rs['sno'];
                ?>
                        <div class="box2">
                        <img src="<?php echo $rs['img']; ?>" width=200px height=220px>
                            &#x20B9;<del style="color:red"><?php echo $rs['aprice']; ?></del><br>
                            <p style="color:green">&#x20B9;<?php echo $rs['oprice']; ?></p><br>
                            <p><a href="payment_process.php?sno=<?php echo $rs['oprice']; ?>"> BYE NOW</a></p>
                        </div>
                        <div class="box3">


                            <b>Product Name</b>
                            <td><?php echo $rs['pname']; ?></td><br>



                            <b>Quantity</b>
                            <td><?php echo $rs['qty']; ?></td><br>



                            <b>Brand</b>
                            <td><?php echo $rs['brand']; ?></td><br>



                            <b>Price</b>
                            <td>&#x20B9; <?php echo $rs['oprice']; ?></td><br>



                            <b>Specification</b><br>
                            <td> <?php echo $rs['desc1']; ?></td>



                        </div>

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <b>Address</b><br>
                        <?php
                        if ($rs1 = mysqli_fetch_array($sql1)) {
                            echo $rs1['name'] . "<br>";
                            echo $rs1['fname'] . "<br>";
                            echo $rs1['place'] . "<br>";
                            echo $rs1['street'] . "<br>";
                            echo $rs1['dist'] . "<br>";
                            echo $rs1['pcode'] . "<br>";
                            echo $rs1['cno'] . "<br>";
                            $addr = $rs1['name'] . "," . $rs1['fname'] . "," . $rs1['place'] . "," . $rs1['street'] . "," . $rs1['dist'] . "," . $rs1['pcode'] . "," . $rs1['cno'];
                            $_SESSION["addr"] = $addr;
                        }

                        ?>
                        <input type="radio" value="Netbanking" id="pay1" name="pay" onclick="checkButton()">Netbanking<br>
                        <input type="radio" value="COD" name="pay" id="pay2" onclick="checkButton()">COD<br>
                        <div id="address">
                            <table>
                                <tr>
                                    <td>User ID</td>
                                    <td><input type="text" name="uid" requied> </td>

                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="pass" requied> </td>

                                </tr>

                            </table>
                        </div>
                        <input type="submit" value="Pay" name="process">
<div style="color:green">
                <?php
                    echo $_SESSION["msg"];
                    }
                }
                ?>
                </div>
            </form>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>

</body>

</html>
<script>
    document.getElementById('address').style.visibility = 'hidden';
    function checkButton() {
        if (document.getElementById('pay2').checked == true) {
            //alert("selected")
            document.getElementById('address').style.visibility = 'hidden';
        }
        if (document.getElementById('pay1').checked == true) {
            document.getElementById('address').style.visibility = 'visible';
            //alert("selected")
        }
    }
</script>

<?php
include_once('footer.php');
include_once('config.php');
if (isset($_POST["process"])) {

    $sno = $_SESSION["sno"];
    //$img=basename($_POST["img"]);
    //echo $img;
    $email = $_SESSION["email"];
    $addr = $_SESSION["addr"];
    //echo $oprice;
    $sql = mysqli_query($mysqli, "SELECT * FROM product where sno='$sno'");
    if ($rs = mysqli_fetch_array($sql)) {
        $sql = "INSERT INTO purchase VALUES ('$rs[sno]','$rs[pname]','$rs[oprice]','$addr','$email')";
        //$sql="INSERT INTO product (pname,qty,cat,brand,desc1,aprice,oprice,img) VALUES ('sgdfg','6','Furniture','dfsdf','fsdgfdg','4','54','images')";
        //echo $sql;    
        if ($mysqli->query($sql) === TRUE) {
            $_SESSION["msg"]="Product Puchase Successfully";
            echo '<script>alert("Sign Up Successfully")</script>';
            echo "";
            
        } else
            echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    header('Location: payment_process.php?sno='.$sno);
}

?>