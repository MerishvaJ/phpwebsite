<html>

<head>

    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
<div class="header">Ecommerce Website
    </div>

<div class="menu">
        <div class="navbar">


            <div class="dropdown">
                <button class="dropbtn">
                    <a href="index.php">Home </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <a href="user_login.php">Login </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>


        </div>


    </div>
    <div class="content">
        <div id="head1">USER SIGN UP</div>
        <div class="content1">
       
            
            <form action="user_register.php" method="post">
                <table>
                <tr>
                
                    
                   
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="" required></td>
                    <td></td>
                     
                    </tr>
                    <tr> 
                    <td>Father Name</td>
                    <td><input type="text" name="fname" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    
                    <tr>
                    <td>Place</td>
                    <td><input type="text" name="place" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Street</td>
                    <td><input type="text" name="street" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    
                    <tr>
                    <td>District</td>
                    <td><input type="text" name="dist" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Pincode</td>
                    <td><input type="number" name="pcode" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Contact No</td>
                    <td><input type="number" name="cno" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Mail ID</td>
                    <td><input type="email" name="email" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" placeholder="" required></td>
                    <td></td>
                        
                    </tr>
                
                    <tr>
                    <td></td>
                    <td><input type="submit" name="sign" value="Sign Up" required></td>
                    <td></td>
                        
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>
<?php
include_once('footer.php');
 include_once('config.php');
if(isset($_POST["sign"]))
{
$name=$_POST["name"];
$fname=$_POST["fname"];
$place=$_POST["place"];
$street=$_POST["street"];
$dist=$_POST["dist"];
$pcode=$_POST["pcode"];
$cno=$_POST["cno"];
$email=$_POST["email"];
$pass=$_POST["pass"];

//$img=basename($_POST["img"]);
//echo $img;

 //echo $oprice;

$sql = "INSERT INTO user VALUES ('$name','$fname','$place','$street','$dist','$pcode','$cno','$email','$pass')";
//$sql="INSERT INTO product (pname,qty,cat,brand,desc1,aprice,oprice,img) VALUES ('sgdfg','6','Furniture','dfsdf','fsdgfdg','4','54','images')";
//echo $sql;    
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Sign Up Successfully")</script>';
        echo "";
    } else
        echo "Error: " . $sql . "<br>" . $mysqli->error;
}


?>