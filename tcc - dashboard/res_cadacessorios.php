<?php
   //recebendos os valores do form  
   $produto = $_POST['produto'];
   $preco = $_POST['preco'];
   $img = $_POST['img'];
   
   //conexao banco 
   require('conectbdtcc.php');

   $sqlinsert = "INSERT INTO cadacessorios(produto, preco, img) VALUES ('$produto', '$preco', '$img')";

   mysqli_query($link, $sqlinsert) or die ("Não foi possivel inserir no banco de dados");

   echo "<script> alert('Dados cadastrados com sucesso!!!') </script>
         <meta http-equiv='refresh' content=0.1;url='cadacessorios.php'>";

?> 