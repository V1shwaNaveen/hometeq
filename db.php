<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'hometeq';
$port = '3307';

$conn = mysqli_connect($hostname, $username, $password, $database, $port);

if (!$conn) {
    die("Error connecting to the database " . mysqli_connect_error($$conn));
};
