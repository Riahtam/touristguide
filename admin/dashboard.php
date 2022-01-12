  
 <?php require "connection.php";
 session_start();
 
 ?>
<style>		ul{
                margin:0px;
                padding:0px;
                list-style:none;
                font-size:15px;
			  }
			a{
                  color:#bbcab5;

                  }
				

                ul li a{
                            padding:18px;
                            border-bottom :1px solid black;                
                            display:block;
					   }
			body{
                background-color:#0e150c;

                }
                .head{
                     background:#4cb320;
                     height:60px;

                   }
                   .left{
                     
                    width:20%;
                    height:100%;
                    background:#00800b;

                   }
			.main{
                height:87%;
                display:flex;
            
           }
           .left{
             flex:1;
           }
           .right{ 
             flex:4;
             color:white;
           }
					

                
                </style>
<html>
<head><title>index</title>

<div class="head">
<CENTER><h1 style="color:white">TOURIST GUIDE SITE</h1></CENTER>
</div>

</head>
<body> 
<div class="main">

<div class="left">
						 
                         <ul>
                                        <li> <a href="usercombine.php">MANAGE USER</a> </li>
                                        <li> <a href="mallcombine.php">MANAGE MALL</a> </li>
                                        <li> <a href="emergencycombine.php">MANAGE EMERGENCY</a> </li>
                                        <li> <a href="guesshousecombine.php">MANAGE GUESS HOUSE</a> </li>
                                        <li > <a href="placecombine.php">MANAGE PLACE</a>    </li>
                                        <li>  <a href="festivalcombine.php">MANAGE FESTIVALS</a>  </li>
                                        <li>   <a href="restaurantcombine.php">MANAGE RESTAURANT</a> </li>
                                        <li>  <a href="photocombine.php">MANAGE PHOTO</a>   </li>
                                        <li>  <a href="viewfeedback.php">MANAGE FEEDBACK</a>   </li>
                                        <li> <a href="managecomment.php">MANAGE COMMENT</a> </li>
                        
                      </ul>
                                      
 </div>
 <div class="right">
 <center>
 <h3> <u>New User Feedback</u></h3>
<table border='1'width=60% style="color:white">
<tr>

<th>Id</th>    <th> UserName</th>    <th>Feedback</th> 
     <!--<td>Photo</td>   <td>Name</td>   <td>Address</td> <td>email</td>  <td>Password</td>  <td>Id</td>-->
</tr>


</form>
 <?php
 $sql9="select * from feed ORDER by id DESC  limit 4  ";
 //echo"<br>$no";
$result=mysqli_query($conn,$sql9);
if(mysqli_num_rows($result)>0)
{
      while($row = mysqli_fetch_assoc($result))
      {
              echo "<tr>";?>
               
                <?php
                echo " <td>".$row["id"]."</td>";
               
                echo "<td>".$row["uname"]."</td>";
                  echo "<td>".$row["feedb"]."</td>";
                ?>
               
               <?php  echo "</tr>";
      }
   echo "</table>"; 	  
}
echo"</center>";
?>
<br><br><br>
<hr>
 <!-- #################################################   COMMENT ##########################################-->
<br><br>
  <center>
  <h3><u> New Comment</u></h3>
 <table border='1'width=60% style="color:white">
 <tr>
 
 <th>User Name</th>   <th>Place</th>   <th> Comment</th>  
      <!--<td>Photo</td>   <td>Name</td>   <td>Address</td> <td>email</td>  <td>Password</td>  <td>Id</td>-->
 </tr>
 
 
 </form>
  <?php
  $sql9="select * from comlike ORDER by id DESC  limit 4 ";
  //echo"<br>$no";
 $result9=mysqli_query($conn,$sql9);
 if(mysqli_num_rows($result9)>0)
 {
       while($row = mysqli_fetch_assoc($result9))
       {
               echo "<tr>";?>
                
                 <?php
                 echo " <td>".$row["uname"]."</td>";
                 echo "<td>".$row["pname"]."</td>";
                 echo "<td>".$row["com"]."</td>";
                 ?>
                
                <?php  echo "</tr>";
       }
    echo "</table>"; 	  
 }
 echo"</center>";


?>
 
 </div>

 </div>

</body>
</html>
