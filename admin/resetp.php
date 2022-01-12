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
		
		  .log{
	background-color:#0e150c;
	width:90%;
	height:40%;
	margin-left:5.5%;
}
				         
		.buttom{}		
input[type=text]{
border-radius:6px;
height:40px;
width:65%;
margin-left:20%;
}
input[type=submit]
            {
				width:130px;
				height:40px;
				border-radius:80px;
				margin-left:70%;
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
		 
                        input[type=reset]
            {
				width:130px;
				height:40px;
				border-radius:80px;
				margin-top:20px;
			}	
				input[type=reset]:hover
				{
					background:lightblue;
					color:black;
                }
				 u{
                     color:white;
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

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;  </b>
			
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
                            <!--<li  style="font-size:22px">  <a href="login.php" >LOGIN</a></li>-->
                            </ul>
						 </div>
						 <br>
						 
						 <div class="log">
		
<form method="POST" enctype="multipart/form-data"> <br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >New Password </u></i></strong><br><br>
<input type="text" name="p" id="pass" placeholder=""  ><br><br>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Re-type Password </u></i></strong><br><br>
<input type="text" name="rp" id="pass" placeholder=""  ><br><br>

<input type="submit" name="sub" id="sub" value="Submit">
 </form>
 </div>


 <?php 
 
if(isset($_POST['sub']))
{
$pas=$_POST['p'];
$cp=$_POST['rp'];
$em=$_SESSION['n'];
//echo $pas,$cp;
if($pas==$cp)
{
 
           //echo $em;
            $sql4a="update user set pass='$cp' where email='$em' ";
            $result1=mysqli_query($conn,$sql4a);
            if(!$result1)
            {
                echo '<script type="text/javascript"> alert (" Failed to Reset Password ..") </script>';

            }
            else{
                echo '<script type="text/javascript"> alert (" Password Reset Sucessfull ..") </script>';
            }
	
}


}
 ?>
  <hr>
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					

						    
</body>
</html>
