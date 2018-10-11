
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
    <h2 style="color: white; left: 50%">Tela de GERENCIA</h2>
</nav>
<div align="center">
    <img src="img/logo1.png" class="logo" style="height: 150px; width: 250px;">
</div>
<br>

<div class="card-deck mb-3 text-center" style="position: relative; top: 10%; bottom: 40%; left: 25%; width: 1000px">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos</font></font></h4>
        </div>
        <div class="card-body">
            <a href="cadastroproduto.php"><button type="button" id="cadprodutos" class="btn btn-lg btn-block btn-outline-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar </font></font></button></a>
           <button type="button" id= "listarprodutos"class="btn btn-lg btn-block btn-outline-primary" onclick="verlistprod();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Listar </font></font></button>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vendedor</font></font></h4>
        </div>
        <div class="card-body">
            <a href="cadastrousuario.php.php"><button type="button" id="cadusuarios" class="btn btn-lg btn-block btn-outline-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar </font></font></button></a>
           <button type="button" id= "listarusuarios"class="btn btn-lg btn-block btn-outline-primary" onclick="verlistprod2();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Listar </font></font></button>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuarios</font></font></h4>
        </div>
        <div class="card-body">
            <button type="button" id= "listarusuarios"class="btn btn-lg btn-block btn-outline-primary"onclick="verlistprod3();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Listar </font></font></button>
        </div>
    </div>
</div>
<script>
    function verlistprod(){
        document.getElementById('listaprod').style.display='block';
    }
    function escondmenu(){
        document.getElementById('listaprod').style.display='none';
    }
    function verlistprod2(){
        document.getElementById('listaprod2').style.display='block';
    }
    function escondmenu2(){
        document.getElementById('listaprod2').style.display='none';
    }
    function verlistprod3(){
        document.getElementById('listaprod3').style.display='block';
    }
    function escondmenu3(){
        document.getElementById('listaprod3').style.display='none';
    }
</script>

<div id="listaprod" style="display: none">
<div class="card-deck mb-3 text-center" style="overflow: auto; position: relative; top: 10%; bottom: 40%; left: 35%; height: 400px; width: 700px;border: 10px solid;">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col"> Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" name="linha" value="1"/></td>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="linha" value="1"/></td>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="linha" value="1"/></td>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>
<div align="center" class="mb-5">
    <a href="cadastroproduto.php"><button type="submit" class="btn btn-primary" name="login"style="background: green; width: 150px; height: 50px;" >Editar</button></a>
    <button type="submit" class="btn btn-danger" name="cad" style="width: 150px; height: 50px">Excluir</button>
    <button type="button" class="btn btn-group-sm" name="esc" style="width: 150px; height: 50px" onclick="escondmenu();">Esconder Lista</button>
</div>
</div>
<div id="listaprod2" style="display: none">
    <div class="card-deck mb-3 text-center" style="overflow: auto; position: relative; top: 10%; bottom: 40%; left: 35%; height: 400px; width: 700px;border: 10px solid;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col"> Nome</th>
                <th scope="col">Usuario</th>
                <th scope="col">Sexo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <td>Mark</td>
                <td>@mdo</td>
                <td>Otto</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <td>Jacob</td>
                <td>@fat</td>
                <td>Thornton</td>

            </tr>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>the Bird</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div align="center" class="mb-5">
        <a href="cadastrofuncionario.php"><button type="submit" class="btn btn-primary" name="login"style="background: green; width: 150px; height: 50px;" >Editar</button></a>
        <button type="submit" class="btn btn-danger" name="cad" style="width: 150px; height: 50px">Excluir</button>
        <button type="button" class="btn btn-group-sm" name="esc" style="width: 150px; height: 50px" onclick="escondmenu2();">Esconder Lista</button>
    </div>
</div>

<div id="listaprod3" style="display: none">
    <div class="card-deck mb-3 text-center" style="overflow: auto; position: relative; top: 10%; bottom: 40%; left: 35%; height: 400px; width: 700px;border: 10px solid;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col"> Nome</th>
                <th scope="col">Usuario</th>
                <th scope="col">Sexo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="linha" value="1"/></td>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div align="center" class="mb-5">
        <button type="button" class="btn btn-group-sm" name="esc" style="width: 150px; height: 50px" onclick="escondmenu3();">Esconder Lista</button>
    </div>
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