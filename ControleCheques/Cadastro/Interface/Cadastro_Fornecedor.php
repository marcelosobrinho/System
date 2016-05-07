<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrado Fornecedor</title>
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
        <form method="post" action="../Processamento/Processa_Fornecedor.php">
            <center>
                <br><br> <br> <br>    
                <fieldset style="width: 75%;" >
                    <legend>Cadastre Fornecedor </legend>
                    <label for="for">Fornecedor </label>
                    <input typo="text" name="for" id="for">
                    <input type="submit" name="Enviar">
                </fieldset>
            </center>

        </form>
        <a href="../index_cad.php"><button class="button button4">Voltar</button></a>

    </body>
</html>
