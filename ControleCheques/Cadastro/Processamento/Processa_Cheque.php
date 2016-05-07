<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cheque</title>
    </head>
    <body>
    <center>
        <fieldset>
            <?php
            $cod_bc = $_POST['listBancos'];
            $cod_for = $_POST['listfornecedor'];
            $des_ch = filter_input(INPUT_POST,'des',FILTER_SANITIZE_STRING);
            $dat_ch = $_POST['dat'];
            $num_ch = $_POST['num_ch'];
            $valor_ch = $_POST['valor_ch'];
            include_once '../../conexao.php';

            if (($num_ch<>0) && ($valor_ch<>0)) {
                $sql = "INSERT INTO dtcheque(cod_bc,cod_for,data_ch,des,num_ch,status_ch,valor_ch) VALUES ('{$cod_bc}','{$cod_for}','{$dat_ch}','{$des_ch}','{$num_ch}',0,'{$valor_ch}') ";
                $valida = mysqli_query($conexao, $sql);

            } else {
                echo "<h2>Preencha Todos os Campos</h2>";
            }


            if ($valida == TRUE) {
                echo"<p><center><h2> $sql   Inserção Feita com Sucesso !</h2></center></p>";
                echo '<br><a href="../index_cad.php"><button class="button button4">Voltar para Cadastros</button></a> <br>
                <a href=../Interface/Cadastro_Cheque.php><br><br> <h3> Outro Cadastro<h3></a>';
            } else {
                echo "  <h2>Erro na inserção! </h2>
                <a href=../Interface/Cadastro_Cheque.php><br><br> <h3> Tentar Nonvamente<h3></a>";
            }
            ?>
    </center>   
</fieldset>
</body>

</html>