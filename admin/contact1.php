<?php
   require "connection.php";
  session_start(); ?>
<style>
  .main{
width:100%;
height:17%;
background-color:#232121;

    }         
		.but{
background-color:#232121;
display:flex;
}
 
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
							<li style="margin-left:20px;font-size:22px">  <a href="index.php" >HOME</a></li>
                            <li style="margin-left:20px;font-size:22px">  <a href="#" >Contact Us</a></li>
                            </ul>
						 </div>
						 <br>
						 
						
						
		<form method="POST">
        <!--
                        <span style="margin-left:20%">Add Comment</span><br>
					    <textarea name="about" id="about" cols="73" rows="10" placeholder="Discription  :" style="margin-left:20%"></textarea> <br> <br>
						<input type="submit" value="Add Comment" name="cmnt" style="margin-left:50%;">
		<br><br>-->	
     <p style="margin-left:200px">Any issue regarding any content in this page you can email us  <a href="mailto:angelbertriahtam@yahoo.com"> here ..   </a> 
	 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, commodi? 
	 </p>
	 <p style="margin-left:100px">Wanna know more about us, our organization  you can visit us at our website <a href="https://google.com"> zyx.co.in </a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et exercitationem quam, unde distinctio, voluptatem debitis enim recusandae dolorem tenetur excepturi ad iure sed. Iusto quia incidunt itaque fuga id sed molestias, necessitatibus quisquam, omnis similique placeat totam eum harum? Aliquid deserunt reiciendis accusantium cupiditate quas, distinctio nam accusamus mollitia cum! </p>

       
        </form>	
        <?php
											  
												
					  
		?>	
 <br><br>
 <hr>
 <div class="buttom">
<div class="main">
    <div class="but">
      <!-- <div class="feedback" style="margin-left:35%; font-size:22px"><a href="feedback.php" style="color:black">Feedback</a></div>-->
       <div class=" WebsitePolicies"  style="margin-left:43%;font-size:22px"><a href="policy1.php" style="color:black">Policies</a></div>
      <!-- <div class="Help"  style="margin-left:30px;font-size:22px"><a href="help.php" style="color:black">Help</a></div>-->
       <div class="contact"  style="margin-left:30px;font-size:22px"><a href="#" style="color:black">Contact us</a> </div><br>
    
    </div>
    <br> <br>
    <center>
          <b style="font-size:22px"> This content is Owned and Developed by SC Students Shillong Meghalaya India.</b>  <br><br>
  
         <u>Last Updated : 15 Oct , 2020 .</u>
       </center>
       </div>
</div>
					
      </div>
					
      </div>

						    
</body>
</html>
