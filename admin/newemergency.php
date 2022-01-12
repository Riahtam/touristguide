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
    <title>insert new Emergency</title>
</head>

<body>

<form method="POST">

<a href="emergencycombine.php" style="margin-left:85%">BACK</a>     &nbsp; &nbsp;   <a href="dashboard.php">HOME</a>
<br>
<br>
<br>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Center  Name</u></i></strong><br><br>
<input type="text" name="nam" id="nam" placeholder="Enter Center name"   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >District</u></i></strong><br><br>

						<select name="dist" id="type" style="margin-left:20%;width:60%;height:40px;">
						<option value="">  SELECT --</option>
						<option value="East Khasi Hills">EAST KHASI HILLS</option>
						<option value="West Khasi Hills ">WEST KHASI HILLS</option>
						<option value="Ribhoi">RIBHOI</option>
						<option value="South West Khasi Hills">SOUTH WEST KHASI HILLS</option>
						<option value="East Jaintia Hills"> EAST JAINTIA HILLS</option>
						<option value="West Jaintia Hills"> WEST JAINTIA HILLS</option>
						</select><br> <br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Locality</u></i></strong><br><br>
<input type="text" name="loca" id="loca" placeholder="Enter Locality "   required ><br><br>

<strong ><i    style="margin-left:20%;font-size:22px"><u >Type</u></i></strong><br><br>
<select name="type" id="type" style="margin-left:20%;width:60%;height:40px">
<option value="">  SELECT --</option>
<option value="police"> Police</option>
<option value="Hospital">Hospital</option>

</select>

<br><br>
<strong ><i    style="margin-left:20%;font-size:22px"><u >Contact</u></i></strong><br><br>
<div style="width:60% ;margin-left:20%">
<textarea name="content"  >  </textarea>
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
 
<?php 

if(isset($_POST['sub']))
   {
					$pname=$_POST["nam"];
					$dist=$_POST["dist"];
					$local=$_POST["loca"];
					$type=$_POST["type"];
					$cont=$_POST["content"];
					

					$sql1="select   *  from  emergency  where name='$pname' ";
					$result = mysqli_query($conn, $sql1);
					$row = mysqli_num_rows($result);	
					if($row==1){
						echo '<script type="text/javascript"> alert ("place already exist..") </script>';
							}
						else
							{
								$sql51="insert into emergency values (null,'$pname','$type','$dist','$local','$cont');";
								$result = mysqli_query($conn, $sql51);
								
								if(!$result)
								die(mysql_error());
								else
								echo '<script type="text/javascript"> alert ("Sucessfully inserted..") </script>';
							 }
							 $conn->close();
	       	
    }
?>


