<?php
include "config-db.php";

$sql = "SELECT id, nom, descripcio, preu FROM productes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - nom: " . $row["nom"]. " - descripcio: " . $row["descripcio"]. " - preu: " . $row["preu"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>