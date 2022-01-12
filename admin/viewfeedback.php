 
 <?php require "connection.php";
 session_start();
 
 ?>
<style>
body{
    background-color:#0e150c;
    color:#bbcab5;

  }
  input[type=submit]{
			width:70px;
			height:40px;
	
			border-radius:80px;
            margin-top:20px;
			}	
				input[type=submit]:hover{
				background:lightblue;
				color:black;
                }
                input[type=text]{
	border-radius:6px;
	height:45px;
	width:60%;
	margin-left:20%;
 }

 a{
                  color:#bbcab5;

 }
 a:hover{
      background:lightblue;
   }

   .btn-danger{
					background	:red;	
				}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>seach user</title>
    <link rel="stylesheet" href="style.css" href="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css ">

<script type="text/javascript" src="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>    
</head>

<body>
<form method="POST" enctype="multipart/form-data">


<a href="dashboard.php" style="margin-left:90%">HOME</a>       
 <!-- 
<strong ><i    style="margin-left:20%;font-size:22px"><u >Photo ID</u></i></strong><br>
<input type="text" name="uid" id="uid" placeholder="Enter Photo ID  to search"  required   > &nbsp; &nbsp;
<input type="submit" name="sub" id="sub" value="SEARCH"  ><br><br>-->
<center>
<br><br>
<h3> User Feedback</h3>
<table border='4'  width=60%>
<tr>

<th>Id</th>   <th>Feedback</th>   <th> UserName</th>   <th colspan='1'>ACTION</th>
     <!--<td>Photo</td>   <td>Name</td>   <td>Address</td> <td>email</td>  <td>Password</td>  <td>Id</td>-->
</tr>


</form>
<?php 
  if(isset($_GET['delete']))
  {
    $na=$_GET['delete'];
    $sql1="delete from feed where id='$na'";
    $result = mysqli_query($conn, $sql1);
    if(!$result)
        die(mysql_error());
        echo '<script type="text/javascript"> alert ("Sucessfully deleted..") </script>';
        header("location:viewfeedback.php");
       
  }
  
      
 $sql9="select * from feed ";
 //echo"<br>$no";
$result=mysqli_query($conn,$sql9);
if(mysqli_num_rows($result)>0)
{
      while($row = mysqli_fetch_assoc($result))
      {
              echo "<tr>";?>
               
                <?php
                echo " <td>".$row["id"]."</td>";
                echo "<td>".$row["feedb"]."</td>";
                echo "<td>".$row["uname"]."</td>";
                ?>
               	<td>  <a href="viewfeedback.php?delete=<?php echo $row["id"];?> " class="btn btn-danger">DELETE</a>
                </td>
               <?php  echo "</tr>";
      }
   echo "</table>"; 	  
}
echo"</center>";





?>

</body>
</html>