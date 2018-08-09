<?php
/* Fazendo conexão com Base de Dados MySQL em PHP */
if($_SERVER['SERVER_NAME'] == 'localhost'):
   // Variáveis contendo dados da conexão com o MySQL do XAMPP
   $serverName = "localhost"; // Servidor padrão do MySQL no XAMPP
   $userName = "root"; // Usuário padrão do MySQL no XAMPP
   $password = ""; // Senha padrão do MySQL no XAMPP
   $database = "tabela"; // Nome da base de dados a ser usada no XAMPP
else:
   // Variáveis contendo dados da conexão com o MySQL do hospedeiro
   // Consulte a documentação da empresa de hospedagem
   $serverName = "localhost"; // Servidor do MySQL na hospedagem
   $userName = "id6737170_aokigaharajp"; // Usuário do MySQL na hospedagem
   $password = "aokigaharajp"; // Senha do MySQL na hospedagem
   $database = "id6737170_aokigaharajp"; // Nome da base de dados a ser usada na hospedagem
endif;

// exit($serverName . ' ' . $userName . ' ' . $password . ' ' . $database);

// Criando conexão --> A variável '$conn' armazenará o ID único da conexão
$conn = mysqli_connect($serverName, $userName, $password, $database);

// Testando conexão e interrompendo se houve falha
if (!$conn)
   die("Conexao com DB falhou retornando o erro: " . mysqli_connect_error() . "<br><br>");
  
// Correção para caracteres acentuados no MySQL
// Não se esqueça de sempre criar bases de dados no formato "utf8_general_ci"
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, 'SET character_set_connection=utf8');
mysqli_query($conn, 'SET character_set_client=utf8');
mysqli_query($conn, 'SET character_set_results=utf8');
?>
