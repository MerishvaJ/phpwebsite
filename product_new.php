<html>

<head>

    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once('header3.php');
    ?>
    <div class="content">
        <div id="head1">ADD PRODUCT</div>
        <div class="content1">
       
            
            <form action="product_new.php" method="post" enctype="multipart/form-data">
                <table>
                <tr>
                
                    
                   
                    <td>Product Name</td>
                    <td><input type="text" name="pname" placeholder="" required></td>
                    <td></td>
                     
                    </tr>
                    <tr> 
                    <td>Quantity</td>
                    <td><input type="text" name="qty" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Catagory</td>
                    <td>
                        <select name="cat" required>
                        <option>Mobile</option>
                        <option>Beauty</option>
                        <option>Fashion</option>
                        <option>Furniture</option>
                            
                        </select>
                    </td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Brand</td>
                    <td><input type="text" name="brand" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Description</td>
                    <td><textarea rows="5" cols="25" name="desc1" required></textarea></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Actual Price</td>
                    <td><input type="text" name="aprice" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Offer Price</td>
                    <td><input type="text" name="oprice" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Image</td>
                    <td><input type="file" name="img"  accept="image/png, image/jpeg" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" name="add" value="Add Product" required></td>
                    <td></td>
                        
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>
<?php
session_start();
include_once('footer.php');
 include_once('config.php');
if(isset($_POST["add"]))
{
$pname=$_POST["pname"];
$qty=$_POST["qty"];
$cat=$_POST["cat"];
$brand=$_POST["brand"];
$desc1=$_POST["desc1"];
$aprice=$_POST["aprice"];
$oprice=$_POST["oprice"];
//$img=basename($_POST["img"]);

$email = $_SESSION["email"];
echo $email;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {  
    //echo "File uploaded successfully!";  
} else{  
    //echo "Sorry, file not uploaded, please try again!";  
}  

  $img=$target_file;
  //echo $oprice;

$sql = "INSERT INTO product  (pname,qty,cat,brand,desc1,aprice,oprice,img,email) VALUES ('$pname','$qty','$cat','$brand','$desc1','$aprice','$oprice','$img','$email')";
//$sql="INSERT INTO product (pname,qty,cat,brand,desc1,aprice,oprice,img) VALUES ('sgdfg','6','Furniture','dfsdf','fsdgfdg','4','54','images')";
echo $sql;    
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Add Product Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
}


?>