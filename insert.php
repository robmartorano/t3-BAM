<?php
session_start();
error_reporting(E_ALL);

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';

$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$myemail=$_POST['email'];

try {
    $conn = new PDO("mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO login (username, password, email)
    VALUES ('$myusername', '$mypassword', '$myemail')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>