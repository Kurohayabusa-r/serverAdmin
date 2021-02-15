<?php

$conn = new mysqli('172.20.0.2','root','test123','Trucorp');

$result = $conn->query("SELECT * FROM users");

$count = 0;

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $count = $count + 1;
  }
  echo "Jumlah user: ".$count;
}else{
  echo "Jumlah user: ".$count;
}

$conn->close();

?>
