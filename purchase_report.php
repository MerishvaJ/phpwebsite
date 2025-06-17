<html>

<head>
<style>
			table {
			  border-collapse: collapse;
			  border: 1px solid green;
			}
			table td{
				padding-left:5px;
				height:30px;
				font-size: 14px;
			}
            </style>
    
    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

    <body>
        
    <?php
  include_once('header1.php');
?>

<div class="content">
<div id="head1">PRODUCT DETAILS</div>
        <div class="content1">
           <form action="" method="post">
           <div id="tableHeader" ></div>
        <div style="overflow: scroll; height: 300px; width: 100%">
           <table border="1">
               <tr>
               <td><b>Sl.No</b></td>
               <td><b>Product Name</b></td>
               <td><b>Price</b></td>
               <td><b>Address</b></td>
               <td><b>E-Mail</b></td>
               
               </tr>
               <?php
                session_start();
               include_once('config.php');
               $x=1;
               $email = $_SESSION["email"];
                $sql = mysqli_query($mysqli,"SELECT * FROM purchase where email='$email'");
                while ($rs= mysqli_fetch_array($sql)) 
                {

                    echo "<tr>";
                    echo "<td>".$x."</td>";
                
                    echo "<td>".$rs["pname"]."</td>";
                    echo "<td>".$rs["price"]."</td>";
                    echo "<td>".$rs["addr"]."</td>";
                    echo "<td>".$rs["email"]."</td>";
                  
                    
                    
                    echo "</tr>";


                    $x=$x+1;
                
                }
  
  
  ?>
             
            
            </table>
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
         window.onload = function fixHeader() {
             var t = document.getElementById("table12");
             var thead = t.getElementsByTagName("thead")[0];
             var t1 = t.cloneNode(false);
             t1.appendChild(thead);
             document.getElementById("tableHeader").appendChild(t1)
         }
</script>