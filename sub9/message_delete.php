<meta charset='utf-8'>

<?php
	include "../define.php";

	$num = $_GET["num"];	
	$mode = $_GET["mode"];	

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "delete from message where num=$num";
	$result = mysqli_query($con, $sql);

	mysqli_close($con); 

	if($mode == "send")
		$url = "message_box.php?mode=send";
	else	
		$url = "message_box.php?mode=rv";

	echo "
		<script>
			location.href = '$url';
		</script>
	";
?>