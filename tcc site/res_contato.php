<?php
   //recebendos os valores do form  
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $email = $_POST['email'];
   $endereco = $_POST['endereco'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];   
   $mensagem = $_POST['mensagem'];
   

   //conexao banco 
   require('conectbdtcc.php');

   $sqlinsert = "INSERT INTO contato(nome, sobrenome, email, endereco, cidade, estado, mensagem) VALUES ( '$nome', '$sobrenome','$email', '$endereco', '$cidade', '$estado', '$mensagem')";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel inserir no banco de dados");

   echo "<script> alert('Mensagem enviada com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url='contato.php'>";

?>