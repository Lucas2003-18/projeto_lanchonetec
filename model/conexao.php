<?php
$servername = "localhost"; // mudar dps
$username = "username"; // mudar dps
$password = "password";

// conecta
$conn = new mysqli($servername, $username, $password);

// se der erro
if ($conn->connect_error) {
  die("erro de conexao: " . $conn->connect_error);
}
echo "conectado com sucesso";
?> 