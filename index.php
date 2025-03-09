<?php
include "db.php";
$pagename = "Make your home smart";
echo "<link rel=stylesheet type = text/css href = mystylesheet.css>";
echo "<title>" . $pagename . "</title>";
echo "<body>";
include "headfile.html";
echo "<h4>" . $pagename . "</h4>";
$sql = "select prodId, prodName ,prodPicNameSmall, prodDescripShort, prodPrice from product ";

$execsql = mysqli_query($conn, $sql) or die("Could't connect: " . mysqli_error($conn));

echo "<table style='border: 0px'>";
while ($arrayp = mysqli_fetch_array($execsql)) {
    echo "<tr>";
    echo "<td style='border: 0px'>";
    echo "<a href=prodbuy.php?u_prod_id=" . $arrayp['prodId'] . ">";
    echo "<image src=images/" . $arrayp['prodPicNameSmall'] . " height = 200 width = 200>";
    echo "</a>";
    echo "</td>";
    echo "<td style= 'border: 0px '> ";
    echo "<p><h5>" . $arrayp['prodName'] . "</h5>";
    echo "<p>" . $arrayp['prodDescripShort'] . "</p>";
    echo "</td>";
    echo "</tr>";
};
echo "</table>";
include "footfile.html";
echo "</body>";
