        <select name="listBancos">
            <optgroup label=Bancos>
            <?php
            include'../../conexao.php';
            $sql = "SELECT cod_bc,nome_bc FROM banco;";
            $res = mysqli_query($conexao, $sql) or die("Erro ao pesquisar! :)");
            while ($resgistro = mysqli_fetch_assoc($res)) {
                $nome = $resgistro["nome_bc"];
                $cod_bc = $resgistro["cod_bc"];
                echo "<option value='$cod_bc'> $nome</option>";
            }
            ?>
            </optgroup>
        </select>
       