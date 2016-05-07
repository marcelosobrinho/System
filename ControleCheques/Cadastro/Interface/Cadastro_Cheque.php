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

<center>
    <br><br><br><br>    
    <fieldset style="width: 75%;" >
        <legend>Cadastre o Cheque </legend>
        <form method="post" action="../Processamento/Processa_Cheque.php">
            <label for="num_ch">Numero Cheque</label>
            <input type="number" name="num_ch"  id="num_ch"/>
            <label for="chaque"> Descrição </label>
            <input type="text" name="des"  id="des" size="30"/>  
            <label for="dat">Data</label>
            <input type="date" name="dat"  id="dat"/>
            <label for="valor_ch">Valor</label>
            <input type="number" name="valor_ch"  id="valor_ch"/>
            <br><br>
            
            

            <div align="Left">
                <?php
                    include '../Componestes/caixaSelecaoBanco.php';
                    include '../Componestes/caixaSelecaoFornecedor.php';
                ?>
               
            </div>
            <div style='float:right'><input type="submit" value="Enviar"></div>
        </form> <br><br><br><br><br><br><br><br>
        <a href=Cadastro_Banco.php>Cadastrar Banco</a>
        <a href=Cadastro_Fornecedor.php>Cadastrar Fornecedor</a>
    </fieldset>
</center>

 
<a href="../index_cad.php"><button class="button button4">Voltar</button></a>

</body>
</html>
