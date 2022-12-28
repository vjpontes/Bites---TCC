<?php
$id_produto = $_GET['id_produto'];

require("conectbdtcc.php");

$query = "DELETE FROM cadprodutonovo WHERE id_produto = $id_produto";
mysqli_query($link, $query);

echo "<script> alert('Pedido excluido com sucesso!!!') </script>
       <meta http-equiv='refresh' content=0.1;url='listarprodutonovo.php'>";
?>