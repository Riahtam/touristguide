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

<form method="POST" enctype="multipart/form-data"  onsubmit="return  checkforblank() ">

<a href="placecombine.php" style="margin-left:85%">BACK</a>     &nbsp; &nbsp;   <a href="dashboard.php">HOME</a>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Place Name</u></i></strong><br><br>
<input type="text" name="nam" id="nam" placeholder="Enter Place Name"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >District</u></i></strong><br><br>
<input type="text" name="district" id="district" placeholder="Enter District"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Locality</u></i></strong><br><br>
<input type="text" name="loca" id="loca" placeholder="Enter Locality "   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Type</u></i></strong><br><br>
<select name="type" id="type" style="margin-left:20%;width:60%;height:40px;">
<option value="">  SELECT --</option>
<option value="park"> Park</option>
<option value="falls">Falls</option>
<option value="Trek">Trek</option>
<option value="lakes">Lakes</option>
<option value="cave">Cave</option>
</select>
<br><br>
<strong ><i    style="margin-left:20%;font-size:22px"><u > Photo</u></i></strong><br><br>
<input type="file" name="image" id="img"   style="margin-left:20%;font-size:22px"><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >About</u></i></strong><br><br>
<div style="width:60% ;margin-left:20%">
<textarea name="content"  ></textarea>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>
</div>

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
					$pname=$_POST["nam"];
					$dist=$_POST["district"];
					$local=$_POST["loca"];
					$type=$_POST["type"];
					$about=$_POST["content"];
					$file=$_FILES['image'];
					//$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
					//print_r($file);
					
					  $filename = $file['name'];   //photo name
					  print_r($filename);
					  $fileerror= $file['error'];
					  print_r($fileerror);
					  $filetemp=$file['tmp_name'];

					  $fileext = explode('.',$filename);
					  $filecheck = strtolower(end($fileext));

					  $fileextstore= array('png' ,'jpg','jpeg');
					 
					  $sql1="select   *  from  place  where name='$pname' ";
					  $result = mysqli_query($conn, $sql1);
					  $row = mysqli_num_rows($result);	
					  if($row==1){
						  echo '<script type="text/javascript"> alert ("place already exist..") </script>';
							  }
						  else {
						
						     if(in_array($filecheck,$fileextstore)){
							 $destina = 'projectimg/'.$filename;
							 move_uploaded_file($filetemp,$destina);    //move to folder

								$sql1="insert into place values ('$pname',NULL,'$about','$dist','$local','','','$type','$destina'); ";
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
							 $conn->close();
	       	
    }
?>


