<?php
$id_produto = $_GET['id_produto'];

require("conectbdtcc.php");

$query = "DELETE FROM cadproduto WHERE id_produto = $id_produto";
mysqli_query($link, $query);

echo "<script> alert('Pedido excluido com sucesso!!!') </script>
       <meta http-equiv='refresh' content=0.1;url='listarproduto.php'>";
?>