<meta http-equiv="Page-Enter" content="blendTrans(Duration=1.0)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1.0)">
<style>
body{
	background-color:#111;
	color:#999;
}
#nick{
	color:#f00;
	margin:0px;
}

#big{
	font-size:50px;
}
#admin{
	color:#0f0;
}
#messages{
	
}
</style>
<?php
$db = file_get_contents("db.txt");

//$db = str_replace("<", "gt;", $db);
$db = str_replace("\n", "<br/></span>", $db);

echo "<span id='messages'>" . $db . "</span>";

?>
<?php
//sleep(0.3);
header("Refresh:2.6");
?>

