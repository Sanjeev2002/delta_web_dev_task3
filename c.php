<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
require("db.php");
$username=$_SESSION['username'];
 $event= $_POST['event'];
 $date = $_POST['date']; 
 $header=$_POST['header'];
 $body=$_POST['body'];
 $footer=$_POST['footer'];
 $query  = "INSERT INTO $username (event, date, header, body, footer)
                     VALUES ('$event', '$date', '$header','$body','$footer')";
       $result   = mysqli_query($link, $query);
       

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
</head>
</header>
<div id=header>
<center><h1><?php echo "$event"; ?> Invitation</h1></center>
<center><h1><?php echo $header;?></h1></center>
</header></div>
<body>
<br><center><p><?php echo $body;?></p></center>
</body>
<div id=footer><footer>
<h1><center><?php echo $footer;?></h1></center>
</footer></div>
<div id=back>
<a href=dashboard.php>Back</a>
</html>
