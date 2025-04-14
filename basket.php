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
    $_SESSION['basket'][$newprodid] = $reququantity;
}
$total = 0;
echo "<p><table id='baskettable'>";
echo "<tr>";
echo "<th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th>";
echo "</tr>";
if (isset($_SESSION['basket'])) {
    foreach ($_SESSION['basket'] as $index => $value) {
        $sql = "select prodName,prodPrice,prodQuantity from product where prodId=" . $index . "";
        $execsql = mysqli_query($conn, $sql) or die("Could't connect: " . mysqli_error($conn));
        $arrayp = mysqli_fetch_array($execsql);
        $subtotal = $value * $arrayp['prodPrice'];
        echo "<tr>";
        echo "<td>" . $arrayp['prodName'] . "</td>";
        echo "<td>" . $arrayp['prodPrice'] . "</td>";
        echo "<td>" . $value . "</td>";
        echo "<td>" . $subtotal . "</td>";
        $total = $total + $subtotal;
        echo "</tr>";
    }
} else {
    echo "Nothing changed!";
}

echo "<tr>";
echo "<td colspan=3>TOTAL</td>";
echo "<td>&pound" . number_format($total, 2) . "</td>";
echo "</tr>";


echo "</body>";
