<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST" action="">
<div>
    <textarea name="content" ></textarea>
     <br>
      <input type="submit" name="sub" value="submit">
</div>
</form>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>

</body>
</html> 
<?php 

 if(isset($_POST['sub']))
 {

   // echo "evgrewr";
  $text=$_POST['content'];
 echo $text;



 }



?>