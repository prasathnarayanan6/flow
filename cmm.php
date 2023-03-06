<?php
 require "conn.php";        

if(isset($_POST['submit'])) {
  $data = $_POST['data'];
  $date = date("Y-m-d_h:i:s");      
  $sql = "INSERT INTO control(id, fix, time) VALUES('1', '$data', '$date')";
  if ($conn->query($sql) === TRUE) {
      echo "STATUS: OK";
  }
}
?>

<form action="" method="post">
  <input type="text" name="data">
  <input type="submit" name="submit">
</form>
