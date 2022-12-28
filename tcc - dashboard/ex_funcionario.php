<?php
$cpf = $_GET['cpf'];

require("conectbdtcc.php");

$query = "DELETE FROM cadfuncionario WHERE cpf = $cpf";
mysqli_query($link, $query);

echo "<script> alert('Pessoa excluida com sucesso!!!') </script>
       <meta http-equiv='refresh' content=0.1;url='listarfuncionario.php'>";
?>