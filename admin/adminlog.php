<?php
   require "connection.php";
  session_start(); ?>
<style>
 *{
margin:0;
padding:0;	

 }
 .main{
width:100%;
height:17%;
background-color:#232121;

    }         
		.but{
background-color:#232121;
display:flex;
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
input[type=submit]
            {
				width:130px;
				height:40px;
				border-radius:80px;
				margin-left:34%;
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
				width:120px;
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

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;    </b>
			
		</div>
		   <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		       <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px;" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                   <?php
                   
                    ?>
                   
                    <div class="menubar">
					<ul>
							<li style="margin-left:20px;font-size:22px">  <a href="index.php" >HOME</a></li>
                            </ul>
						 </div>
						 <br>
						 
						 <div class="log">
						
		<form method="POST">
		<strong ><i    style="margin-left:40%;font-size:22px;color:white;"><u > Admin Login</u></i></strong><br><br> 
		<strong ><i    style="margin-left:20%;font-size:22px;color:white;"><u >Enter username</u></i></strong><br><br> 
	    <input type="text" name="user" id="" placeholder="Username" required><br><br>
	    <strong ><i    style="margin-left:20%;font-size:22px;color:white;"><u >Enter password</u></i></strong><br><br> 
	    <input type="text" name="pass" id="Password" placeholder="Password" required><br><br>
	    <input type="submit" value="login" name="logi"><br><br>
		<a href="forgotpass.php" style="margin-left:200px;color:white">forgot passsword</a>
		</form>
</div>     
		<br><br>		<?php
					
					//$u=$_POST["name"];
							if(isset($_POST['logi']))
							{
								$username=$_POST["user"];
								$password=$_POST["pass"];
								$_SESSION['name'] =$username;
	
	
								$sql="select * from user where name='$username' and pass='$password'";
								$result = mysqli_query($conn, $sql);
								$row = mysqli_num_rows($result);
								if($row==1){
										header('Refresh: 1; URL=dashboard.php');
													}
													else
													{
															echo '<script type="text/javascript"> alert (" invalid credential..") </script>';
															//echo"<center><h3><b></b> your credentials are not valid..<br></h3></center>";
	
													}
										$conn->close();
	
							}
	
	
						?>	

 <hr>
 <div class="buttom">
<div class="main">
    <div class="but">
      <!-- <div class="feedback" style="margin-left:35%; font-size:22px"><a href="feedback.php" style="color:black">Feedback</a></div>-->
       <div class=" WebsitePolicies"  style="margin-left:43%;font-size:22px"><a href="policy1.php" style="color:black">Policies</a></div>
      <!-- <div class="Help"  style="margin-left:30px;font-size:22px"><a href="help.php" style="color:black">Help</a></div>-->
       <div class="contact"  style="margin-left:30px;font-size:22px"><a href="contact1.php" style="color:black">Contact us</a> </div><br>
    
    </div>
    <br> <br>
    <center>
          <b style="font-size:22px"> This content is Owned and Developed by SC Students Shillong Meghalaya India.</b>  <br><br>
  
         <u>Last Updated : 30 june , 2020 .</u>
       </center>
       </div>
</div>
					
      </div>

						    
</body>
</html>
