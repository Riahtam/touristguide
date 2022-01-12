<?php 
 require "connection.php";
 session_start();


?>


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
		 color:white;
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

					.com{
						background:white;
						 color:black;
					
		                 }	 
	
							
												
					
					
				   
</style>
<!DOCTYPE html>
<html>
  <head>


  
    <title>indextouristguidesite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta  charset="utf-8">
	<link rel="stylesheet" href="style.css" href="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css ">

	<script type="text/javascript" src="file:///E:/xampp/htdocs/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script> 
    <link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/project/fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
	<link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
   
   </head>


<body>
<form method="POST"  enctype="multipart/form-data" action="abtplace.php">
    <div class="fheader">

	
        <div class="top">
		   <b  style="margin-left:60px;">HOME</b> &nbsp; &nbsp; <img src="photo/home.png" height= "20px"> 

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;      <a href="setting1.php" style="margin-left:17.5%;display;color:black;font-size:30px;text-decoration:none;"> : </a>  </b>
			
		</div>
		   <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		       <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px; color:black" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                   <?php
                   
                    ?>
                   
                    <div class="menubar">
					<ul>
							<li style="margin-left:20px;font-size:16px">  <a href="home.php" >HOME</a></li>
              <li> <a href="#">SPOT-INFO</a>  </li>    &nbsp;
           </ul>

						      </div>
                <!-- <a href="#"> <span style="margin-left:90%;color:black;font-size:18px">View Map</span></a>--> 
				<div class="com">
                <?php
        $vid=$_GET['iv'];
       // echo $vid;

                 
                    $sql9="select * from place  where placeid ='$vid'";
                    //echo"<br>$no";
                    $result=mysqli_query($conn,$sql9);
                    if(mysqli_num_rows($result)>0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    $n = $row['name'] ;
                                    $ln = $row['locaname'] ;
                                    $d = $row['district'] ;
                                    $abt=$row['about'];
                                    $typ = $row['type'] ;
                                    $i=$row['placeid'];

                                    echo "<b style='margin-left:35%;font-size:28px'>$n </b>"; 
                            ?>
                                    <br>
                                   <img src=" <?php  echo $row['image'] ;?>"  height ="400px" width=450px alt="" style="margin-left:30%">
                                   <br> <br>

                                      
                                     <u> <b style="margin-left:30%;color:black;font-size:26px">Address</b> </u>
                                      
                                      <br>
                                     <?php 
                                       echo "<b style='margin-left:32%;font-size:22px'>$d </b> <br>"; 
                                       echo "<b style='margin-left:32%;font-size:22px'>$ln </b>"; 
                                     ?>
                                     <br><br>
                                     <u> <b style="margin-left:30%;color:black;font-size:26px">Discription</b> </u> <br><br>
                                   <?php
                                    echo "<b style='margin-left:32%;font-size:22px'><u> TYPE :</u> $typ </b><br><br>"; 
                                     echo "<div style='width:60%;margin-left:32%'> <b style='margin-left:%;font-size:22px'>$abt </b> </div> ";
                                    

                                     
                                   
                                   ?>
                                   
                                 <!--  <b style="margin-left:15%;font-size:22px">  like  /   unlike    This Place</b> -->
 <br> <br>
    <a href='viewphoto.php?io= <?php echo $row['placeid'];?>'  style='color:black ;margin-left:42%;font-size:22px'>Photo</a>
    <a href='comment.php?co= <?php echo $row['name'];?>'  style='color:black ;margin-left:4%;font-size:22px'>Review</a>
   <br><br>
 
    <br><br>
  
                                   <br>
                            


                                   <br>
                                  
                                
                                <?php  
                                }
                            }
                
                  
                
                     

                ?>


                </div>
					 
						 
		
			

  






 <hr>
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					
      </div>
	</form>
						    
</body>
</html>
