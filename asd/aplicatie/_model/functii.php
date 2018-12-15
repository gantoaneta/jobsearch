<?php

require_once '_controller/connection.php';
$conn = connection();
$sql = "SELECT * FROM domeniu";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
//var_dump($sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<div value='" . htmlentities($row['domeniu']) . "'class='item'>" . $row['domeniu'] . "</div>";
}