<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
include("settings.php");
$date = getdate(date("U"));
$time = date("Y/m/d g:i:s");
$nick = $_GET["nick"];
$nick = htmlspecialchars($nick);
$admin = $_GET["admin"];

if($admin == $pass){
	$badge = "<span id='admin'>@</span>";
}

if(isset($_POST["chatbox"])){
$message = $_POST["chatbox"];
if (substr($message, 0,3) == "/raw"){
	$raw = substr($message, 3);
	$message = "";
}
$message = htmlspecialchars($message);

$db = file_get_contents("db.txt");

$db = $db . $badge . "<span id='time'>$time </span><span id='nick'>$nick: </span>" . $message . "\n";
file_put_contents("db.txt", $db);
file_put_contents("chats.html", $db);
}
$db_array = explode("\n", $db);

if(sizeof($db_array) > 40){
unset($db_array[0]);
file_put_contents("db.txt", implode("\n", $db_array));
}

?>
</head>
<meta http-equiv="Page-Enter" content="blendTrans(Duration=1.0)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1.0)">
<iframe id = "chat" src="display.php" scrolling="yes"></iframe>
<iframe id = "users" src="userlist.php?nick=<?php echo $nick?>" scrolling="yes"></iframe>

<form method = "post" action="" >
<input type="text" name="chatbox" autocomplete="off" maxlength="150" autofocus>
</form>
</html>