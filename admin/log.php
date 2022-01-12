<?php
	session_start();
	session_destroy();
	
	echo "  <br> <br> <br> <center><font color='red'>Logging you out.....</font></center>";
	header('Refresh: 2; URL = index.php');
?>
<html>

<body bgcolor="pink" text="black">
</body>
</html>