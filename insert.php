<?php 
require "conn.php";
$date = date("Y-m-d_h:i:s");
$id = $_GET['id'];
$flow = $_GET['flow'];
$sql = "INSERT INTO flowmeter(id, flow, time) VALUES('$id', '$flow', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "STATUS: OK";
}
else{
    echo "<h6>STATUS: failed</h6>";
}
?>