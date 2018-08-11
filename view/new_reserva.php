<?php
function SomarData($data, $dias, $meses, $ano)
{
    /*www.brunogross.com*/
    //passe a data no formato dd/mm/yyyy
    date_default_timezone_set('America/Sao_Paulo');
    $data = explode("/", $data);
    $newData = date("d/m/Y", mktime(0, 0, 0, $data[1] + $meses,
        $data[0] + $dias, $data[2] + $ano) );
    return $newData;
}
?>
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
                    <li class="active"><a href="professor.php">Home</a></li>
                    <li><a href="new_reserva.php" >Nova reserva</a></li>
                    <li><a href="consulta.php">Reservas feitas</a></li>
                    <li><a href="cancela.php">Cancelar Reserva</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="sair.php">Sair <span class="sr-only"></span></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h3>Nova reserva de equipamento</h3>
        <h4>Escolha o dia e o horário e clique em avançar:</h4>

        <form method="post" action="ciclo1.php">
            <table>
                <tr><td><strong>Dia </strong></td><td><select name="dia" id="dia" class="form-control">
                            <option>Escolha uma data!</option>
                            <?php
                            $data = date('d/m/Y');
                            for($i=0;$i<3;$i++){
                                $newData = SomarData($data,$i);
                                echo '<option value="' . $newData . '">' . $newData . '</option>';
                            }
                            ?>
                        </select></td></tr>
                <tr><td><strong>Horário: </strong></td><td><select name="horario" class="form-control">
                            <option>Escolha um Horário</option>
                            <option value="8:00">8:00</option>
                            <option value="9:35">9:35</option>
                            <option value="19:10">19:10</option>
                            <option value="20:45">20:45</option>
                        </select></td></tr>
                <tr><td>Sala: </td><td><input type="text" class="form-control" name="sala" size="75" value="S1B1"></td></tr>
                <tr><td>Observacao: </td><td><input type="text" class="form-control" name="observacao" size="75" value="Nd"></td></tr>
               <tr><td></td><td align="right"><input type="submit" name="cadusu" id="cadusu" value="Avançar" class="btn-info"></td></tr>
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