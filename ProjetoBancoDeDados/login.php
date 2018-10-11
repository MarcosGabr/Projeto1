
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
    <script languague="javascript">
       /*Funçao para quando iniciar a pagina abrir um pop-up
       function popup(){
            window.open('popup','width=200,height=100,scrolling=auto,top=0,left=0')
        }*/
    </script>
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

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">    &#9773;&#9762; Alerta de erro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Nao foi possivel acessar o sistema. <!-- Verifique -->Analise seus dados
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal fim-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo2.png" class="logo"></a>
    <button class="0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation" style="background: #007bff" onclick="duplicarCampos();">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
    <div class="alert alert-primary" role="alert" id="demo2" style="display: none">
        Pare de clicar nesse botao.
    </div>
    <div id="algo"></div>
    <script>
        function duplicarCampos(){
           // var clone1 = document.getElementById('demo2').cloneNode(true);
            //var destino1 = document.getElementById('algo');
            //clone1.style.display='block';
            //destino1.appendChild (clone1);
            document.getElementById('demo2').style.display='block';
        }
    </script>
</nav>

<div>
        <form  action="index.php"method="post" class="form-check-input" style="position: relative; top: 10%; bottom: 40%; left: 40%; width: 400px ">
            <img src="img/logo1.png" class="logo">
            <div class="login" align="center"> <img src="img/user_icon.png" width="70" height="70"> <b>LOGIN DO USUARIO</b></div>
            <div class="form-group">
            <label class="login2">E-mail: </label>
            <input type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="E-mail">
             </div>
        <div class="form-group">
            <label class="login2">Senha: </label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">

    </form>
</div>
</div>
<div align="center">
    <a href="index.php"><button type="submit" class="btn btn-primary" name="login" data-toggle="modal" data-target="#exampleModal" style="background: green; width: 150px; height: 50px;" >Acessar</button></a>
    <a href="cadastro.php"><button type="submit" class="btn btn-secondary" name="cad" style="width: 150px; height: 50px">Novo usuario</button></a>
</div>

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

<!-- Footer -->
<footer class="page-footer font-small teal pt-3" style="position: absolute; bottom: 0; width: 100%; background: #1b1e21; color: white;"

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Insira Texto</h5>
                <p>Insira Informação</p>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Insira Texto</h5>
                <p>Insira Informação</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Insira Texto</h5>
                <p>Insira Informação</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

<!--Copyright -->
    <div  style="background: #545b62" class="footer-copyright text-center py-2">© 2018 Copyright:
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

</footer>
<!-- Footer -->

</body>
</html>


