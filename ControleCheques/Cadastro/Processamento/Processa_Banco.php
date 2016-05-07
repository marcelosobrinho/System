<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrado Banco</title>
        <style>
            body {
                background-color: #d0e4fe;
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
        $banco = filter_input(INPUT_POST,'ban',FILTER_SANITIZE_STRING);
        $conexao = mysqli_connect($host, $usuario, $senha, $database);
        if($banco!=""){
           $sql = "INSERT INTO banco(nome_bc) VALUES('{$banco}')"; 
           $valida=mysqli_query($conexao, $sql);
        }
        
        
        echo '<h2>';
        if ($valida == TRUE) {
          if($banco==""){
            echo 'Preencha o campo Banco !';
            echo '<br><a href="../Interface/Cadastro_Banco.php">Tentar Novamente</a>';
          } else{
            echo"<p>Inserção Feita com Sucesso  !</p>";
            echo '<br><a href="../Interface/Cadastro_Banco.php">Cadastrar outro Banco </a>';
            echo '<br><a href="../index_cad.php">Voltar para Cadastros</a>';
          } 
         Echo"<br> <a href=../../index.php>Ir para Index</a>"; 
        } else {
            echo "  Erro de Inserção! ";
             echo '<br><a href="../Interface/Cadastro_Banco.php">Tentar Novamente</a>';
        }
       
       echo '</h2>';
        ?>
    </center>
    </body>
</html>
