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

<form method="POST" enctype="multipart/form-data">

<a href="usercombine.php" style="margin-left:85%">BACK</a>     &nbsp; &nbsp;   <a href="dashboard.php">HOME</a>
<strong ><i    style="margin-left:20%;font-size:22px"><u >User Name</u></i></strong><br><br>
<input type="text" name="nam" id="nam" placeholder="Enter  UserName"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Address</u></i></strong><br><br>
<input type="text" name="address" id="district" placeholder="Enter Address"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Email</u></i></strong><br><br>
<input type="text" name="eml" id="eml" placeholder="Enter Email "   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Password</u></i></strong><br><br>
<input type="text" name="pass" id="pass" placeholder="Enter Password "   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u > Photo</u></i></strong><br><br>
<input type="file" name="image" id="image"    style="margin-left:20%;font-size:22px">


<input type="submit" name="sub" id="sub" value="INSERT"  >
<input type="reset" name="re" id="re" value="CLEAR"  >

 </form>

</body>

</html>
 
<?php 

if(isset($_POST['sub']))
   {
				
	                $pname=$_POST["nam"];
					$add=$_POST["address"];
					$pas=$_POST["pass"];
					$em=$_POST["eml"];
					//$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
					$file=$_FILES['image'];
					//print_r($file);
					
					//// image validation 

					$filename = $file['name'];   //photo name
					  //print_r($filename);
					  $fileerror= $file['error'];
					 // print_r($fileerror);
					  $filetemp=$file['tmp_name'];

					  $fileext = explode('.',$filename);
					  $filecheck = strtolower(end($fileext));

					  $fileextstore= array('png' ,'jpg','jpeg');

					    if(in_array($filecheck,$fileextstore)){
							$destina = 'projectimg/'.$filename;
							move_uploaded_file($filetemp,$destina);
										//insert start

							$sql1="select   *  from  user where name='$pname'  AND email='$em'";
							$result = mysqli_query($conn, $sql1);
							$row = mysqli_num_rows($result);
							
							if($row==1){
								echo '<script type="text/javascript"> alert (" Data already exist..") </script>';
									}
								else
									{
										$sql3="insert into user values ( '$destina','$pname','$pas', '$add',NULL ,'$em'); ";
										$res = mysqli_query($conn, $sql3);
										
										if(!$res)
										//(mysql_error());
										echo '<script type="text/javascript"> alert ("Fail to insert..") </script>';
										else
										echo '<script type="text/javascript"> alert ("Sucessfully inserted..") </script>';
									 }
						}


						//$conn->close();
	       	
    }
?>


