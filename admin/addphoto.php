<?php require "connection.php"?>
 <style>
 input[type=text]
 {
	border-radius:6px;
	height:45px;
	width:60%;
	margin-left:20%;
 }
 input[type=submit]
            {
				width:90px;
				height:40px;
				margin-left:79%;
				border-radius:80px;
				margin-top:20px;
			}	
				input[type=submit]:hover
				{
					background:lightblue;
					color:black;
                }

				body{
                background-color:#0e150c;
				color:#bbcab5;

                }
				a{
                     color:#bbcab5;
				 }

				 input[type=reset]
            {
				width:90px;
				height:40px;
				border-radius:80px;
				margin-top:20px;
			}	
				input[type=reset]:hover
				{
					background:lightblue;
					color:black;
                }





 </style>
<html>
<head>
    <title>insert new place</title>
</head>

<body>

<form method="POST" enctype="multipart/form-data" onsubmit="return  checkforblank() ">

<a href="photocombine.php" style="margin-left:85%">BACK</a>     &nbsp; &nbsp;   <a href="dashboard.php">HOME</a>
 
 <center>   <b style="font-size:22px;color:red;"><u>IMPORTANT</u></b><br><br>
<b  style="font-size:16px"> ( User are advised to fill in the Place Name with the  Name of  the Place available  and also   <u style="font-size:20px;color:red">Check  Carefully the Name of that Place</u>  or else the Photo will  not be Uploaded. ) </b> </center>
<br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Place Name</u></i></strong><br><br>
<input type="text" name="nam" id="nam" placeholder="Enter Place  name"   required ><br><br>
<!--
<strong ><i    style="margin-left:20%;font-size:22px"><u >Address</u></i></strong><br><br>
<input type="text" name="address" id="district" placeholder="Enter address"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Password</u></i></strong><br><br>
<input type="text" name="pass" id="pass" placeholder="Enter password "   required ><br><br>-->

<strong ><i    style="margin-left:20%;font-size:22px"><u > Photo</u></i></strong><br><br>
<input type="file" name="image" id="img"   style="margin-left:20%;font-size:22px">


<input type="submit" name="sub" id="sub" value="INSERT"  >
<input type="reset" name="re" id="re" value="CLEAR"  >

 </form>

</body>


</html>

<script>
function checkforblank()
{
	if(document.getElementById('img').value == "")
	{
       alert("Please choose a photo");
	   return false;
		
	} 

}
</script>
 
<?php 


if(isset($_POST['sub']))
   {
	
	   
	  //Exception("Fail to insert..");
                
        			$n=0;
					$pname=$_POST["nam"];
					
					//$add=$_POST["address"];
					//$pas=$_POST["pass"];				
					//$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
					$file=$_FILES['image'];
					$filename = $file['name'];   //photo name
					//print_r($filename);
					$fileerror= $file['error'];
					//print_r($fileerror);
					$filetemp=$file['tmp_name'];
					$fileext = explode('.',$filename);
					$filecheck = strtolower(end($fileext));
					$fileextstore= array('png' ,'jpg','jpeg');

					$p= "select placeid from place where name = '$pname'";    // select from place DB
					$r = mysqli_query($conn, $p);
					$row = mysqli_num_rows($r);	
				
					/**/

					if($row==1){

					      while($row = mysqli_fetch_array($r))
                               {
									 $n=$row['placeid'];
						
									
									// print_r($n);
									 
								if(in_array($filecheck,$fileextstore)){
										$destina = 'projectimg/'.$filename;
										move_uploaded_file($filetemp,$destina);    //move to folder
		   
										   $sql1="insert into photo values ('$pname',NULL, '$destina','$n'); ";
										   $result = mysqli_query($conn, $sql1);
										   
										   if(!$result)
										   {
										   die(mysql_error());
										   }
										   else
										   {					
										   echo '<script type="text/javascript"> alert ("Sucessfully inserted..") </script>';
										   }
										
									   }
                                
                                    
								 }
								
							}
							 else {
								echo '<script type="text/javascript"> alert ("Failed to Insert Photo..") </script>';
							 }
                                 
							
							 //}
						//$conn->close();
						 	
	}
	

	
?>


