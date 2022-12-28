<?php
$id_contato = $_GET['id_contato'];

require("conectbdtcc.php");

$query = "DELETE FROM contato WHERE id_contato = $id_contato";
mysqli_query($link, $query);

echo "<script> alert('Mensagem excluida com sucesso!!!') </script>
       <meta http-equiv='refresh' content=0.1;url='listarmsg.php'>";
?>