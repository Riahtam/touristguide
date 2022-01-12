<?php
   require "connection.php";
  session_start(); ?>
<style>
 *{
margin:0;
padding:0;	

 }
 ul{
			margin:0px;
			padding:0px;
			list-style:none;
			font-size:15px;
			}
			ul  li{
				float:left;
				width:120px;
				height:38px;
				margin-top:px;
				line-height:40px;
				margin-right:10px;
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

 .fheader {
	 width:100%;
	 height:110%;
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
		
		  .log{
	background-color:#0e150c;
	width:40%;
	height:50%;
	margin-left:30%;
}
				         
		.buttom{}		
			input[type=text]{

border-radius:6px;
height:40px;
width:57%;
margin-left:20%;
}
	
input[type=button]:hover{
				background:lightblue;
				color:black;
                }		  
	           .left{
                     
					 width:100%;
					 height:100%;
					 background:#024e09;
 
					}
				
	    .right{
			         width:100%;
					 height:100%;
					 background:white;

		    }
		 .com{
			background:pink;
				
				
				display:grid;
				grid-template-columns:20% 80%;

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

		         <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;    </b>
			
		   </div>
		        <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		           <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px;" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                  
                   
                         <div class="menubar">
					         <ul>
						         <li style="margin-left:60px;font-size:22px;">  <a href="#" >SETTING</a> </li>
								 <li style="margin-left:60px;font-size:22px;">  <a href="home.php" >HOME</a> </li>
                             </ul>
						 </div>
						
						<div class="com">
						<form method="POST"  enctype="multipart/form-data">
						 <div class="left">
						
							    <br>
								<b style="margin-left:90px;color:white"> <u>PROFILE </u>	</b><br><br>
								
								<input type= "submit" value=" Change Name" name="cn"
							     style="margin-left:0px;height:30px;width:270px;background:#024e09; border:none;
								outline:none;
								border-bottom: 1px solid black;
								background:transparent;">
								<br><br>

								<input type= "submit"  value=" Change Email"  name="ce" style="margin-left:0px;height:30px;width:270px;background:#024e09;
							    border:none;
								outline:none;
								border-bottom: 1px solid black;
								background:transparent;">
								
								<br><br>

								<input type= "submit"  value=" Change Password" name="cp" style="margin-left:0px;height:30px;width:270px;background:#024e09;
								border:none;
								outline:none;
								border-bottom: 1px solid black;
								background:transparent;
								"> 
								<br><br>

								<!--<input type= "submit"  value=" Change profile Pic" name="cpp" style="margin-left:0px;height:30px;width:270px;background:#024e09;
							    border:none;
								outline:none;
								border-bottom: 1px solid black;
								background:transparent;
								">  
								<br><br>-->

								<input type= "submit"  value="Logout" name="lo" style="margin-left:0px;height:30px;width:270px;background:#024e09;
								 border:none;
								outline:none;
								border-bottom: 1px solid black;
								background:transparent;
								"> 
						    </div> 
						</form>
								
						<div class="right">  
			    <?php
				//LOGOUT #######################################################################################################
							if(isset($_POST['lo'])) 
						{
							echo" <br> <br><b style='margin-left:35%;font-size:29px'>  Are you sure you want to logout ? </b>";
							echo "  <br> <br> <a href='log.php' style=' margin-left:47%;display;color:black;font-size:30px;'> Yes </a>   &nbsp;   <b style='font-size:30px'> / </b>  &nbsp;   <a href='setting1' style=' display;color:black;font-size:30px;'> No </a>";
						}
						//CHANGE NAME ################################################################################
						if(isset($_POST['cn'])) 
						{?>
						   
							<form  method="POST" action=""><br><br>
							<span style="font-size:22px;margin-left:28%"> Current Username : </span><br>
             <input type="text" name="cn" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
							<span style="font-size:22px;margin-left:28%"> Change-to : </span><br>
             <input type="text" name="na" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
             <input type="submit" name="s" value="Update" style="height:28px;width:50px;margin-left:73%">
							
							</form>
                       <?php
						}
					  if(isset($_POST['s'])) 
					  {
						$current=$_POST['cn'];
						$chang=$_POST['na'];
						$idss=$_SESSION['id'];
						

						 $sql1="select   *  from  user where name='$current' ";
						 $result = mysqli_query($conn, $sql1);
						 $row = mysqli_num_rows($result);	
						 if($row==1){
							$sql4a="update user set name='$chang'  where name='$current' AND userid='$idss'";
							$result1=mysqli_query($conn,$sql4a);     
							echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
									}
							 else
								 {
						
									echo '<script type="text/javascript"> alert ("Failed to update Name..\nplease check your UserName") </script>';

					          }
					}
						
			           ?>
  <?php
  //CHANGE EMAIL #############################################################################################
               if(isset($_POST['ce'])) 	
					{
			?>	
						   
							<form  method="POST" action=""><br><br>
							<span style="font-size:22px;margin-left:28%"> Current Email : </span><br>
             <input type="text" name="cn" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
							<span style="font-size:22px;margin-left:28%"> Change-to : </span><br>
             <input type="text" name="na" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
             <input type="submit" name="sa" value="Update" style="height:28px;width:50px;margin-left:73%">
							
							</form>
                       <?php
						}
					  if(isset($_POST['sa'])) 
					  {
						$current1=$_POST['cn'];
						$chang1=$_POST['na'];
						$idss=$_SESSION['id'];
						/*echo $current1;
						echo $chang1;
						echo $idss;*/
						

						 $sql1="select   *  from  user where email='$current1' ";
						 $result54 = mysqli_query($conn, $sql1);
						 $row = mysqli_num_rows($result54);	
						 if($row==1){
							$sql4a="update user set email='$chang1'  where email='$current1' AND userid='$idss'";
							$result10=mysqli_query($conn,$sql4a);     
							echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
									}
							 else
								 {
						
									echo '<script type="text/javascript"> alert ("Failed to update Email..\nplease check your Current Email") </script>';

					          }
					}
						
			           ?>
  <?php
  //CHANGE PASSWORD ###########################################################################################################################
               if(isset($_POST['cp'])) 	
					{
			?>	
						   
							<form  method="POST" action=""><br><br>
							<span style="font-size:22px;margin-left:28%"> Current Password : </span><br>
             <input type="text" name="cn" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
							<span style="font-size:22px;margin-left:28%"> Change-to : </span><br>
             <input type="text" name="na" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
             <input type="submit" name="pasd" value="Update" style="height:28px;width:50px;margin-left:73%">
							
							</form>
                       <?php
						}
					  if(isset($_POST['pasd'])) 
					  {
						$currentp=$_POST['cn'];
						$changp=$_POST['na'];
						$idss=$_SESSION['id'];
						/*echo $currentp;
						echo $changp;
						echo $idss;*/
						

						 $sql11="select   *  from  user where pass='$currentp' ";
						 $result541 = mysqli_query($conn, $sql11);
						 $row = mysqli_num_rows($result541);	
						 if($row==1){
							$sql4a1="update user set pass='$changp'  where pass='$currentp' AND userid='$idss'";
							$result101=mysqli_query($conn,$sql4a1);     
							echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
									}
							 else
								 {
						
									echo '<script type="text/javascript"> alert ("Failed to update Password..\nPlease check your Current Password") </script>';

					          }
					}
						
			           ?>
					     <?php
  //CHANGE PROFILE PICTURE ###########################################################################################################################
               /*if(isset($_POST['cpp'])) 	
					{
			?>	
						   
							<form  method="POST" action=""><br><br>
							<span style="font-size:22px;margin-left:28%"> Current Pa : </span><br>
             <input type="text" name="cn" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
							<span style="font-size:22px;margin-left:28%"> Change-to : </span><br>
             <input type="text" name="na" id=""  required style= "margin-left:28%;width:50%;height:30px"> <br><br>
             <input type="submit" name="pasd" value="Update" style="height:28px;width:50px;margin-left:73%">
							
							</form>
                       <?php
						}
					  if(isset($_POST['pasd'])) 
					  {
						$currentp=$_POST['cn'];
						$changp=$_POST['na'];
						$idss=$_SESSION['id'];
						/*echo $currentp;
						echo $changp;
						echo $idss;
						

						 $sql11="select   *  from  user where pass='$currentp' ";
						 $result541 = mysqli_query($conn, $sql11);
						 $row = mysqli_num_rows($result541);	
						 if($row==1){
							$sql4a1="update user set pass='$changp'  where pass='$currentp' AND userid='$idss'";
							$result101=mysqli_query($conn,$sql4a1);     
							echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
									}
							 else
								 {
						
									echo '<script type="text/javascript"> alert ("Failed to update Password..\nPlease check your Current Password") </script>';

					          }
					}
					*/	
			           ?>



					
									  
					 </div>
				</div>
 <hr>
 
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					
      </div>

						    
</body>
</html>
