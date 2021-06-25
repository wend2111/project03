<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
body{
	width: 330px;
	height: 181px;
	border: 1px solid #333333;
}
h3 {
	margin-top: 0px;
	background-color: #297cb3;
	color: #ffffff;
	width: 330px;
	height: 40px;
	text-align: center;
	line-height: 40px;
}
li{
	color: #333333;
	padding-left: 59px;
	padding-bottom: 5px;
}
b{
	color: #ff0000;
}
#close{
	margin: 20px 0 0 100px;
	cursor: pointer;
}
</style>
</head>	
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
	include "define.php";

	$id = $_GET["id"];

	if(!$id)
	{
		echo("<li>아이디를 입력해 주세요!</li>");
	}
	else
	{
		$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

		$sql = "select * from members where id='$id'";
		$result = mysqli_query($con, $sql);

		$num_record = mysqli_num_rows($result);

		if($num_record)
		{
			echo "<li><b>[".$id."] 아이디는 중복됩니다</b>.</li>";
			echo "<li>다른 아이디를 사용해 주세요!</li>";
		}
		else
		{
			echo "<li>[".$id."]은/는 사용 가능한 아이디 입니다.</li>";
		}

		mysqli_close($con);
	}
?>
</p>
<div id="close">
	<img src="images/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>