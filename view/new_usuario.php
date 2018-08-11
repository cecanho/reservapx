<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema de Reservas</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css_bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../assets/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SisRev vr 7</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="admin.php">Home</a></li>
                    <li class="active"><a href="usuario.php" >Usuário</a></li>
                    <li><a href="item.php">Equipamentos</a></li>
                    <li><a href="consulta_reserva.php">Reservas do dia</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="sair.php">Sair <span class="sr-only"></span></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h3>Cadastro de Usuário</h3>

        <form method="post" action="adduser.php">
            <table>
                <tr><td><strong>ID: </strong></td><td><input type="text" name="id" id="id" placeholder="No. do ID do item!" size="75" required  class="form-control"></td></tr>
                <tr><td><strong>Nome: </strong></td><td><input type="text" name="nome" id="nome" placeholder="Item!" size="75" required  class="form-control"></td></tr>
                <tr><td><strong>Login: </strong></td><td><input type="text" name="login" id="login" placeholder="Login!" size="75" required  class="form-control"></td></tr>
                <tr><td><strong>Senha: </strong></td><td><input type="password" name="senha" id="senha" size="75" required  class="form-control"></td></tr>
                <tr><td></td><td align="right"><input type="submit" name="cadusu" id="cadusu" value="Salvar" class="btn-success"></td></tr>
            </table>
        </form>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/jquery.min.js"><\/script>')</script>
<script src="../assets/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../assets/ie10-viewport-bug-workaround.js"></script>
</body>
</html>