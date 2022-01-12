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
	  
	 
						
	
                ul{
			margin:0px;
			padding:0px;
			list-style:none;
			font-size:15px;
			}
			ul  li{
				float:left;
				width:150px;
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
	   
				  .pot{
                    
                    width:100%;


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
                            <li> <a href="#">MALL-COMMENT</a>   <li>
                            </ul>
						 </div>
						 <br>
						 
						<div class="pot">
				
						<?php 
						
						$user=$_SESSION['name'];     //username
						$vid=$_GET['co'];		   //place name		
						 //echo $vid;
				   
						 
						 $sql12="select   *  from  comlike where pname='$vid' ";
						 $result = mysqli_query($conn, $sql12);
						 //echo "$sql1";
						 $row = mysqli_num_rows($result);
						 if($row==1){
							 while($row = mysqli_fetch_assoc($result))
						 {
						 
								   $namew=$row['uname'];
								   $dis=$row['com'];
							   
						 
						 }
						 echo "  <span style='color:green'>@</span><span style='color:green'>$namew</span> <br>";
						 echo " <span style='margin-left:3%'>$dis </span>";
					 }
						
						
						
						
						?>
						
						
						</div>
						<br><br>
						<hr>
						<br>
						<span></span>
						
		<form method="POST">
<span style="margin-left:20%">Add Comment</span><br>
					    <textarea name="about" id="about" cols="53" rows="7" placeholder="Discription  :" style="margin-left:20%"></textarea> <br> <br>
						<input type="submit" value="Add Comment" name="cmnt" style="margin-left:40%;">

		</form>
    
		<br><br>		
        <?php
					
				

					 if(isset($_POST['cmnt']))
					 {
						$about=$_POST["about"];  //get value of comment textarea
					

						$sql9="select userid from user  where name='$user'";
						//echo"<br>$no";
						$result=mysqli_query($conn,$sql9);
						if(mysqli_num_rows($result)>0)
								{
									while($row = mysqli_fetch_array($result))
									{
										$n = $row['userid'] ;
										//$o=$row['district'];
									}
								}
								//echo $n;   //userid

							 $sql1="INSERT INTO `comlike` (`com`, `uname`, `li`, `dislike`, `id`, `pname`) VALUES ('$about', '$user', NULL, NULL, NULL, '$vid');";
							 $result1 = mysqli_query($conn, $sql1);
															 
							 if(!$result1)
								 {
									die(mysql_error());
								 }
									else
										{					
											echo '<script type="text/javascript"> alert ("Sucessfull..") </script>';
										}
										
									//}
								//}
														  
					 }
												  
													  
												
					  
		?>	

 <hr>
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					
      </div>

						    
</body>
</html>
