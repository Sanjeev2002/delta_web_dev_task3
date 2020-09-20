# delta_web_dev_task3
first change the username and password of MY SQL database Server to that of your server in db.php  
before starting enter "CREATE DATABASE delta1;" in your sql server to create a database delta1
"CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);"-------Then enter this in your database sql page to create a table users in delta1 database to store user login values
then finally use login.php or register.php to enter into the website
You can even change the name of database but remember to edit it in db.php
and finally admin password=admin
