
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
   
<a href="dashboard.php" style="margin-left:82%">HOME</a>         &nbsp; &nbsp; <a href="addphoto.php">ADD NEW </a> <br>
<br>


<input type="text" name="nam" id="nam" placeholder="Enter photo name to search"  style="	border-radius:6px; height:30px; width:20%; margin-left:70%;"  > &nbsp; &nbsp;<input type="submit" name="sub" id="sub" value="SEARCH" style="width:70px;  height:30px;  border-radius:80px;   margin-top:20px;" ><br>
<?php    
  
  if(isset($_GET['delete']))
  {
	$na=$_GET['delete'];
	$sql1="delete from photo where id='$na'";
	$result = mysqli_query($conn, $sql1);
	if(!$result)
		die(mysql_error());
		echo '<script type="text/javascript"> alert ("Sucessfully deleted..") </script>';
		header("location:photocombine.php");
	   
  }




if(isset($_POST['sub']))
{

	   $name=$_POST['nam'];
	   $sql9="select * from photo where pname='$name'";
		   //echo"<br>$no";
		$result=mysqli_query($conn,$sql9);
		//if(mysqli_num_rows($result)>0)
          {
            	echo "<center>";
			                echo "<h3><u>PHOTO  DETAILS<br></u></h3>";
							echo "<table border=1  >
							 <tr>
								 <th> PHOTO </th>
								 
								 <th> PHOTO  NAME</th>
	                             <th colspan='1'>ACTION</th>
			                 </tr>";
				while($row = mysqli_fetch_array($result))
				{
                    	echo "<tr>";?>
					  <td> <img src=" <?php  echo $row['image'] ;?>"  height ="100px" width=100px alt="">   </td>
						 <?php echo "<td>".$row["pname"]."</td>";
 
						  ?>
				   
					<!--<td>  <a href="#=<?php //echo $row["userid"];?>"
					class="btn btn-info">EDIT </a>
					</td>-->

					<td>  <a href="#=<?php echo $row["id"];?> "
					class='btn btn-danger'>DELETE </a>
					</td>

				  <?php  echo "</tr>";
						
				}
			 echo "</table>";
			 echo"</center>";
			 
	}
	//header("location:usercombine.php");
}


  else
  {

      
	$sql9="select * from photo ";
	//echo"<br>$no";
 $result=mysqli_query($conn,$sql9);
 //if(mysqli_num_rows($result)>0)
   {
	 echo"<center>";
					 echo "<h3><u>PHOTO  DETAIL<br></u></h3>";
		 
	  echo "<table border=1 >
					  <tr> <th>PHOTO</th>
					    
						  <th> PHOTO NAME</th>
						  <th colspan='1'>ACTION</th>
					  </tr>";
		 while($row = mysqli_fetch_array($result))
		 {
				 echo "<tr>";?>
				  <td> <img src=" <?php  echo $row['image'] ;?>"  height ="150px" width=150px alt="">   </td>
				 <?php  echo " <td>".$row["pname"]."</td>";
			          ?>
				   
				<!--<td>  <a href="usercombine.php?edit=<?php// echo $row["userid"];?> "  class="btn btn-info">EDIT </a>
			</td>-->
			
					<td>  <a href="photocombine.php?delete=<?php echo $row["id"];?> " class="btn btn-danger">DELETE</a>
					</td>

				  <?php  echo "</tr>";
		 }
	  echo "</table>"; 	  
  }
 echo"</center>";
}





?>


</body>
</form>


</html>

