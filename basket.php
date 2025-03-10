<?php
$pagename = "Smart Basket"; //Create and populate a variable called $pagename
include "db.php";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title

echo "<body>";

include("headfile.html"); //include header layout file

echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
$newprodid;
$reququantity;


include("footfile.html"); //include head layout
echo "</body>";
