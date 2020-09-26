<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require("db.php");
$username=$_SESSION['username'];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $val = mysqli_query($link,'select 1 from `$username`');
if($val!==false){
// Attempt create table query execution
$sql = "CREATE TABLE $username (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    event VARCHAR(30) NOT NULL,
    date VARCHAR(30) NOT NULL,
    header VARCHAR(300) NOT NULL,
    body VARCHAR(300) NOT NULL,
    footer VARCHAR(300) NOT NULL)";
    if(mysqli_query($link, $sql)){
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <center><h2>Create Invitation:</h2>

        <form action=c.php method="post">
        <label for=event>Event Name:</label>
        <input type=text name=event required>
        <br><label for=date>Date of Event:</label>
        <input type=date name=date required>
        <br><label for=header>Header:</label>
        <input type=text name=header required>
        <br><label for=body>Body:</label>
        <textarea name=body cols="50" rows="10"></textarea>
        <br><label for=date>Footer:</label>
        <input type=text name=footer required>
        <br><button name=submit>Submit</button>
        </form></center>
        </div>
    
</body>
</html>
<?php
require("db.php");
$username=$_SESSION['username'];
$result = mysqli_query($link,"SELECT * FROM $username");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
 </head>
<body>
<h2>Past Invitations:</h2>
<?php
if (mysqli_num_rows($result) >= 0) {
?>
  <table>
  
  <tr>
    <td>S.No</td>
    <td>Event</td>
    <td>Date</td>
    <td>view</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["event"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><a href="into.php?id=<?php echo $row['id']; ?>">view</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
<center><div class=logout><p><a href="logout.php">Logout</a></p></div></center>
</html>
