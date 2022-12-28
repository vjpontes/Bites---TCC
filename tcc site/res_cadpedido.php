<?php
   //recebendos os valores do form  
   $nomecomprador = $_POST['nomecomprador'];
   $tipo = $_POST['tipo'];
   $preco = $_POST['preco'];
   $dataentrega = $_POST['dataentrega'];
   $formapagamento = $_POST['formapagamento'];
   $numerocartao = $_POST['numerocartao'];
   


   //conexao banco 
   require('conectbdtcc.php');

   $sqlinsert = "INSERT INTO cadpedido(nomecomprador, tipo, preco, dataentrega, formapagamento, numerocartao) VALUES ('$nomecomprador', '$tipo', '$preco', '$dataentrega', '$formapagamento', $numerocartao)";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel inserir no banco de dados");

   echo "<script> alert('Compra realizada com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url='shop.php'>";

?>