<div id="show_error"></div>
<?php echo $status; ?>
<?php
foreach ( $jogos as $jogo ) {
  echo "<div style='border: 1px solid green; width: 200px; padding: 5px;'>";
  echo $jogo['position']."<br />";
  echo "Estrelas:  ".$jogo['stars']." - Golos: ".$jogo['scored']."<br />";
  echo "</div>";
}
?>
<a href='http://localhost/Htj/index.php/jogadores/'>Back</a>

<p>
    Check player in HT
    <a href="http://www75.hattrick.org/Club/Players/YouthPlayer.aspx?YouthPlayerID=<?php echo $jogador['id'] ?>">Haatrick Link</a>
</p>
<div id="playerID"><?php echo $jogador['id'] ?></div>

<?php
