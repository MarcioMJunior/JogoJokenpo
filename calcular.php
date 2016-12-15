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

            //função de calcular o vencedor está no final do documento
            $resultado = calcular($p1, $p2, $n1, $n2);
        ?>
    </head>
    <body>
        <section class="margem" align="center">
            <div class="clear"></div>
            <h1 align="center"><?php echo $resultado;?></h1>
            <div class="clear2"></div>
            <?php if ($resultado === $n1." Venceu!"){ ?>
                <img src="img/jogador1.png">
            <?php }else if($resultado === "Jogo Empatado!"){ ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/jogador1.png">
                    </div>
                    <div class="col-md-6">
                        <img src="img/jogador2.png" height="291" width="200">
                    </div>
                </div>
            <?php }else{ ?>
                <img src="img/jogador2.png" height="291" width="200">
            <?php } ?>
            <div class="clear2"></div>
            <a href="index.html">
                <button class="btn btn-primary btn-lg">
                    Jogar Novamente!
                </button>
            </a>
        </section>

        <?php
            //calcula o vencedor do jogo
            function calcular($p1, $p2, $n1, $n2){
                if ($p1 === $p2)
                    return ("Jogo Empatado!");
                else if ($p1 === "pedra") {
                    if ($p2 === "tesoura")
                        return ($n1." Venceu!");
                    else {
                        return ($n2." Venceu!");
                    }
                }
                else if ($p1 === "papel") {
                    if ($p2 === "pedra")
                        return ($n1." Venceu!");
                    else {
                        return ($n2." Venceu!");
                    }
                }
                else if ($p1 === "tesoura") {
                    if ($p2 === "pedra")
                        return ($n2." Venceu!");
                    else {
                        return ($n1." Venceu!");
                    }
                }
            }
        ?>
    </body>
</html>