<?php 
require "conn.php";
header('Content-Type: application/json');
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM flowmeter WHERE id={$id} ORDER BY time DESC";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query);
$sensors = [
    'id' => $row['id'],
    'flow' => $row['flow'],
    'time' => $row['time']
];
echo json_encode($sensors);
}
?>