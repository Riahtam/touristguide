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
</head>

<body>
<form method="POST" enctype="multipart/form-data">


<a href="dashboard.php" style="margin-left:90%">HOME</a>       
 <!-- 
<strong ><i    style="margin-left:20%;font-size:22px"><u >Photo ID</u></i></strong><br>
<input type="text" name="uid" id="uid" placeholder="Enter Photo ID  to search"  required   > &nbsp; &nbsp;
<input type="submit" name="sub" id="sub" value="SEARCH"  ><br><br>-->

<br><br><br>
<center>
<h3>User Comment</h3>
<table border='4' width=60%>
<tr>
 
<th>UserName</th>   <th>Place Name</th>   <th>Comment</th> <th  colcpan="1">Action</th>
     <!--<td>Photo</td>   <td>Name</td>   <td>Address</td> <td>email</td>  <td>Password</td>  <td>Id</td>-->
</tr>


</form>
<?php 
  if(isset($_GET['delete']))
  {
    $na=$_GET['delete'];
    $sql1="delete from comlike where id='$na'";
    $result = mysqli_query($conn, $sql1);
    if(!$result)
        die(mysql_error());
        echo '<script type="text/javascript"> alert ("Sucessfully deleted..") </script>';
        header("location:managecomment.php");
       
  }
  
      
 $sql9="select * from comlike ";
 //echo"<br>$no";
$result=mysqli_query($conn,$sql9);
if(mysqli_num_rows($result)>0)
{
      while($row = mysqli_fetch_assoc($result))
      {
              echo "<tr>";?>
               
                <?php
                echo " <td>".$row["uname"]."</td>";
                echo "<td>".$row["pname"]."</td>";
                echo "<td>".$row["com"]."</td>";
                ?>
               	<td>  <a href="managecomment.php?delete=<?php echo $row["id"];?> " class="btn btn-danger">DELETE</a>
                </td>
               <?php  echo "</tr>";
      }
   echo "</table>"; 	  
}
echo"</center>";





?>

</body>
</html>