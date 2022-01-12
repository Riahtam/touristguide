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

<form method="POST"  enctype="multipart/form-data" action="newfestival.php"  onsubmit="return  checkforblank()">

<a href="festivalcombine.php" style="margin-left:85%">BACK</a>     &nbsp; &nbsp;   <a href="dashboard.php">HOME</a>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Festival Name</u></i></strong><br><br>
<input type="text" name="nam" id="nam" placeholder="Enter Festival Name"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >District</u></i></strong><br><br>
<select name="district" id="" style="margin-left:20%;width:60%;height:40px;">
						<option value="">  SELECT --</option>
						<option value="East Khasi Hills">EAST KHASI HILLS</option>
						<option value="West Khasi Hills ">WEST KHASI HILLS</option>
						<option value="Ribhoi">RIBHOI</option>
						<option value="South West Khasi Hills">SOUTH WEST KHASI HILLS</option>
						<option value="East Jaintia Hills"> EAST JAINTIA HILLS</option>
						<option value="West Jaintia Hills"> WEST JAINTIA HILLS</option>
						</select> <br><br>


<strong ><i    style="margin-left:20%;font-size:22px"><u >Locality</u></i></strong><br><br>
<input type="text" name="loca" id="" placeholder="Enter Locality "   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Month</u></i></strong><br><br>
						<select name="mon" id="type" style="margin-left:20%;width:60%;height:40px;">
						<option value="">  SELECT --</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April"> April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July ">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November"> November</option>
						<option value="December"> December</option>
						</select>
						</select>
 <br><br>

 <strong ><i    style="margin-left:20%;font-size:22px"><u > Photo</u></i></strong><br><br>
<input type="file" name="image" id="img"   style="margin-left:20%;font-size:22px">
<br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u > Belong to</u></i></strong><br><br>
						<select name="belong" id="type" style="margin-left:20%;width:60%;height:40px;">
						<option value="">  SELECT --</option>
						<option value="Khasi">Khasi</option>
						<option value="Jaintia">Jaintia</option>
						<option value="Garo">Garo</option>
						</select>
						<br><br>
<strong ><i    style="margin-left:20%;font-size:22px"><u >About</u></i></strong><br><br>
<div style="width:60% ;margin-left:20%">
<textarea name="content">  </textarea>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>
</div>
  
	<br>
	<br>


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
					$about=$_POST["content"];
					$mon=$_POST['mon'];
					$belong=$_POST['belong'];
					$file=$_FILES['image'];

					$filename = $file['name'];   //photo name
					//print_r($filename);
					$fileerror= $file['error'];
					//print_r($fileerror);
					$filetemp=$file['tmp_name'];
					$fileext = explode('.',$filename);
					$filecheck = strtolower(end($fileext));
					$fileextstore= array('png' ,'jpg','jpeg');



					$sql1="select   *  from  festivals  where name='$pname' ";
					$result = mysqli_query($conn, $sql1);
					$row = mysqli_num_rows($result);	
					if($row==1){
						echo '<script type="text/javascript"> alert (" Data already exist..") </script>';
							}
						else
							{
								if(in_array($filecheck,$fileextstore))
								{
									$destina='projectimg/'.$filename;
									move_uploaded_file($filetemp,$destina);

								$sql1="insert into festivals values (NULL, '$about','$pname','$local','$dist','$mon','$destina','$belong'); ";
								$result = mysqli_query($conn, $sql1);
								
								if(!$result)
								die(mysql_error());
								else
								echo '<script type="text/javascript"> alert ("Sucessfully inserted..") </script>';
							 }
							}
						$conn->close();
	       	
    }
?>


