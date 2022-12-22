<?php 
require 'connect.php';

$sql = "SELECT nome_produto, valor_produto FROM loja.produtos 
        WHERE disponibilidade_produto <> 0 
        ORDER BY valor_produto";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)) {
    echo "
        <tr> 
            <td>" . $row['nome_produto'] . "</td>
            <td>" . $row['valor_produto'] . "</td>
        </tr>
        ";
}
?>