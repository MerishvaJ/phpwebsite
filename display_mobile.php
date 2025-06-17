<html>

<head>

    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once('header1.php');
    ?>
    <div class="content">
        <div id="head1">MOBILE</div>
        <div class="content1">
            <?php
            include_once('config.php');
            $x = 1;
            $cat = "Mobile";

            $sql = mysqli_query($mysqli, "SELECT * FROM product where cat='$cat'");
            while ($rs = mysqli_fetch_array($sql)) {
            ?>
                <div class="box2">
                    <img src="img/1.png" width=200px height=220px>
                    &#x20B9;<del style="color:red"><?php echo $rs['aprice']; ?></del><br>
                    <p style="color:green">&#x20B9;<?php echo $rs['oprice']; ?></p><br>
                    <p><a href="payment_process.php?sno=<?php echo $rs['sno']; ?>"> BUY NOW</a></p>
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


            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>

</body>

</html>
<?php

?>