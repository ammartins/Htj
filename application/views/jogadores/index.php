<?php die('By My Hand') ?>
<?php $index = 1 ?>
<?php foreach ($jogadores as $jogadores_item): ?>
  <h5><a href="jogadores/<?php echo $jogadores_item['id'] ?>"><?php echo $index++ . ' - ' . $jogadores_item['name'] ?></a></h5>
  <?php 
    if ( $jogadores_item['info'] ) {
      print_r($jogadores_item['info']);
    }
  ?>
  <ul>
  <?php foreach ($jogadores_item['jogos'] as $jogos): ?>
    <li><?php echo $jogos['position'].' : '.$jogos['stars'] ?></li>
  <?php endforeach ?>
  </ul>
<?php endforeach ?>
