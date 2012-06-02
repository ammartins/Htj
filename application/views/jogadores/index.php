<?php foreach ($jogadores as $jogadores_item): ?>
  <h5><a href="jogadore/<?php echo $jogadores_item['id'] ?>"><?php echo $jogadores_item['name'] ?></a></h5>
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
