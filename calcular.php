<!DOCTYPE html>
<html>
    <head>
        <title>JOKENPO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		
        <?php
            $p1 = $_POST['p1'];
            $p2 = $_POST['p2'];

            $n1 = $_POST['nomeJogador1'];
            $n2 = $_POST['nomeJogador2'];
			
				function resultado($p1, $p2, $n1, $n2){
					if($p1 == $p2){
					echo '
					<h1 align="center">Jogo Empatado!</h1>
					<div class="row">
					   <div class="col-md-6">
						  <img src="img/jogador1.png"><br>
						  <b>'.$n1.'</b>
					   </div>
					   <div class="col-md-6">
						  <img src="img/jogador2.png"><br>
						  <b>'.$n2.'</b>
					   </div>
					</div>
					';
					}
					elseif($p1 != $p2){
					if($p1 == 1 && $p2 == 2 || $p1 == 2 && $p2 == 3 || $p1 == 3 && $p2 == 1){
					echo '
					<h1 align="center">'.$n2.' Venceu!</h1>
					<img src="img/jogador2.png">';
					}elseif($p2 == 1 && $p1 == 2 || $p2 == 2 && $p1 == 3 || $p2 == 3 && $p1 == 1){
					echo '
					<h1 align="center">'.$n1.' Venceu!</h1>
					<img src="img/jogador1.png">';
					}
					}
				}
			
			
        ?>
    </head>
    <body>
        <section class="margem" align="center">
            <div class="clear"></div>
			
            <?php resultado($p1, $p2, $n1, $n2); ?>
                
            <div class="clear2"></div>
            <a href="index.html">
                <button class="btn btn-primary btn-lg">
                    Jogar Novamente!
                </button>
            </a>
        </section>
    </body>
</html>