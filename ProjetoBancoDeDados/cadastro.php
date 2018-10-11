<!DOCTYPE html>
<html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>
<?php
session_start();
?>
<center>
    <div id="formulario" class="form-control">
        <form method="post">
            <table>
                <tr>
                    <td>USUARIO:</td>
                    <td><input type='text' maxlength='30' name="name" placeholder='Digite nome do usuario'
                               class='CampoTexto' required>
                    </td>
                </tr>
                <tr>
                    <td>SENHA:</td>
                    <td><input type='password' maxlength='30' name="senha" placeholder='Digite a senha'
                               class='CampoTexto'
                               required></td>
                </tr>
                <tr>
                    <td>CONFIRMAR SENHA:</td>
                    <td><input type='password' maxlength='30' name="confirmar" placeholder='Digite novamente a senha'
                               class='CampoTexto' required></td>
                </tr>
                <tr>
                    <td>E-MAIL:</td>
                    <td><input type='text' maxlength='30' name="email" placeholder='Digite o endereço de e-mail'
                               class='CampoTexto' required></td>
                </tr>
                <tr>
                    <td>DATA DE NASCIMENTO:</td>
                    <td><input type='date' name="data" class='CampoTexto' required></td>
                </tr>
                <tr>
                    <td>SEXO:</td>
                    <td>
                        <select required>
                            <option>MASCULINO</option>
                            <option>FEMININO</option>
                            <option>PLÁCIDO</option>
                        </select>
                    </td>
                </tr>
            </table>
            <center>
                <input style="alignment: center" type="submit" name="Cadastrar" value="CADASTRAR" class="button">
            </center>
        </form>

        <?php
        if (isset($_POST['Cadastrar'])) {
            if ($_POST['senha'] == $_POST["confirmar"]) {
                $_SESSION['nome'] = $_POST['user'];
                $_SESSION['senha'] = sha4($_POST['senha']);
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['data'] = $_POST['data'];
            }
        }
        ?>
    </div>
</center>

</body>
</html>
