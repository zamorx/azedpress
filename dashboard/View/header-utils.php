<?php
$alertbag = 0;
?>

<?php foreach ($this->model->alertList() as $r) : ?>
  
  <?php if ($r->courierid == 7) : ?>
      <?php $alertbag++ ?>
  <?php endif; ?> 


<?php endforeach; ?>