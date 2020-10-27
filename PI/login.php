<?php 
include("session.php");
if(isset($_SESSION['nome'])){
    echo(" <meta http-equiv='refresh' content='0;url=perfil.php'>");
}
?>
<!DOCTYPE html>
<html><head>
<head>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="logica.js"></script>
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <script type="text/javascript" language="javascript" src="md5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://kit.fontawesome.com/c1ff9f4537.js" crossorigin="anonymous"></script>    
<link rel="icon" type="image/png" href="images/lowcarbo.svg" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>Login - LowCarbo</title>
</head>

    <body  style="visibility:hidden;" id="corpo" onload="getapi();">
        <?php include("nav.php")?>

    <div class="card ctrl " style="background-color:white;width:75%;margin-top:2%;" onmouseover="vf()">
    
    <div class="card-body">
    <h1>Login</h1>
    <div class="alert alert-danger" role="alert" id="poperr" style="visibility:hidden">
    </div>
<form method="post" action="handler.php" onkeyup="vf();">
<div class="form-group row">
<label for="nome" class="col-sm-2 col-form-label"  >Email</label>
    <div class="col-sm-10">
<input type="email" placeholder="Email" class="form-control" id="nome" name="login">
</div></div>
<div class="form-group row">
<label for="senha" class="col-sm-2 col-form-label"  >Senha</label>
    <div class="col-sm-10">
<input type="password" class="form-control" style="display: inline-block" name="pw" id="senha" placeholder="Senha">
<span onclick="ssenha('senha')" style="position:absolute;float:right;margin-left:-2.9em;" class="btn btn-outline-primary text-wrap"><i class="fa fa-fw fa-eye"></i>
</span></div></div><br>
<input type="submit" class="btn btn-primary btn-lg fwd" name="log" id="log" value="Fazer Login">
</form>
<a href="registro.php" class="btn btn-danger fwd" style="margin-top:5px">Não tem uma conta? Registre-se aqui</a>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>