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
$nome = $_POST['name'];
$endereco = $_POST['adress'];
$cidade = $_POST['city'];
$data_nascimento = $_POST['nasc'];
$email = $_POST['email'];
$ponto_referencia = $_POST['pontoref'];
$senha = $_POST['password'];
$sexo = $_POST['sexo'];
$classificacao = implode(', ', $_POST['adicionais']); // Selecione todos os adicionais selecionados

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, endereco, cidade, data_nascimento, email, ponto_referencia, senha, sexo, classificacao) VALUES ('$nome', '$endereco', '$cidade', '$data_nascimento', '$email', '$ponto_referencia', '$senha', '$sexo', '$classificacao')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro bem-sucedido!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
