<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
             body {
                background-color: #d0e4fe;
            }
        </style>
    </head>
    <body>
        <?php
        $cod_ch = $_GET['codigoCh'];
        include_once '../conexao.php';
        $sql = "UPDATE dtcheque SET status_ch=1 WHERE cod_ch='{$cod_ch}';";
        $res = mysqli_query($conexao, $sql);
        
      if ($res == TRUE) {
            echo "<center><h3>Cheque debitado! </h3> <br>"
          . "<h3><a href=Processamento_listi/listagem_Geral.php>Exibir Listagem </h3></a></center>";
            
        }
        ?>
    </body>
</html>

