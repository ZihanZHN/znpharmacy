<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', 'localhost');  //main
//define('DB_USERNAME', 'root');     //main
//define('DB_PASSWORD', '');       //main
//define('DB_NAME', 'demo');       //main

$host = "localhost";    //my try
$username = "root";     //my try
$password = "";          //my try
$database = "pharmacy_demo";      //my try

 
/* Attempt to connect to MySQL database */
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); //main
 
 $link = mysqli_connect($host,$username, $password, $database);     //my try
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>