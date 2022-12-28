<?php
   //recebendos os valores do form  
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $data_nasc = $_POST['data_nasc'];
   $sexo = $_POST['sexo'];
   $cpf = $_POST['cpf'];  
   $estado = $_POST['estado'];
   $cidade = $_POST['cidade'];
   $bairro = $_POST['bairro'];
   $endereco = $_POST['endereco'];
   $email = $_POST['email'];

   //conexao banco 
   require('conectbdtcc.php');

   $sqlinsert = "INSERT INTO cadfuncionario(nome, sobrenome, data_nasc, sexo, cpf,  estado, cidade, bairro, endereco, email) VALUES ('$nome', '$sobrenome', '$data_nasc', '$sexo', '$cpf', '$estado', '$cidade', '$bairro', '$endereco','$email')";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel inserir no banco de dados");

   echo "<script> alert('Dados enviados com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url='conosco.php'>";

?>