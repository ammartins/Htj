<?php foreach ($jogadores as $jogadores_item): ?>
  <h2><?php echo $jogadores_item['name'] ?></h2>
  <?php 
    if ( $jogadores_item['info'] ) {
      print_r(addslashes($jogadores_item['info']));
    }
  ?>
  <p><a href="jogadore/<?php echo $jogadores_item['id'] ?>">View Last Games</a></p>
<?php endforeach ?>
