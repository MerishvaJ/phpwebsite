<html>

<head>

  <title></title>

  <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
<?php
    include_once('header2.php');
    ?>
    <div class="content">
    
            <?php
            include_once('config.php');
            $x = 1;
            $cat = "Mobile";

            $sql = mysqli_query($mysqli, "SELECT * FROM product");
            while ($rs = mysqli_fetch_array($sql)) {
             $x++;
                
            ?>

                <div class="box2">
                    <img src="<?php echo $rs['img']; ?>" width=200px height=220px>
                    &#x20B9;<del style="color:red"><?php echo $rs['aprice']; ?></del><br>
                    <p style="color:green">&#x20B9;<?php echo $rs['oprice']; ?></p><br>
                    <p><a href="user_login.php?sno=<?php echo $rs['sno']; ?>"> BYE NOW</a></p>
                </div>
               

          


            <?php
            }
            if($x<4)
            {
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            }
            for($i=1;$i<=$x/4;$i++) {
            ?>
           
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
            
            <?php
            }
            
            ?>
    </div>
    <?php
            
    include_once('footer.php');
    ?>

</body>

</html>