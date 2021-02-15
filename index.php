<?php

$conn = new mysqli('172.20.0.2','root','test123','Trucorp');

$result = $conn->query("SELECT * FROM users");

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "ID: ".$row['ID']."\n";
    echo "Nama: ".$row['Nama']."\n";
    echo "Kantor: ".$row['Kantor']."\n";
    echo "\n";
  }
}else{
  echo "Not found";
}

$conn->close();

?>
