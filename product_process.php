<?php

 include_once('config.php');
$sql="INSERT INTO product (pname,qty,cat,brand,desc1,aprice,oprice,img) VALUES ('sgdfg','6','Furniture','dfsdf','fsdgfdg','4','54','images')";
echo $sql;    
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Add Product Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
?>