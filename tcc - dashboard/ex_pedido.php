<?php
$id_pedido = $_GET['id_pedido'];

require("conectbdtcc.php");

$query = "DELETE FROM cadpedido WHERE id_pedido = $id_pedido";
mysqli_query($link, $query);

echo "<script> alert('Pedido excluido com sucesso!!!') </script>
       <meta http-equiv='refresh' content=0.1;url='listarpedido.php'>";
?>