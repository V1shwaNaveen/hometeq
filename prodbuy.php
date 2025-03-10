<?php
include("db.php");
$pagename = "a smart buy for a smart home"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title

echo "<body>";

include("headfile.html"); //include header layout file

echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
$prodId = $_GET['u_prod_id'];

echo "<p>Product Id is: " . $prodId . "</p>";

$sql = "select prodId, prodName ,prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity from product WHERE prodId =" . $prodId . "";
$execsql = mysqli_query($conn, $sql) or die("Could't connect: " . mysqli_error($conn));



echo "<table style='border: 0px'>";
while ($arrayp = mysqli_fetch_array($execsql)) {
    echo "<tr>";
    echo "<td style='border: 0px'>";
    echo "<image src=images/" . $arrayp['prodPicNameLarge'] . " height = 400 width = 400>";
    echo "</td>";
    echo "<td style= 'border: 0px '> ";
    echo "<p><h5>" . $arrayp['prodName'] . "</h5>";
    echo "<p>" . $arrayp['prodDescripLong'] . "</p>";
    echo "<br>";
    echo "<b> $" . $arrayp['prodPrice'] . "</b>";
    echo "<p><br></p>";
    echo "<p> Left in Stock " . $arrayp['prodQuantity'] . "</p>";
    echo "<p>Number to be purchased: ";
    echo "<form action=basket.php method=post>";

    echo "<select name= p_quantity>";
    for ($i = 1; $i <= $arrayp['prodQuantity']; $i++) {
        echo "<option value = '$i'> $i</option>";
    };
    echo "</select>";

    echo "<input type=submit name='submitbtn' value='ADD TO BASKET' id='submitbtn'>";
    echo "<input type=hidden name=h_prodid value=" . $prodId . ">";
    echo "</form>";

    echo "</p>";
    echo "</td>";
    echo "</tr>";
};
echo "</table>";

include("footfile.html"); //include head layout
echo "</body>";
