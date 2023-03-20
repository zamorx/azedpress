<?php
$alertbag = 0;
?>

<?php foreach ($this->model->Listar() as $r) : ?>
  
  <?php if ($r->courierid == 7) : ?>
      <?php $alertbag++ ?>
  <?php endif; ?> 


<?php endforeach; ?>