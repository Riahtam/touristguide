
 <?php require "connection.php";
 session_start();
 
 ?>
<style>



<style>
 
 input[type=submit]
            {
				width:90px;
				height:40px;
				margin-left:79%;
				border-radius:80px;
				margin-top:20px;
			}	
				input[type=submit]:hover
				{
					background:lightblue;
					color:black;
                }

				body{
                background-color:#0e150c;
				color:#bbcab5;

                }
				a{
                     color:#bbcab5;
				 }

				 input[type=reset]
            {
				width:90px;
				height:40px;
				border-radius:80px;
				margin-top:20px;
			}	
				input[type=reset]:hover
				{
					background:lightblue;
					color:black;
                }

 input[type=text]{

	border-radius:6px;
	height:45px;
	width:60%;
	margin-left:20%;

 }
 
	
				input[type=submit]:hover{
				background:lightblue;
				color:black;
                }

				input[type=reset]{
			width:80px;
			height:40px;
	
			border-radius:80px;
            margin-top:20px;
			}	
				input[type=reset]:hover{
				background:lightblue;
				color:black;
                }
				
				 a{
                  color:#bbcab5;

                  }
				a:hover{

					background:lightblue;
				     }
					 body{
                background-color:#0e150c;
				color:#bbcab5;

                }

				.btn-info{
					 background	:green;
				}
				.btn-danger{
					background	:red;	
				}
 </style>
<html>
<head>
    <title>user</title>
	<link rel="stylesheet" href="style.css" href="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css ">

	<script type="text/javascript" src="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>    


</head>

<body>
<div class="container">
<form method="POST"  enctype="multipart/form-data">
   
<a href="dashboard.php" style="margin-left:82%">HOME</a>         &nbsp; &nbsp; <a href="adduser.php">ADD NEW </a> <br>
<br>


<input type="text" name="nam" id="nam" placeholder="Enter user name to search"  style="	border-radius:6px; height:30px; width:20%; margin-left:70%;"  > 
&nbsp; &nbsp;<input type="submit" name="sub" id="sub" value="SEARCH" style="width:70px;  height:30px;  border-radius:80px;   margin-top:20px;" ><br>
<?php    
if(isset($_POST['sub']))
{

	   $name=$_POST['nam'];
	   {

      
		$sql9="select * from user where name='$name' ";
		//echo"<br>$no";
	 $result=mysqli_query($conn,$sql9);
	 //if(mysqli_num_rows($result)>0)
	   {
		 echo"<center>";
						 echo "<h3><u>USER  DETAIL<br></u></h3>";
			 
		  echo "<table border=1 width=60%>
						  <tr> <th>PHOTO</th>
							
							  <th> USER NAME</th>
							  <th>ADDRESS</th>
							  <th>Email</th>
							  <th>PASSWORD</th>
							  <th>ID</th>
							  <th colspan='1'>ACTION</th>
						  </tr>";
			 while($row = mysqli_fetch_array($result))
			 {
					 echo "<tr>";?>
					 <td>    <img src=" <?php  echo $row['photo'] ;?>"  height ="100px" width=100px alt="">   </td>
					 <?php //echo'<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="" style="width:100px;height:80px;margin-left:25px">' ;   ?>
					 <?php 
					  // echo "<td>" .$row["photo"]."</td>";
					   echo " <td>".$row["name"]."</td>";
					   echo "<td>".$row["address"]."</td>";
					   echo "<td>".$row["email"]."</td>";
					   echo "<td>".$row["pass"]."</td>";
					   echo "<td>".$row["userid"]."</td>";?>
					   
					<!--<td>  <a href="usercombine.php?edit=<?php// echo $row["userid"];?> "  class="btn btn-info">EDIT </a>
				</td>-->
				
						<td>  <a href="usercombine.php?delete=<?php echo $row["name"];?> " class="btn btn-danger">DELETE       </a>
						</td>
	
					  <?php  echo "</tr>";
			 }
		  echo "</table>"; 	  
	  }
	 echo"</center>";
			 
	}
	//header("location:usercombine.php");
}


  else
  {

      
	$sql9="select * from user ";
	//echo"<br>$no";
 $result=mysqli_query($conn,$sql9);
 //if(mysqli_num_rows($result)>0)
   {
	 echo"<center>";
					 echo "<h3><u>USER  DETAIL<br></u></h3>";
		 
	  echo "<table border=1 width=60%>
					  <tr> <th>PHOTO</th>
					    
						  <th> USER NAME</th>
						  <th>ADDRESS</th>
						  <th>EMAIL</th>
						  <th>PASSWORD</th>
						  <th>ID</th>
						  <th colspan='1'>ACTION</th>
					  </tr>";
		 while($row = mysqli_fetch_array($result))
		 {
				 echo "<tr>";?>
				 <td>    <img src=" <?php  echo $row['photo'] ;?>"  height ="100px" width=100px alt="">   </td>
				 <?php //echo'<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="" style="width:100px;height:80px;margin-left:25px">' ;   ?>
				 <?php 
				  // echo "<td>" .$row["photo"]."</td>";
				   echo " <td>".$row["name"]."</td>";
				   echo "<td>".$row["address"]."</td>";
				   echo "<td>".$row["email"]."</td>";
				   echo "<td>".$row["pass"]."</td>";
				   echo "<td>".$row["userid"]."</td>";?>
				   
				<!--<td>  <a href="usercombine.php?edit=<?php// echo $row["userid"];?> "  class="btn btn-info">EDIT </a>
			</td>-->
			
					<td>  <a href="usercombine.php?delete=<?php echo $row["name"];?> " class="btn btn-danger">DELETE       </a>
					</td>

				  <?php  echo "</tr>";
		 }
	  echo "</table>"; 	  
  }
 echo"</center>";
}

if(isset($_GET['delete']))
{
  $na=$_GET['delete'];
  $sql1="delete from user where name='$na'";
  $result = mysqli_query($conn, $sql1);
  if(!$result)
	  die(mysql_error());
	  echo '<script type="text/javascript"> alert ("Sucessfully deleted..") </script>';
	 // header("location:usercombine.php");
	 
}

?>


</body>
</form>


</html>

