
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
    <title>insert new place</title>
	<link rel="stylesheet" href="style.css" href="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css ">

	<script type="text/javascript" src="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>    


</head>

<body>
<div class="container">
<form method="POST">
   
<a href="dashboard.php" style="margin-left:82%">HOME</a>         &nbsp; &nbsp; <a href="newrestaurant.php">ADD NEW </a> <br>
<br>


<input type="text" name="nam" id="nam" placeholder="Enter Festival name to search"  style="	border-radius:6px; height:30px; width:20%; margin-left:70%;"  > &nbsp; &nbsp;<input type="submit" name="sub" id="sub" value="SEARCH" style="width:70px;  height:30px;  border-radius:80px;   margin-top:20px;" ><br>
<?php    
  





if(isset($_POST['sub']))
{

	   $name=$_POST['nam'];
	   $sql9="select * from restau where name='$name'";
		   //echo"<br>$no";
		$result=mysqli_query($conn,$sql9);
		if(mysqli_num_rows($result)>0)
          {
            	echo "<center>";
			                echo "<h3><u>RESTAURANT   DETAIL<br></u></h3>";
							echo "<table border=1  width=60% >
			                 <tr>
			                     <th> RESTAURANT NAME</th>
			                     <th> DISTRICT</th>
			                     <th>LOCALITY</th>
			                     <th>ABOUT</th>
	                             <th colspan='2'>ACTION</th>
			                 </tr>";
				while($row = mysqli_fetch_assoc($result))
				{
                    	echo "<tr>";
						  echo " <td>".$row["name"]."</td>";
						  echo "<td>".$row["district"]."</td>";
						  echo "<td>".$row["loca"]."</td>";
						  echo "<td>".$row["about"]."</td>"; 
						  ?>
				   
					<td>  <a href="#=<?php echo $row["name"];?>"
					class="btn btn-info">EDIT </a>
					</td>

					<td>  <a href="#=<?php echo $row["name"];?> "
					class='btn btn-danger'>DELETE </a>
					</td>

				  <?php  echo "</tr>";
						
				}
			 echo "</table>";
			 echo"</center>";
			 
	}
	header("location:restaurantcombine.php");
}


  else
  {

      
	$sql9="select * from restau ";
	//echo"<br>$no";
 $result=mysqli_query($conn,$sql9);
 if(mysqli_num_rows($result)>0)
   {
	 echo"<center>";
					 echo "<h3><u>RESTAURANT  DETAIL<br></u></h3>";
		 
	  echo "<table border=1 width=60%>
					  <tr>
                          <th>IMAGE </th>
						  <th> RESTAURANT NAME</th>
						  <th> DISTRICT</th>
						  <th>LOCALITY</th>
						  <th>ABOUT</th>
						  <th colspan='2'>ACTION</th>
					  </tr>";
		 while($row = mysqli_fetch_array($result))
		 {
				 echo "<tr>";?>
				    <td> <img src=" <?php  echo $row['image'] ;?>"  height ="100px" width=100px alt="">   </td>
					<?php
				   echo " <td>".$row["name"]."</td>";
				   echo "<td>".$row["district"]."</td>";
				   echo "<td>".$row["loca"]."</td>";
				   echo "<td>".$row["about"]."</td>";?>
				   
					<td>  <a href="restaurantcombine.php?edit=<?php echo $row["id"];?> "  class="btn btn-info">EDIT </a>
				</td>
			
					<td>  <a href="restaurantcombine.php?delete=<?php echo $row["name"];?> " class="btn btn-danger">DELETE       </a>
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
  $sql1="delete from restau where name='$na'";
  $result = mysqli_query($conn, $sql1);
  if(!$result)
	  die(mysql_error());
	  echo '<script type="text/javascript"> alert ("Sucessfully deleted..") </script>';
	 // header("location:restaurantcombine.php");
	 
}



if(isset($_GET['edit']))
{   $id=$_GET['edit'];
	$sql12="select   *  from  restau where id='$id' ";
		$result = mysqli_query($conn, $sql12);
		//echo "$sql1";
		$row = mysqli_num_rows($result);
		if($row==1){
			while($row = mysqli_fetch_assoc($result))
		{
		
		 $namew=$row['name'];
		 $dis=$row['district'];
		 $lo=$row["loca"];
		 $abt=$row["about"];
		
		}
	}
	
	
?>
	
	<br> <br> 
	     <form method="POST">
   
  <input type="hidden" name="id"  value="<?php echo @ $id; ?>">
   <strong ><i    style="margin-left:20%;font-size:22px"><u >Restaurant  Name</u></i></strong><br><br> 
   <input type="text" name="nams" id="nam" value="<?php echo @ $namew; ?>">
   <br><br>
   
   <strong ><i    style="margin-left:20%;font-size:22px"><u >District</u></i></strong><br><br>
   <input type="text" name="district" id="district"   value="<?php echo @ $dis; ?>"  ><br><br>
   
   <strong ><i    style="margin-left:20%;font-size:22px"><u >Locality</u></i></strong><br><br>
   <input type="text" name="loca" id="loca"   value="<?php echo @ $lo; ?>" ><br><br>
   
 
   
   <strong ><i    style="margin-left:20%;font-size:22px"><u >About</u></i></strong><br><br>
   <div style="width:60% ;margin-left:20%">
<textarea name="content"  >  <?php echo @ $abt; ?></textarea>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>
</div>
   
	<br>
	<br>
   
   <input type="submit" name="up" id="up" value="UPDATE"  style="width:90px;
   height:40px;  border-radius:80px; margin-left:87%;" >
  
   
	</form>




 </div>

<?php  if(isset($_POST['up']))
{
	$id=$_POST["id"];
	$n=$_POST["nams"];
	$d=$_POST["district"];
	$l=$_POST["loca"];
	$a=$_POST["content"];

			$sql4a="update restau set    name='$n',  district='$d' ,loca='$l',longti='',lati='', id='$id', about='$a' where id='$id' ";
			$result1=mysqli_query($conn,$sql4a);
			
			echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
			//header("location:placecombine.php");
				
}
           
} 

?>


</body>
</form>


</html>

