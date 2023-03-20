<?php
$marpending = 0;
$mardelivered = 0;
$airpending = 0;
$airdelivered = 0;
$client = 0;
$airearned = 0;
$marearned = 0;
$totalearned = 0;
$airincome = 0;
$marincome = 0;
$totalincome = 0;
$entrega = 0;
?>

<?php foreach ($this->model->clientList() as $r) : ?>
  <?php if ($r->idrol == 2) : ?>
    <?php $client++ ?> 
  <?php endif; ?> 
<?php endforeach; ?>

<?php foreach ($this->model->trackingList() as $r) : ?>
  
    <?php if ($r->serviceid == 1) : ?>
      <?php if ($r->statusid < 6) : ?>
          <?php $airpending++ ?>
      <?php elseif ($r->statusid == 6) : ?>
        <?php $airdelivered++ ?>
        <?php $airearned = $airearned + ($r->weight * 2) ?>
        <?php $airincome = $airincome + $r->weight * 8 ?>
      <?php endif; ?> 

    <?php elseif ($r->serviceid == 2) : ?>
        <?php if ($r->statusid < 6) : ?>
          <?php $marpending++ ?>
        <?php elseif ($r->statusid == 6) : ?>
          <?php $mardelivered++ ?>
          <?php $marearned = $marearned + ($r->weight * 1) ?>
          <?php $marincome = $marincome + $r->weight * 3 ?>
        <?php endif; ?> 
    <?php endif; ?>   
    <?php $totalearned = $marearned + $airearned; ?>
    <?php $totalincome = $airincome + $marincome; ?>
    
<?php endforeach; ?>


<?php foreach ($this->model->trackingList() as $r) : ?>
  
    <?php if ($r->statusid == 5) : ?>
        <?php $entrega++ ?>
    <?php endif; ?> 

  
<?php endforeach; ?>