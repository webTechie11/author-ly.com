<?php
$dbServerName="DB_ServerName"; 
#Generally localhost when the DB server is running on same machine
$dbUsername="Username";
#Username for database user
$dbPassword="yourDatabasePassword";
#password of database user
$dbName="DatabaseName";
#database name
$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);
#connection_variable to connect to database so that we do not need to enter credentials for connection every time