<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
    <div class="form">
        <p>Hey, admin!</p>
        <center><h2>Send Invitation:</h2>
       <form method="post">
       Admin Password:<input type=text name=pass placeholder="password"required>
       <br><label for=username>User Name:</label>
        <input type=username name=username required>
        <br><label for=event>Event Name:</label>
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
<a href=login.php>Login page</a></br>
    
</body>
</html>
<?php
if($_POST['pass']===null)
{
echo "No password has been entered ignore the error and enter the correct password and details";
}
else{
if($_POST['pass']==="admin")
{
require('db.php');
       if (isset($_REQUEST['username'])) {
$username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($link, $username);
       $query    = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($link, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
        $event= $_POST['event'];
       $date = $_POST['date']; 
      $header=$_POST['header'];
       $body=$_POST['body'];
        $footer=$_POST['footer'];
     $query  = "INSERT INTO $username (event, date, header, body, footer)
                     VALUES ('$event', '$date', '$header','$body','$footer')";
       $result   = mysqli_query($link, $query);
       echo "Invitation Sent!";
        } 
else {
            echo "<div class='form'>
                  <h3>Incorrect Username</h3><br/>
                  </div>";
        }
}
}
else{
echo "Wrong Admin Password";
}
}
?>