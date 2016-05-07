<!DOCTYPE html>

<html>
    <head>
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
        <meta charset="UTF-8">
        <title>Listagem Geral</title>
    </head>

    <body>
    <center> 

        <?php
        $valor=0;
        include_once '../../conexao.php';
        $sql = "SELECT * FROM dtcheque order by data_ch;";
        $res = mysqli_query($conexao, $sql);
        //Constroi o titulo da tabela
        $cont = 0;
        echo"<h2>Listagem de Todos os Cheques em Debito</h2>";
  
        echo"  <table border =2 width=65%>
        <tr  align=center bgcolor=Grey>
                    <th>Indice</th><th>Número</th> <th>Data</th><th>Descrição </th><th>Fonecedor</th>
                    <th>Valor (R$)</th><th>Tempo Estimado (dias) </th><th>Status</th><th>Alterar</th>  
        </tr>";
        //exibe os registros da tabela 
        
        while ($resgistro = mysqli_fetch_assoc($res)) {

            $numero = $resgistro["num_ch"];
            $cod_ch = $resgistro["cod_ch"];
            $des_ch = $resgistro["des"];
            $valor_ch = $resgistro["valor_ch"];
            $data_ch = $resgistro["data_ch"];
            $codFor = $resgistro["cod_for"];
            $status = $resgistro["status_ch"];
            

            //Busca a diferença entre as datas 
            $sql = " SELECT DATEDIFF('{$data_ch}',CURDATE()) AS dif; ";
            //Busca do nome do fornecedor e a comparação com a chave primareia de forncedor e a chave estrangeira de fornecedor em cheque 
            $sql2 = " SELECT f.nome_for FROM dtcheque as c, fornecedor as f WHERE (f.cod_for='{$codFor}')&&(c.cod_for='{$codFor}');";
            $result = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
            $result2 = mysqli_fetch_assoc(mysqli_query($conexao, $sql2));
            //resultado da diferenlça entre as datas
            $dife = $result["dif"];
            // resiltado do nome do fornecedor
            $nfor = $result2["nome_for"];

            //Condições para mudar de cor conforme a data do cheque
            $ano=substr($data_ch,0,4);
            $mes=substr($data_ch,5,2);
            $dia=substr($data_ch,8,4);
            if ($status == 0) {
                if ($dife <= (-15)) {
                    echo "
                <form  method=get action=../debito.php>
                <tr align=center bgcolor=red>
                    <th>$cont</th><th>$numero</th> <th>$dia-$mes-$ano</th><th>$des_ch </th><th>$nfor</th><th>".number_format($valor_ch, 2, ',', '.')."</th><th>$dife</th><th>"
                    . " <a href=../debito.php?codigoCh=$cod_ch>Debitar</a></th>"
                    . "<th> <a href=../../Alterar/Alterar_Cheque.php?codigoCh=$cod_ch>Alterar</a></th>     
                </tr>  
                </form>";
                } 
                elseif(($dife > (-15)) && ($dife < 0)) {
                    
                        echo "<form  method=get action=../debito.php>
                            <tr align=center bgcolor=orange>
                                <th>$cont</th><th>$numero</th> <th>$dia-$mes-$ano</th><th>$des_ch </th><th>$nfor</th><th>".number_format($valor_ch, 2, ',', '.')."</th><th>$dife</th><th>"
                                . " <a href=../debito.php?codigoCh=$cod_ch>Debitar</a></th>"
                                . "<th> <a href=../../Alterar/Alterar_Cheque.php?codigoCh=$cod_ch>Alterar</a></th>  
                            </tr>  
                        </form>";
                }
                else{
                    
                        echo "<form  method=get action=../debito.php>
                            <tr align=center bgcolor=green>
                                <th>$cont</th><th>$numero</th> <th>$dia-$mes-$ano</th><th>$des_ch </th><th>$nfor</th><th>".number_format($valor_ch, 2, ',', '.')."</th><th>$dife</th><th>"
                                . " <a href=../debito.php?codigoCh=$cod_ch>Debitar</a></th>"
                                . "<th> <a href=../../Alterar/Alterar_Cheque.php?codigoCh=$cod_ch>Alterar</a></th>     
                            </tr>  
                        </form>";
                }
               $cont++;
              $valor+=$valor_ch;
                
            }
               
        }
        echo "<br> <p> Total de Registros: $cont <br>
        Valor total dos Cheques em debito: ".number_format($valor, 2, ',', '.')."<p>";
           
        ?>
    </table>
    

</center>
</body>
<a href="../../index.php">Ir para index</a>
</html>
