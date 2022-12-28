<?php
   //recebendos os valores do form
   $id_produto = $_POST['id_produto'];
   $produto = $_POST['produto']; 
   $preco = $_POST['preco'];
   $img = $_POST['img'];

  

   

   //conexao banco 
   require('conectbdtcc.php');

   

   $sqlinsert = "UPDATE cadproduto SET produto = '$produto', preco = '$preco', img = '$img' WHERE id_produto = $id_produto";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel alterar no banco de dados");

   echo "<script> alert('Dados editados com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url=''>";

?>