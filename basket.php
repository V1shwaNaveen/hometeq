<?php
session_start();
$pagename = "smart basket"; //Create and populate a variable called $pagename
include "db.php";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title

echo "<body>";

include("headfile.html"); //include header layout file

echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page



if (isset($_POST['h_prodid'])) {
    $newprodid = $_POST['h_prodid'];
    $reququantity = $_POST['p_quantity'];
    echo "Product ID: " . $newprodid . "<br>";
    echo "Quantity Selected: " . $reququantity;
    $_SESSION['basket'][$newprodid] = $reququantity;
    echo "<p>1 item added";
} else {
    echo "Nothing changed!";
}

include("footfile.html"); //include head layout
echo "</body>";
