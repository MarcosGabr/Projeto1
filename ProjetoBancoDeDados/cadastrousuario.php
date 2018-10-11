
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



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo2.png" class="logo"></a>
    <h2 style="color: white; left: 50%">Tela de Cadastro de Usuario</h2>
</nav>
<div align="center">
    <img src="img/logo1.png" class="logo" style="height: 150px; width: 250px;">
</div>

<div>
    <form  action="index.php"method="post" class="form-check-input" style="position: relative; top: 10%; bottom: 40%; left: 40%; width: 800px">

        <!-- <div class="d-flex justify-content-center">
             <div class="btn btn-mdb-color btn-rounded float-left waves-effect waves-light">
                 <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar foto</font></font></span>
                 <input type="file">
             </div>-->
        <div class="file-field">
            <div class="mb-1">
                <img src="img/add.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" style="width: 20%; height: 20%">
            </div>
            <div class="d-flex justify-content-center">
                <div class="btn btn-primary">
                    <span>Adicionar Foto</span>
                    <input type="file">
                </div>
            </div>
        </div>
        <br>
         <div class="col-md-8 order-md-1">
             <div class="row">
                 <h4 class="mb-1">
                     INFORMAÇÕES DO USUARIO
                 </h4>
                 <div class="col-md-6 mb-1">
                      <label for="firs-name"> Primeiro Nome</label>
                      <input type="text" class="form-control" id="firstName">
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="firs-name"> Sobre Nome</label>
                     <input type="text" class="form-control" id="lastName">
                 </div>
                 <div class="col-md-12 mb-1">
                     <label for="username">
                         <font style="vertical-align: inherit;">Nome do Usuario</font>
                     </label>
                         <input type="text" class="form-control" id="username" placeholder="Username" required>
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="senha"> Senha</label>
                     <input type="password" class="form-control" id="senha" placeholder="Senha">
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="resenha"> Repita Senha</label>
                     <input type="password" class="form-control" id="resenha" placeholder="Senha">
                 </div>
                 <div class="col-md-12 mb-1">
                     <label for="email">
                         <font style="vertical-align: inherit;">Email</font>
                     </label>
                     <div class="input-group-prepend">
                         <span class="inpout-group-text">
                             <font style="vertical-align: inherit;">
                             <font style="vertical-align: inherit;">@</font>
                         </font>
                         </span>
                         <input type="text" class="form-control" id="email" placeholder="E-mail" required>
                     </div>
                 </div>
                 <div class="col-md-12 mb-1">
                     <label for="email">
                         <font style="vertical-align: inherit;">Endereço</font>
                     </label>
                         <input type="text" class="form-control" id="endereço" placeholder="Rua, Quadra, Bairro, Lote, Casa" required>
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="senha"> Cidade</label>
                     <input type="text" class="form-control" id="cidade">
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="resenha"> Estado</label>
                     <input type="text" class="form-control" id="estado">
                 </div>
                 <div class="col-md-6 mb-1">
                     <label for="dtnasc">
                         <font style="vertical-align: inherit;">Data de Nascimento</font>
                     </label>
                     <div class="col-md-12 mb-1">
                     <input type='date' name="data" class="form-control" required>
                     </div>
                 </div>
                 <div class="col-md-10 mb-3">
                     <label for="sex">
                         <font style="vertical-align: inherit;">Sexo</font>
                     </label>
                 <div class="d-block my-1">
                     <div class="custom-control custom-radio">
                         <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                         <label class="custom-control-label" for="credit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Feminino</font></font></label>
                     </div>
                     <div class="custom-control custom-radio">
                         <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                         <label class="custom-control-label" for="debit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Masculino</font></font></label>
                     </div>
                     <div class="custom-control custom-radio">
                         <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                         <label class="custom-control-label" for="paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Outros</font></font></label>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 </div>

 <div align="center" class="mb-5">
     <a href="index.php"><button type="submit" class="btn btn-primary" name="login" data-toggle="modal" data-target="#exampleModal" style="background: green; width: 150px; height: 50px;" >Cadastrar</button></a>
     <a href="cadastro.php"><button type="submit" class="btn btn-danger" name="cad" style="width: 150px; height: 50px">Sair</button></a>
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


<!--Copyright -->
<div  style="background: #545b62; position: relative; bottom: 0; width: 100%;" class="footer-copyright text-center py-2" >© 2018 Copyright:
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


