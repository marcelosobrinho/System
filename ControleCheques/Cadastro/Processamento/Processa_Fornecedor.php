<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fornecedor</title>
        <style>
            body {
                background-color: #d0e4fe;
            }
            fieldset
            {
                width:1080px;
                padding:100px;	
            }
            .button4 {
                background-color: #e7e7e7; color: black;
            } 
        </style>   
    </head>
    <body>
    <center>
        <?php
        include_once '../../conexao.php';
        $fornecedor =filter_input(INPUT_POST,'for',FILTER_SANITIZE_STRING);
        if ($fornecedor != "") {
            $sql = "INSERT INTO fornecedor(nome_for) VALUES('{$fornecedor}')";
            $valida = mysqli_query($conexao, $sql);
        }


        echo '<h2>';
        if ($valida = TRUE) {
            if ($fornecedor == "") {
                echo 'Preencha o campo Fornecedor!';
                echo '<br><a href="../Interface/Cadastro_Fornecedor.php">Tentar Novamente</a>';
            } else {
                echo"<p>Inserção Feita com Sucesso  !</p>";
                echo '<br><a href="../Interface/Cadastro_Fornecedor.php">Cadastrar outro Fornecedor </a>';
                echo '<br><a href="../index_cad.php">Voltar para Cadastros</a>';
            }
            Echo"<br> <a href=../../index.php>Ir para Index</a>";
        } else {
            echo "  Erro de Inserção! ";
            echo '<br><a href="../Interface/Cadastro_Forncedor.php">Tentar Novamente</a>';
        }

        echo '</h2>';
        ?>
    </center>
</body>
</html>
