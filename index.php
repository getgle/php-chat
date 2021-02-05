<html>
<style>
body{
	margin:0px; /* rip dooms */
	padding:0px;
	background-color:#111;
	color:#999;
	text-align:center;
}
iframe{
	height:92%;
	width:100%;
	border:0px;
}
#nickbox{
	padding-top:30px;
	padding:10px;
	width:20%;
	background-color:#222;
	border:0px;
	color:#999;
}
textarea:focus, input:focus{
	border:0px;
    outline: none;
}
#nick{
	float:right;
	color:#f00;
}
</style>
<head>

<?php
include("settings.php");

//if(isset($_POST["nickbox"])){
//header("Location: $_POST['nickbox']");
//}
?>
</head>
<meta http-equiv="Page-Enter" content="blendTrans(Duration=1.0)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1.0)">
<form method = "get" action="chat.php">
<input placeholder="put ur nick here pls" type="text" name="nick" autocomplete="off" autofocus id="nickbox">
</form>
</html>