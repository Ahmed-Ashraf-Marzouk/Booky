<?php
$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'booky-database';


// login 
$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
    echo "<script>alert('Connection to database failed')</script>";
}
