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
                    <a href="home.php">Home </a>
                    <i class="fa fa-caret-down"></i>
                </button>


            </div>
           


        </div>


    </div>
    <div class="content">
        <div id="head1">ADMIN LOGIN</div>
        <div class="content1">
           <form action="adminlogin.php" method="post">
            <table >
                <tr></tr>
            <tr>
                    <td>USer Name
                    </td>
                    <td>
                        <input type="text" name="uname" placeholder>
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
                        <input type="submit" value="login" name="login" placeholder>
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
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    echo "welcome";
    if($uname=="admin" && $pass=="admin"){
        header('Location: donor_new.php');
    }
    else
    {
        echo '<script>alert("Invalid Username/Password")</script>';
    }
}
?>