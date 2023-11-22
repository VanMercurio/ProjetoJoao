<?php
// Conecte-se ao banco de dados
$servername = "seu_servidor_mysql";
$username = "seu_usuario_mysql";
$password = "sua_senha_mysql";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Coleta os dados do formulário
$nome = $_GET['name'];
$endereco = $_GET['adress'];
$cidade = $_GET['city'];
$data_nascimento = $$_GET['nasc'];
$email = $_GET['email'];
$ponto_referencia = $_GET['pontoref'];
$senha = $_GET['password'];
$sexo = $_GET['sexo'];
$classificacao = implode(', ', $_GET['adicionais']); // Selecione todos os adicionais selecionados

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, endereco, cidade, data_nascimento, email, ponto_referencia, senha, sexo, classificacao) VALUES ('$nome', '$endereco', '$cidade', '$data_nascimento', '$email', '$ponto_referencia', '$senha', '$sexo', '$classificacao')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro bem-sucedido!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
