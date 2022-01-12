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
	width:90%;
	height:47%;
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
                            <li  style="font-size:22px">  <a href="login.php" >LOGIN</a></li>
                            </ul>
						 </div>
						 <br>
						 
						 <div class="log">
		
<form method="POST" enctype="multipart/form-data"> <br><br>
<center> <span style="color:white">Note : Email should be the one you register</span></center>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Email Address  </u></i></strong><br><br>
<input type="text" name="eml" id="pass" placeholder="Enter your email addtress "  ><br><br>
<input type="submit" name="sub" id="sub" value="Submit">
 </form>
	<?php
					
	
if(isset($_POST['sub']))
{
 $eml= $_POST['eml'];



   $sql="select email from user where email='$eml' ";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_num_rows($result);
   //echo $_SESSION['name'];
   if($row==1){
	   while($row = mysqli_fetch_assoc($result))
   	       {
				  $e=$row['email'];
				 // echo $e;
		   }
		   $random=mt_rand(0,999999);
		   $_SESSION['randomcode']=$random;
		   $msg="Your reset code is $random . Please do not share this Code with anyone. This code will be Valid after 24 hours..\n Thank You ";
		   $sub="Reset Code";
		   $to=$eml;
			mail($to, $sub,$msg);
			$_SESSION['n']=$eml;
			echo '<script type="text/javascript"> alert ("Reset code has been send to your email..") </script>';

?>
 <form method="POST" enctype="multipart/form-data"> <br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Enter Code  </u></i></strong><br><br>
<input type="text" name="cd" id="pass" placeholder="Eg : 123456"  ><br><br>
<input type="submit" name="ver" id="sub" value="Verify">
 </form>

<?php
			
  	
	 }
	
		    
  else {
	echo '<script type="text/javascript"> alert ("Please Check Your Email..") </script>';
 
	   }
	  
	}


 
        if(isset($_POST['ver']))
        {
            $c=$_POST['cd'];
            $num=$_SESSION['randomcode'];
        if($c==$num){
            header('location:resetp.php');
             }
        
        else{
			echo '<script type="text/javascript"> alert ("Wrong Code..") </script>';
            }
        }

// mail("angelbertriahtam@yahoo.com"," hiii","hello testing")
	
						?>	
</div>
<br>
 <hr>
<br>
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
