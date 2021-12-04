<?php
$servername = "lanchotec"; // mudar dps
$username = "root"; // mudar dps
$password = "Ana121207";

// conecta
$conn = new mysqli($servername, $username, $password);

// se der erro
if ($conn->connect_error) {
  die("erro de conexao: " . $conn->connect_error);
}
echo "conectado com sucesso";





abstract class Db{
  // abstract public function save();
  // abstract public function remove($id);
  // abstract public function find($id);
}
?> 