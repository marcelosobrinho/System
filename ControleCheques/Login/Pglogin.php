<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            fieldset
            {
                width:500px;
                padding:60px;
                background-color: #e7e7e7;
            }

        </style>
    </head>
    <body>
        <form method="post" action="processa.php">
            <center>
                <br><br><br><br><br><br><br><br>
                <fieldset>
                    <legend>Login</legend>
                    <label for="usu">Usuario</label>
                    <input type="text" nome="usu" size="20"><br><br>
                    <label for="senha" >Senha</label>
                    <input type="text" nome="senha" size="21"><br><br>
                    <input type="submit" name="Enviar">
                </fieldset>
            </center>
        </form>    
        <?php
        ?>
    </body>
</html>
