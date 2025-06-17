<!DOCTYPE html>

<html>

<head>
    <link href="StyleSheet.css" rel="stylesheet" />
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
                    <a href="vendor_register.php">Register </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>


        </div>


    </div>
    <div class="content">
        <div id="head1">VENDOR LOGIN</div>
        <div class="content1">
           <form action="vendor_login.php" method="post">
            <table >
                <tr></tr>
            <tr>
                    <td>E-Mail ID
                    </td>
                    <td>
                        <input type="email" name="email" placeholder>
                    </td>
                    <td rowspan="4"><img width="180px" src="login.png"/></td>
                </tr>
                <tr >
                    <td>Password
                    </td>
                    <td>
                        <input type="password" name="pass" placeholder>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Sign in" name="login" placeholder>
                    </td>
                    
                </tr>
                <tr >
                    <td rowspan="4">
                
                </td>
                </tr>
            </table>
            </form>
            
        </div>
    </div>
    <div class="footer">Copyright@<?php echo date("Y");?></div>
</body>

</html>
<?php
if(isset($_POST["login"]))
{
    include_once('config.php');
    session_start();
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $_SESSION["email"] = $email;
    $_SESSION["msg"] = "";
    echo "welcome";
    $sql = mysqli_query($mysqli, "SELECT * FROM vendor where email='$email' and pass='$pass'");
            if ($rs = mysqli_fetch_array($sql)) {
        header('Location: product_new.php');
    }
    else
    {
        echo '<script>alert("Invalid E-Mail/Password")</script>';
    }
}
?>