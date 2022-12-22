<?php 
require 'connect.php';

$name = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$disponibilidade = $_POST['disponibilidade'];

$sql = "INSERT INTO loja.produtos (nome_produto, valor_produto, descricao_produto, disponibilidade_produto)
        VALUES ('$nome', '$valor', '$descricao', '$disponibilidade')";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: index.php?cadastro=1"); 
} else {
    echo "Erro ao inserir dados";
}

?>