<link rel="stylesheet" type="text/css" href="style.css">
<h2>Users:</h2>
<?php
error_reporting(0);
ini_set('display_errors', 0);
$db = file_get_contents("users.txt");
$date = getdate(date("U"));
$time = $date[seconds];
$nick = htmlspecialchars($_GET["nick"]);

//echo $time;
// if enough seconds has passed, clear the userlist.
if($time % 5 == 0){
	file_put_contents("users.txt", "");
} elseif (!in_array($nick, explode("<br>", $db))) {
	$db = $db . $nick . "<br>";
	file_put_contents("users.txt", $db);
}
echo($db);
header("Refresh:1");

?>