<?php
   //recebendos os valores do form
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $sexo = $_POST['sexo'];
   $cpf = $_POST['cpf']; 
   $estado = $_POST['estado'];
   $cidade = $_POST['cidade'];
   $bairro = $_POST['bairro'];
   $endereco = $_POST['endereco'];
   $email = $_POST['email'];

   //conexao banco 
   require('conectbdtcc.php');

   

   $sqlinsert = "UPDATE cadfuncionario SET nome = '$nome', sobrenome = '$sobrenome', sexo = '$sexo', cpf = '$cpf', estado = '$estado', cidade = '$cidade', bairro = '$bairro', endereco = '$endereco', email = '$email' WHERE cpf = $cpf";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel alterar no banco de dados");

   echo "<script> alert('Dados editados com sucesso!!!') </script>
        <meta http-equiv='refresh' content=0.1;url='listarfuncionario.php'>";

?>