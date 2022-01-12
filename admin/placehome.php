<?php
   require "connection.php";
  session_start();
  if(isset($_GET['page']))
  {
     $page=$_GET['page'];
  }
  else{
	$page=1;
	 }
	 $num_per_page = 02;
	 $start_from=($page-1)*02;
	 /*
	
	echo "<b style='color:black'>$start_from </b>";
	$query="select * from place limit $start_from,$num_per_page";
	$result=mysqli_query($conn,$result);*/




  
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
					      
						color:black;
						display:flex;
		                 }	 
	
							.com div{
						

								}
								.one{
										flex:1;

								  }
								  .two{
 										flex:1;
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

    <div class="fheader">

	
        <div class="top">
		   <b  style="margin-left:60px;">HOME</b> &nbsp; &nbsp; <img src="photo/home.png" height= "20px"> 

		       <b style="margin-left:50%;font-size:20px;">Toll number : 123-456789    &nbsp;      <a href="setting1.php" style="margin-left:17.5%;display;color:black;font-size:30px;text-decoration:none;"> : </a>  </b>
			
		</div>
		   <div class="top2"style="height:55px;background:white;  margin-top:10px;" >
		       <img src="photo/logo.jpg" height= "50px" width="250px" style=" margin-left:20px;">
                   <b style= "margin-left:0px; font-size:25px; margin-top:0px;" >  <img src="photo/lock1.png" height= "20px" style=" margin-left:65%;">   Safe & Secure </b>  
               </div>
                   <?php
                   
                    ?>
                   
                   <div class="menubar">
						 
							<ul>
							<li>  <a href="home.php">HOME</a></li>
										<li> <a href="home.php">SPOTS</a>  </li> <!-- <ul>
												<li>   <a href="placehome.php"> SPOT</a></li>
												<li>  <a href="guess.php">GUESS HOUSE</a></li>
												<li>  <a href="mall.php">MALL/MARKET</a></li>
												<li>   <a href="rest.php">RESTAURANT</a></li>
										
										
										   </ul>
										 </li>
							<li>  <a href="#">EMERGENCY</a>
							<ul>
												<li>   <a href="#"> HOSPITAL</a></li>
												<li>  <a href="#">POLICE</a></li>
										
										
										   </ul>
							
							
							</li>
							<li>   <a href="about.php">ABOUT</a></li>
							<li>  <a href="#">FESTIVALS</a></li>-->
							<form method="POST"  enctype="multipart/form-data" action="abtplace.php">
							&nbsp; <input type="text " name="s" style="width:230px;height:30px;margin-top:15px;margin-left:50%; border:none; outline:none;border-bottom: 1px solid black;">
                             <input type="button" name="p" style="width:70px;border-radius:20px;height:30px;" value="search" >
							 </form>

						 </ul>
						
						 </div>
					
					
						
						 <div class="com">	 
						 
		
				 <?php    
  

  



  if(isset($_POST['p']))
  {
 echo"hi";	
 }
  else
  		{
			?>
			
				
				<div class="one" style="" >
				<?php 
				

		$sql9="select * from place limit $start_from,$num_per_page";
		//echo"<br>$no";
		$result=mysqli_query($conn,$sql9);
		if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_array($result))
					{
						$n = $row['name'] ;
						echo " <div style='width:60%;'> <b style='margin-left:30%;font-size:28px'>$n </b> </div>"; 
				?>
						<br>
					   <img src=" <?php  echo $row['image'] ;?>"  height ="200px" width=220px alt="" style="margin-left:45%">
					   <br>
					  
					
					<?php  
					}
				}
 
	  
		?>
		 </div>	
			
				
				<div class="two" style="background-color:white " > 
				<?php
				$sql9="select * from place  limit $start_from,$num_per_page";
				//echo"<br>$no";
				$result=mysqli_query($conn,$sql9);
				if(mysqli_num_rows($result)>0)
						{
							while($row = mysqli_fetch_array($result))
							{
								$n = $row['locaname'] ;
								$o=$row['district'];
								//$i=$row['placeid'];
								//$v=$i;
								echo "    <br> <br> <br> <br> <br>  <br> <br> <br><b style='font-size:28px;margin-bottom:100px'>$n </b>"; 
								echo"<br> <br> <b style='font-size:28px;margin-bottom:100px'>$o </b>" ;?>
							      <a href='abtplace.php?iv= <?php echo $row['placeid'];?>'  style='color:black'>MORE</a>  
							 
								

				
						
						<br>
				
							<?php  
							}
						}
				       
						//echo "<b style='font-size:28px'>$n </b>";
						 
						?>
			</div>
	
		
   </div>
   <br>
 <?php 
 echo"<center>";

  $pr_query="select * from place";
  $pr_result=mysqli_query($conn,$pr_query);
  $total= mysqli_num_rows($pr_result);
 // echo "<b style='color:black'>$total </b>";
 $total_page=ceil($total/$num_per_page);
 //echo "<b style='color:black'>$total_page </b>";

 if($page>1)
 {
	
	echo "<a href='placehome.php?page=" .($page-1) . " ' style='font-size:22px'> Previous </a> ";

 }

for($i=1;$i<$total_page;$i++)
{

	echo  "<a href='placehome.php?page=" . $i . " ' style='font-size:22px'> $i </a>";


}
if($i>$page)
{
   echo " <a href='placehome.php?page=" .($page+1) . " ' style='font-size:22px'> Next </a> ";

}
 
}
 
 
 ?>
   
</center>


 <hr>
<div class="buttom">
		<?php require "footer.php"; 
		?>
</div>
					
      </div>
	
						    
</body>
</html>
