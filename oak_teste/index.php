<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Listagem e Cadastro</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/favicon.ico" alt="ícone do site">
</head> 

<body>

<div class="wrapper">
        
        <div class="box-container" id="form-cadastro">

            <form action="cadastro.php" method="post" name="formulario">

            <?php 
                if(isset($_GET['cadastro'])) {
                    echo "<p class=message style='text-align:center;color:red'> Novo item cadastrado.</p>";
                }
            ?>
            
            <h3>Cadastro de novos produtos:</h3>

            <p>Nome:<input  type="text" name="nome" placeholder="Digite o nome do produto"></p>
            
            <p>Valor: <input type="text" name="valor" placeholder="Digite o valor"></p>

            <p>Descrição:</p>
            <textarea name="descricao" cols="25" rows="10"></textarea>
            <br>
            <br>
            <label for="dispo-select">Disponível:</label>
            <select name="disponibilidade" id="dispo-select">
                <option value="">Escolha</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>

            <input class="input-btn" type="submit" value="Cadastrar"> 
            </form>
        </div>

        <div class="box-container" id="lista-produtos">
             
            <?php 
                require 'listagem.php';
            ?>

        </div>

    </div>


</body>
</html>