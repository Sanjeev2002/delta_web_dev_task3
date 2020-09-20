<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
require("db.php");
$username=$_SESSION['username'];
$id = $_GET['id']; 
$result = mysqli_query($link,"SELECT event,header,body,footer FROM $username WHERE id = '$id'");
$row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Invitation</title>
<style>
#header{
background-color:blue;
color:red;
font-size: 20px;
}
body{
background-color: white;
color: solid blue;
font-size:15px;
}
#footer{
background-color:blue;
color:red;
font-size: 20px;
}
</style>
<header>
<backgorund
</head>
<div id=header>
<header><center><h2><?php echo "$row[0]"; ?> Invitation<h2><h2><?php echo "$row[1]";?></h2></center></header></div>
<body><center><p><?php echo "$row[2]";?></p></body></center>
<div id=footer><footer><center><h2><?php echo "$row[3]";?></h2></center></footer></div>
<a href=dashboard.php>Back</a>
</html>