<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title>Cadastro Cheque</title>
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
    </style>
</head>

<body>
    <?php
    $codCh = $_GET['codigoCh'];
    echo"$codCh <br>";
    include_once '../conexao.php';
    $sql = "SELECT * FROM dtcheque WHERE cod_ch = $codCh";
    $res = mysqli_query($conexao, $sql);
    $resgistro = mysqli_fetch_assoc($res);
    $numCh = $resgistro['num_ch'];
    $des = $resgistro['des'];
    $data = $resgistro['data_ch'];
    $valor = $resgistro['valor_ch'];
    $codFor = $resgistro['cod_for'];
    $codBc = $resgistro['cod_bc'];
    $html = "
    <center>
    <br><br><br><br>    
    <fieldset style=width: 75%; >
        <legend>Cadastre o Cheque </legend>
        <form method=post action=>
            <label for=num_ch>Numero Cheque</label>
            <input type=number name=num_ch value='{$numCh}'  id=num_ch/>
            <label for=chaque> Descrição </label>
            <input type=text name=des value='{$des}'  id=des size=30/>  
            <label for=dat>Data</label>
            <input type=date name=dat value='{$data}' id=dat/>
            <label for=valor_ch>Valor</label>
            <input type=number name=valor_ch value='{$valor}'  id=valor_ch/>
            <br><br>
            <div align=Left>                        
   
             ";

    $html2 = "
        
        </div>
        <div style='float:right'>
           
            <input type=submit name=via  value=Enviar> </a>
        </div>
        </form> <br><br><br><br><br><br><br><br>
    </fieldset>
</center>
";

    echo "$html";
    echo "Banco";
    include '../Cadastro/Componestes/caixaSelecaoBanco.php';
    echo "Fornecedor";
    include '../Cadastro/Componestes/caixaSelecaoFornecedor.php';
    echo "$html2";
    if (isset($_POST['via'])) {
        $numCh = filter_input(INPUT_POST,'num_ch', FILTER_SANITIZE_NUMBER_INT);
        $des = filter_input(INPUT_POST,'des', FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,'dat');
        $valor = filter_input(INPUT_POST,'valor_ch', FILTER_SANITIZE_NUMBER_FLOAT);
        $codFor = filter_input(INPUT_POST,'listfornecedor');
        $codBc = filter_input(INPUT_POST, 'listBancos');
        $codch = filter_input(INPUT_GET, 'codche', FILTER_SANITIZE_NUMBER_INT);
        $sql="UPDATE dtcheque SET num_ch=$numCh,data_ch=$data,des=$des,valor_ch=$valor,cod_bc=$codBc,cod_for=$codFor WHERE cod_ch=$codCh";
        $vali=mysqli_query($conexao, $sql);
       
        echo "$sql";
        if($vali==TRUE){
            echo "Deu Certo !";
        }
    }
    ?>

</body>
</html>

