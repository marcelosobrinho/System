        <select name="listfornecedor">
            <optgroup label=Fonecedores>
                <?php
                include_once '../../conexao.php';
                $sql = "SELECT cod_for,nome_for FROM fornecedor;";
                $res = mysqli_query($conexao, $sql) or die("Erro ao pesquisar! :)");

                while ($resgistro = mysqli_fetch_assoc($res)) {
                    $nome = $resgistro["nome_for"];
                    $cod_for = $resgistro["cod_for"];
                    echo "<option value='$cod_for'> $nome</option>";
                }
                ?>
            </optgroup>
        </select>
