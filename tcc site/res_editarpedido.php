<?php
   //recebendos os valores do form
   $id_pedido = $_POST['id_pedido'];
   $nomecomprador = $_POST['nomecomprador'];
   $tipo = $_POST['tipo'];  
   $preco = $_POST['preco'];
   $dataentrega = $_POST['dataentrega'];
   $formapagamento = $_POST['formapagamento'];
   $numerocartao = $_POST['numerocartao'];

  

   

   //conexao banco 
   require('conectbdtcc.php');

   

   $sqlinsert = "UPDATE cadpedido SET nomecomprador = '$nomecomprador', tipo = '$tipo', preco = '$preco', dataentrega = '$dataentrega', formapagamento = '$formapagamento', numerocartao = '$numerocartao' WHERE id_pedido = $id_pedido";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel alterar no banco de dados");

   echo "<script> alert('Dados editados com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url='shop.php'>";

?>