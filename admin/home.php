<?php   session_start();
 if(!$_SESSION['name'])
 {
	//echo '<script type="text/javascript"> alert ("Plz lgin first ") </script>';
	header('Refresh: 0; URL=index.php');
	exit();
}
else 
 {

?>
<style>
 *{
margin:0;
padding:0;	

 }
 
 .fheader {
	 width:100%;
	 height:160%;
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

						.slide{
					        width:60%;
							height:60%;
							margin-left:21%;
							background:pink;
							  }
							  .img1{
								  height:100%;
								  width:100%;
							      }
								   .fest{
									width:60%;
									height:60%;
									margin-left:21%;
									background:yellow;
							          	}
										  .img2{
											   margin-bottom:10%;
												height:100%;
												width:100%;
												}
								/*animation :slide 20s infinite;
								 @keyframes fest
								 {
								     	25%{
										    background: url(photo/s1.jpg);
									       }
									     50%{
										    background: url(photo/s2.jpg);
 										    }
										 75%{
											background: url(photo/s3.jpg);
											}
										 85%{
											background: url(photo/s4.jpg);
											}
                                         100%{
											background: url(photo/s5.jpg);
											}
								   }*/

								   .food{
									width:60%;
									height:60%;
									margin-left:21%;
									background:green;
										}
										.img3{
												height:100%;
												width:100%;
												}

								

				         
		.buttom{

			   
			
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

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;   &nbsp;  &nbsp;
			    <a href="setting1.php" style="margin-left:13.5%;display;color:black;font-size:30px;text-decoration:none;  "> :<br> </a> </b>
			
		</div>
		   <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		       <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px;" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                   <?php
				
					
					  
					?>
                   
                    <div class="menubar">
						 
							<ul>
							<li>  <a href="#">HOME</a></li>
										<li> <a href="#">PLACE</a>  <ul>
												<li>   <a href="placehome.php"> SPOT</a></li>
												<li>  <a href="guess.php">GUEST HOUSE</a></li>
												<li>  <a href="mall.php">MALL/MARKET</a></li>
												<li>   <a href="rest.php">RESTAURANT</a></li>
										
										
										   </ul>
										 </li>
							<li>  <a href="#">EMERGENCY</a>
							<ul>
												<li>   <a href="hospital.php"> HOSPITAL</a></li>
												<li>  <a href="police.php">POLICE</a></li>
										
										
										   </ul>
							
							
							</li>
							<li>   <a href="about.php">ABOUT</a></li>
							<li>  <a href="festivals.php">FESTIVALS</a></li>
							&nbsp; <input type="text " style="width:230px;height:30px;margin-top:15px;margin-left:350px; border:none; outline:none;border-bottom: 1px solid black;">
                             <input type="button" style="width:70px;border-radius:20px;height:30px;" value="search" >

						 </ul>
						
						 </div>
						 <br>
					     
						<center style="font-size:28px;color:#1b4c16;"><b> Most visited Places </b></center>
						<br>

						<div class="slide">
					         <img  class="img1" src="photo/place.png" alt="">
						</div><br><br>
						<center style="font-size:28px;color:#1b4c16;"><b> Famous Festivals of the region  </b></center>
						<br><br>
						<div class="fest">
						<img  class="img2" src="photo/festivalcom.png" alt="">
						</div>
						<br><br>
						<center style="font-size:28px;color:#1b4c16;"><b> Resort / Guesshouse </b></center>
							<br>
						<div class="food">
						
						<img  class="img3" src="photo/resort.png" alt="">
						</div> <br><br>
					

 <hr>

<div class="buttom">
<?php require "footer.php";

 
 
	}
	?>

</div>




					
      </div>




						    
</body>
</html>
