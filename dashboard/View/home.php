<?php require_once('dashboard.php'); ?>

<!-- Counts Section -->
<section class="dashboard-counts section-padding">
  <div class="container-fluid">
    <div class="row">
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="name"><strong class="text-uppercase">Clientes</strong><span>Registrados</span>
            <div class="count-number"><?php echo $client ?></div>
          </div>
        </div>
      </div>
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-plane"></i></div>
          <div class="name"><strong class="text-uppercase">Aéreos</strong><span>Pendientes</span>
            <div class="count-number"><?php echo $airpending ?></div>
          </div>
        </div>
      </div>
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-ship"></i></div>
          <div class="name"><strong class="text-uppercase">Marítimos</strong><span>Pendientes</span>
            <div class="count-number"><?php echo $marpending ?></div>
          </div>
        </div>
      </div>
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-plane"></i></div>
          <div class="name"><strong class="text-uppercase">Aéreos</strong><span>Entregados</span>
            <div class="count-number"><?php echo $airdelivered ?></div>
          </div>
        </div>
      </div>
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-ship"></i></div>
          <div class="name"><strong class="text-uppercase">Maritimos</strong><span>Entregados</span>
            <div class="count-number"><?php echo $mardelivered ?></div>
          </div>
        </div>
      </div>
      <!-- Count item widget-->
      <div class="col-xl-2 col-md-4 col-6">
        <div class="wrapper count-title d-flex">
          <div class="icon"><i class="fa fa-usd"></i></div>
          <div class="name"><strong class="text-uppercase">Utilidad</strong><span>Total</span>
            <div class="count-number"><?php echo $totalearned ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Header Section-->
<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
      <!-- To Do List-->
      <div class="col-lg-3 col-md-6">
        <div class="card to-do">
          <h2 class="display h4">Actividades</h2>
          <p>Lista de tareas y actividades pendientes.</p>
          <ul class="check-lists list-unstyled">
            <li class="d-flex align-items-center">
              <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
              <label for="list-1">Sequimiento paquete Gloria Cardenal</label>
            </li>
            <li class="d-flex align-items-center">
              <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
              <label for="list-2">Sequimiento paquete Henry Valle</label>
            </li>
            <li class="d-flex align-items-center">
              <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
              <label for="list-3">Preparar Oferta iPads Steven Ortiz</label>
            </li>
            <li class="d-flex align-items-center">
              <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
              <label for="list-4">Preparar Oferta Tacos de Billar Carlos Gonzalez</label>
            </li>
          </ul>
        </div>
      </div>
      <!-- Pie Chart-->
      <div class="col-lg-3 col-md-6">
        <div class="card project-progress">
          <h2 class="display h4">Progreso de paquetería</h2>
          <p>Detalle de paqueteria según estado actual.</p>
          <div class="pie-chart">
            <canvas id="pieChart" width="300" height="300"> </canvas>
          </div>
        </div>
      </div>
      <!-- Line Chart -->
      <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
        <div class="card sales-report">
          <h2 class="display h4">Gráfica de envíos realizados (Aéreos/Marítimos)</h2>
          <p>Reporte 2do Semestre, total libras entregadas por mes.</p>
          <div class="line-chart">
            <canvas id="lineCahrt"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Statistics Section-->
<section class="statistics">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-4">
        <!-- Income-->
        <div class="card income text-center">
          <div class="icon"><i class="icon-line-chart"></i></div>
          <div class="number">$ <?php echo $totalincome ?></div><strong class="text-primary">Ingreso Total</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Monthly Usage-->
        <div class="card data-usage">
          <h2 class="display h4">Monthly Usage</h2>
          <div class="row d-flex align-items-center">
            <div class="col-sm-6">
              <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
            </div>
            <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- User Actibity-->
        <div class="card user-activity">
          <h2 class="display h4">User Activity</h2>
          <div class="number">1,138.88</div>
          <h3 class="h4 display">Social Users</h3>
          <div class="progress">
            <div role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
          </div>
          <div class="page-statistics d-flex justify-content-between">
            <div class="page-statistics-left"><span>Pages Visits</span><strong>857</strong></div>
            <div class="page-statistics-right"><span>New Visits</span><strong>73.4%</strong></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Updates Section -->
<section class="mt-30px mb-30px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <!-- Warehouse Widget          -->
        <div id="new-updates" class="card updates recent-updated">
          <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">Warehouse</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
          </div>
          <div id="updates-box" role="tabpanel" class="collapse show">
            <ul class="news list-unstyled">
              <!-- Item-->
              <?php foreach ($this->model->trackingList() as $r) : ?>
                <? if ($r->statusid == 2) : ?>
                  <li class="d-flex justify-content-between">
                    <div class="left-col d-flex">
                      <div class="icon"><i class="icon-mail"></i></div>
                      <div class="title"><strong><?php echo $r->name ?></strong>
                        <p>Paquete entregado por <?php echo $r->couriername ?></p>
                      </div>
                    </div>
                    <div class="right-col text-right">
                      <div class="update-date">
                        <?php $origDate = "$r->whdate"; $newDate = date("d", strtotime($origDate)); echo $newDate;?><span class="month">
                        <?php $origDate = "$r->whdate"; $newDate = date("M", strtotime($origDate)); echo $newDate;?></span>
                      </div>
                    </div>
                  </li>
                <? endif ?>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <!-- Warehouse Widget End-->
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Recent Activities Widget      -->
        <div id="recent-activities-wrapper" class="card updates activities">
          <div id="activites-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box">En camino</a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
          </div>
          <div id="activities-box" role="tabpanel" class="collapse show">
            <ul class="activities list-unstyled">
              <!-- Item-->
              <?php foreach ($this->model->trackingList() as $r) : ?>
                <? if ($r->statusid == 3) : ?>
              <li>
                <div class="row">
                  <div class="col-4 date-holder text-right">
                    <div class="icon"><i class="icon-clock"></i></div>
                    <div class="date"><span><?php echo $r->servicename ?></span><span class="text-info"> <?php $origDate = "$r->whdate"; $newDate = date("d M", strtotime($origDate)); echo $newDate;?></span></div>
                  </div>
                  <div class="col-8 content"><strong><?php echo $r->name ?></strong>
                    <p><?php echo $r->description ?></p>
                  </div>
                </div>
              </li>
              <?php endif ?>
              <?php endforeach; ?> 
              <!-- Item-->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Para Entrega Widget-->
        <div id="daily-feeds" class="card updates daily-feeds">
          <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Listo para entrega </a></h2>
            <div class="right-column">
              <div class="badge badge-primary">
                <?php if($entrega == 1):?>
                  <?php echo $entrega ?> paquete
                    <? endif ?>
                    <?php if($entrega > 1):?>
                  <?php echo $entrega ?> paquetes
                    <? endif ?>
                    <?php if($entrega < 1):?>
                  <?php echo "Ningún paquete" ?>
                    <? endif ?>
                  </div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
          <div id="feeds-box" role="tabpanel" class="collapse show">
            <div class="feed-box">
              <ul class="feed-elements list-unstyled">
                <!-- List-->
                <?php foreach ($this->model->trackingList() as $r) : ?>
                  <? if ($r->statusid == 5) : ?>
                    <? if ($r->serviceid == 1) : ?>
                <li class="clearfix">
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="assets/img/<?php echo $r->username ?>.jpg" alt="person" class="img-fluid rounded-circle"></a>
                      <div class="content"><strong><?php echo $r->name ?></strong>
                      <!--<small><?php echo $r->description ?></small>-->
                        <div class="full-date"><small><?php echo $r->servicename ?> - AZ<?php echo $r->trackingid ?></small></div>
                      </div>
                    </div>
                    <div class="date"><small>$<?php echo $r->weight*8 ?></small></div>
                  </div>
                </li>

                <? elseif ($r->serviceid == 2) : ?>
                <li class="clearfix">
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="assets/img/<?php echo $r->username ?>.jpg" alt="person" class="img-fluid rounded-circle"></a>
                      <div class="content"><strong><?php echo $r->name ?></strong>
                      <!--<small><?php echo $r->description ?></small>-->
                        <div class="full-date"><small><?php echo $r->servicename ?> - AZ<?php echo $r->trackingid ?></small></div>
                      </div>
                    </div>
                    <div class="date"><small>$<?php echo $r->weight*3 ?></small></div>
                  </div>
                </li>
                <? endif ?>
                <? endif ?>
                <?php endforeach; ?> 
              </ul>
            </div>
          </div>
        </div>
        <!-- Para Entrega Widget End-->
      </div>
      
    </div>
  </div>
</section>