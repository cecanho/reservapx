<?php
setcookie('dia',$_POST['dia']);
setcookie('horario',$_POST['horario']);
setcookie('sala',$_POST['sala']);
setcookie('observacao',$_POST['observacao']);

$xml = simplexml_load_file('../data/reservas.xml');
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
        <h4>Clique em <strong>Reservar Este!</strong> para reservar o equipamento.</h4>

        <form method="post" action="ciclo2.php">
            <table class="table">
                <?php
                $umarray = array();
                $i = 0;
                if(count($xml->reserva)!=0) {
                    foreach ($xml->reserva as $res) {
                        if (strcmp($res->dia, $_COOKIE['dia']) == 0 || strcmp($res->horario, $_COOKIE['horario'])) {
                            $umarray[$i] = json_decode($res->id_eqpt);
                            $i++;
                        }
                    }
				}
                $i = 0;
				$l = 0;
                $xitem = simplexml_load_file('../data/item.xml');
                foreach($xitem->item as $item){
                    if($item['id'] != $umarray[$i]){
						$dispo[$l] = $item;
						$l++;
					}
					if($item['id'] == $umarray[$i]){
						$i++;
					}					
				}
				
				foreach($dispo as $it){
				?>
                        <tr>
                            <td><?php echo $it['id'] ;?></td>
                            <td><?php echo $it->nome ;?></td>
                            <td><?php echo $it->descricao ;?></td>
                            <td align="center"><img src="<?php echo $it->imagem ;?>" width="25%"></td>
                            <td align="center"> <a href="ciclo2.php?id=<?php echo $it['id']; ?>">Reservar Este!</a>  </td>
                        </tr>
                        <?php
				}
                    ?>
                    
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