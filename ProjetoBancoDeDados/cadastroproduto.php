
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <title>Login</title>
    <style>
        .login{
            color: black;
            font-size: 30px;

        }
        .login2{
            color: black;
            font-size: 20px;
            alignment: left;
        }
    </style>
</head>
<body style="background-color: #b3b3b3" onload=popup()>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo2.png" class="logo"></a>
    <h2 style="color: white; left: 50%">Tela de Cadastro de Produto</h2>
</nav>
<div align="center">
    <img src="img/logo1.png" class="logo" style="height: 150px; width: 250px;">
</div>

<div>
    <form  action="index.php"method="post" class="form-check-input" style="position: relative; top: 10%; bottom: 40%; left: 40%; width: 800px">

        <div class="file-field">
            <div class="mb-1">
                <img src="img/addp.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" style="width: 15%; height: 20%">
            </div>
            <div class="d-flex justify-content-center">
                <div class="btn btn-primary">
                    <span>Adicionar Foto do Produto</span>
                    <input type="file">
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-8 order-md-1">
            <div class="row">
                <h4 class="mb-1">
                    INFORMAÇÕES DO PRODUTO
                </h4>

                <div class="col-md-12 mb-1">
                    <label for="username">
                        <font style="vertical-align: inherit;">Nome do Produto</font>
                    </label>
                    <input type="text" class="form-control" id="username" placeholder="Nome" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label for="senha"> Codigo</label>
                    <input type="text" class="form-control" id="senha" placeholder="Ex: 1, 2, 3, 4...">
                </div>
                <div class="col-md-12 mb-1">
                    <label for="email">
                        <font style="vertical-align: inherit;">Descrção</font>
                    </label>
                    <input type="text" class="form-control" id="endereço" placeholder="Descrição" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label for="senha"> Preço</label>
                    <input type="text" class="form-control" id="cidade">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="resenha"> Quantidade</label>
                    <input type="text" class="form-control" id="qtd">
                </div>

            </div>
    </form>
</div>

<div align="center" class="mb-5">
    <a href="index.php"><button type="submit" class="btn btn-primary" name="login" style="background: green; width: 150px; height: 50px;" >Cadastrar</button></a>
    <a href="cadastro.php"><button type="submit" class="btn btn-danger" name="cad" style="width: 150px; height: 50px">Sair</button></a>
</div>
<br><br>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<!--Copyright -->
<div  style="background: #545b62; position: fixed; bottom: 0; width: 100%;" class="footer-copyright text-center py-2" >© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> GABRIEL GP E GGOD</a>
    <li class="list-inline-item">
        <img src="img/facebook-icone-icon.png" style="width: 40px; height: 40px">
    </li>
    <li class="list-inline-item">
        <img src="img/twiter.png" style="width: 40px; height: 30px">
    </li>
    <li class="list-inline-item">
        <img src="img/Gmail_Icon.png" style="width: 40px; height: 40px">
    </li>
    <li style="float: right">
        <a class="navbar-brand" href="#"><img src="img/logo2.png" class="logo" width="120" height="33"></a>
    </li>
</div>
<!-- Copyright -->

</body>
</html>

