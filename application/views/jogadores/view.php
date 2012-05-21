<?php
foreach ( $jogos as $jogo ) {
  echo "<div style='border: 1px solid green; width: 200px; padding: 5px;'>";
  echo $jogo['position']."<br />";
  echo "Estrelas:  ".$jogo['stars']." - Golos: ".$jogo['scored']."<br />";
  echo "</div>";
}
echo "<a href='http://localhost/contas/index.php/jogadores/'>Back</a>";
echo "<br />";
echo "<br />";
