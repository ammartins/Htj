<?php
  if ( !empty($jogos) ) {
    foreach ( $jogos as $jogo ) {
      echo "<a href='".$jogo['gameId']."'>Jogo em ".$jogo['date']."</a><br />";
      echo $jogo['score']."<br />";
    }
  } else {
 ?>
    <h3 class="game_info"><?php echo $jogo[0][0]['date'] ?> Resultado : <?php echo $jogo[0][0]['score'] ?></h3>
 <?php
    foreach ( $jogo[1] as $jogadore ) {
      echo "<div>Jogadore <a href='/jogadores/jogadore/".$jogadore['playerId']."'> Nome do gajo <a/>Posi&ccedil;&atilde;o : ".$jogadore['position']." : Estrelas : <b>".$jogadore['stars']."</b></div>";
    }
  }
