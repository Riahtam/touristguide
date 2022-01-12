<?php
   require "connection.php";
  session_start(); ?>
<style>
 *{
margin:0;
padding:0;	

 }
 
 .fheader {
	 width:100%;
	 height:120%;
	 display:block;
	
	 }
	 body{
		
		 }
  .top{
	   width:100%;
	   background-color:#3F84B1;
	   color:white; 
	  }
	   .menubar{
		  	   width:100%;
			   height:8%;
			   background-color:#4cb320;	   
		  }
		

				         
		.buttom{}		
			input[type=text]{

border-radius:6px;
height:40px;
width:57%;
margin-left:20%;
}
input[type=submit]
            {
				width:130px;
				height:40px;
				border-radius:80px;
				
				/*margin-top:20px; 
				 */
			}	
input[type=submit]:hover{
				background:lightblue;
				color:black;
                }		  
	 
						
	
                ul{
			margin:0px;
			padding:0px;
			list-style:none;
			font-size:15px;
			}
			ul  li{
				float:left;
				width:170px;
				height:38px;
				margin-top:px;
				line-height:40px;
				margin-right:5px;
				background:#4cb320;
				}
				
				ul li a{
					text-decoration:none;                  
					display:block;
					}
				ul li ul li {
					display:none;
					
					
					}
					ul li:hover ul li{
						display:block;
						}	 
	   
				  
						
					
					
				   
</style>
<!DOCTYPE html>
<html>
  <head>


  
    <title>indextouristguidesite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta  charset="utf-8">
    <link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/project/fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
    
   
   </head>


<body>
    <div class="fheader">
	
        <div class="top">
		   <b  style="margin-left:60px;">HOME</b> &nbsp; &nbsp; <img src="photo/home.png" height= "20px"> 

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp; </b>
			
		</div>
		   <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		       <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px;" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                   <?php
                   
                    ?>
                   
                    <div class="menubar">
					<ul>
							<li style="margin-left:20px;font-size:22px">  <a href="home.php" >HOME</a></li>
							<li> <a href="#">HOSPITAL</a>   </li>
                            </ul>
						 </div>
						 <br>
						 
						
						
		<form method="POST">
						<select name="type" id="type" style="margin-left:15%;width:60%;height:40px;">
						<option value="">  SELECT --</option>
						<option value="East Khasi Hills">EAST KHASI HILLS</option>
						<option value="West Khasi Hills ">WEST KHASI HILLS</option>
						<option value="Ribhoi">RIBHOI</option>
						<option value="South West Khasi Hills">SOUTH WEST KHASI HILLS</option>
						<option value="East Jaintia Hills"> EAST JAINTIA HILLS</option>
						<option value="West Jaintia Hills"> WEST JAINTIA HILLS</option>
						</select>

						<input type="submit" name="go" value="search">


		</form>
    
		<br><br>

        <?php
			
			if(isset($_POST['go']))
			{
				$dist=$_POST["type"];
      
					$sql9="select * from emergency where district='$dist' and type='Hospital' ";
					//echo"<br>$no";
				 $result=mysqli_query($conn,$sql9);
				 if(mysqli_num_rows($result)>0)
				   {
					 echo"<center>";
									 echo "<h3><u>EMERGENCY  CENTER DETAILS<br></u></h3>";
						 
											echo " <br> <br><table border=1 width=60%>
									  <tr>
										  <th>CENTER  NAME</th>
										  <th> DISTRICT</th>
										  <th>LOCALITY</th>
										  <th>TYPE</th>
										  <th>CONTACT</th>
										 
									
									  </tr>";
						 while($row = mysqli_fetch_assoc($result))
						 {
								 echo "<tr>";
								   echo " <td>".$row["name"]."</td>";
								   echo "<td>".$row["district"]."</td>";
								   echo "<td>".$row["loca"]."</td>";
								   echo "<td>".$row["type"]."</td>";
								   echo "<td>".$row["contact"]."</td>";?>
								   
									<!--<td>  <a href="emergencycombine.php?edit=<?php// echo $row["id"];?> "  class="btn btn-info">EDIT </a>
								</td>
							
									<td>  <a href="emergencycombine.php?delete=<?php// echo $row["name"];?> " class="btn btn-danger">DELETE       </a>
									</td>-->
				
								  <?php  echo "</tr>";
						 }
					  echo "</table>"; 	
					  echo"</center>";  
				  }

				echo"  <center> <br> <br>  <span style='color : blue;font-size:22px'>For Emergency You can Contact 108. </span> </center>";
				
				}

         ?>
	
	
		
 <br><br>
 <hr>
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					
      </div>

						    
</body>
</html>
