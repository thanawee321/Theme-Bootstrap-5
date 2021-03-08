<?php 
$host_DB  = "";// host name ex:localhost
$userame_DB = "";// username DB ex:root
$password_DB = "";// password DB ex:123456789
$database_DB = "";// databasename DB ex:test_db

//connect to database
$connect = mysqli_connect($host_DB,$userame_DB,$password_DB,$database_DB) or die(mysqli_error($connect));


?>