<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Seguimiento de paquetes</li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Sus paquetes</h1>
            <div class="well well-sm text-right">
                <?php if ($userDetails->idrol == 1) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Trackings&a=Crud">Agregar Seguimiento</a>
                <?php elseif ($userDetails->idrol == 2) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Trackings&a=Crud">Prealertar Paquete</a>
                <?php endif; ?>
            </div>
        </header>
        <!-- BEGIN CLIENTS ORDERS -->

        <?php if ($userDetails->idrol == 2) : ?>


            <?php foreach ($this->model->Listar() as $r) : ?>
                <?php if ($userDetails->uid == $r->uid) : ?>
                    <div class="card pt-card status-card radius-5">
                        <div class="card-header">
                            Tracking # AZ<?php echo $r->trackingid; ?>
                        </div>
                        <?php if ($r->statusid < 6) : ?>
                            <div class="card-body">
                                <h5 class="card-title">Entrega estimada
                                    <?php $origDate = "$r->estdate";
                                    $newDate = date("F d", strtotime($origDate));
                                    echo $newDate; ?></h5>
                                <?php echo $r->description; ?>
                            </div>
                            <div class="card-header">
                                 <!-- BEGIN PESO -->
                                 <?php if ($r->statusid == 5) : ?>
                                    <?php if ($r->weight > 1) : ?>
                                        <?php echo $r->servicename;?><h1><?php echo $r->weight;?> lbs</h1>
                                    <?php else : ?>
                                        <?php echo $r->servicename;?><h1><?php echo $r->weight;?> lb</h1>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <!-- END PESO -->
                            </div>
                            <div class="card-body">

                                <?php if ($r->statusid == 1) : ?>
                                    <div class="pt-status-milestones" aria-label="Delivery status: Ordered; Step 1 of 4.">
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active current-label" aria-hidden="true" style="transition-duration: 250ms;">Courier</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="38">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 690ms; width: 38%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">WHS Florida</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="0">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Nicaragua</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="0">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Entregado</div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($r->statusid == 2) : ?>
                                    <div class="pt-status-milestones" aria-label="Delivery status: Shipped; Step 2 of 4.">
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="false" data-percent-complete="100">
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">Courier</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active current-label" aria-hidden="true" style="transition-duration: 250ms;">WHS Florida</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="1">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 650ms; width: 1%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Nicaragua</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="0">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Entregado</div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($r->statusid == 3) : ?>
                                    <div class="pt-status-milestones" aria-label="Delivery status: Shipped; Step 2 of 4.">
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="false" data-percent-complete="100">
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">Courier</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active current-label" aria-hidden="true" style="transition-duration: 250ms;">WHS Florida</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="55">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 650ms; width: 55%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Nicaragua</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="0">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Entregado</div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($r->statusid == 4) : ?>
                                    <div class="pt-status-milestones" aria-label="Delivery status: Shipped; Step 2 of 4.">
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="false" data-percent-complete="100">
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">Courier</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">WHS Florida</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active current-label" aria-hidden="true" style="transition-duration: 250ms;">Nicaragua</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="1">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 720ms; width: 1%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Entregado</div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($r->statusid == 5) : ?>
                                    <div class="pt-status-milestones" aria-label="Delivery status: Out for delivery; Step 3 of 4.">
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="false" data-percent-complete="100">
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">Courier</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="false" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active" aria-hidden="true" style="transition-duration: 250ms;">WHS Florida</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="true" data-last-reached="true" data-percent-complete="100">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-duration: 500ms; width: 100%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker active" style="transition-duration: 250ms;">
                                                <div class="pt-status-milestone-marker-check active" style="transition-duration: 250ms;"></div>
                                            </div>
                                            <div class="pt-status-milestone-label active current-label" aria-hidden="true" style="transition-duration: 250ms;">para Entrega</div>
                                        </div>
                                        <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="35">
                                            <div class="pt-status-milestone-bar">
                                                <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 720ms; width: 35%;"></div>
                                            </div>
                                            <div class="pt-status-milestone-marker">
                                                <div class="pt-status-milestone-marker-check"></div>
                                            </div>
                                            <div class="pt-status-milestone-label" aria-hidden="true">Entregado</div>
                                        </div>
                                    </div>

                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($r->statusid == 7) : ?>
                            <div class="card-body">
                                <h5 class="card-title text-success"><?php echo $r->statusname; ?>
                                    <?php $origDate = "$r->deliverydate";
                                    $newDate = date("F d, Y", strtotime($origDate));
                                    echo $newDate; ?></h5>
                                <?php echo $r->description; ?>
                                <p class="card-text"></p>
                                <!-- BEGIN PESO -->
                                <?php if ($r->statusid == 7) : ?>
                                    <?php if ($r->weight > 1) : ?>
                                        <?php echo $r->servicename;?><h1><?php echo $r->weight;?> lbs</h1>
                                    <?php else : ?>
                                        <?php echo $r->servicename;?><h1><?php echo $r->weight;?> lb</h1>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <!-- END PESO -->

                                <!-- BEGIN MODAL DETAILS -->

                             <a href="#" data-toggle="modal" data-target="#details" class="btn btn-primary radius-5 mt-3 px-4">Ver detalles</a>
                                

                                <div id="details" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 id="exampleModalLabel" class="modal-title">Detalles de entrega</h5>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur.</p>
                          <?php echo $r->servicename;?> 
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                         
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END MODAL DETAILS -->



                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- END CLIENTS ORDERS -->

            <!-- TABLAS ADMINISTRADOR-->
            <!-- BEGIN TABALA DE ENVIOS EN CAMINO  -->
        <?php elseif ($userDetails->idrol == 1) : ?>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <h4>Detalle de paquetes en camino</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Tracking ID</th>
                                            <th>Estado</th>
                                            <th>Servicio</th>
                                            <th>Fecha</th>
                                            <th>Acciones</th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <?php if ($r->statusid < 7) : ?>
                                                <?php if ($r->courierid < 7) : ?>
                                                    <tr>
                                                        <td>
                                                            <a href="?c=Logins&a=Packages&uid=<?php echo $r->uid; ?>"> <?php echo $r->name; ?></a>

                                                        </td>
                                                        <td>AZ<?php echo $r->trackingid; ?></td>
                                                        <td>
                                                            <?php if ($r->whtracking == null) : ?>
                                                                <div data-toggle="tooltip" data-title="<?php echo $r->couriername; ?>" data-content="<?php echo $r->couriertracking; ?>" class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx bx-circle me-12"></i><?php echo $r->statusname; ?></div>
                                                            <?php else : ?>
                                                                <?php if ($r->whtracking == $r->couriertracking) : ?>
                                                                    <div data-toggle="tooltip" data-title="JMS EXPRESS" data-content="<?php echo $r->couriertracking; ?>" class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx bx-circle me-12"></i><?php echo $r->statusname; ?></div>
                                                                <?php else : ?>
                                                                    <div data-toggle="tooltip" data-title="JMS EXPRESS" data-content="<?php echo $r->whtracking; ?>" class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx bx-circle me-12"></i><?php echo $r->statusname; ?></div>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        <td><?php $newDate = date("F d, Y", strtotime($r->estdate));
                                                            echo $newDate; ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($r->statusid < 5) : ?>
                                                                <a href="?c=Trackings&a=Crud&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-primary btn-sm radius-30 px-4">Editar</a>
                                                            <?php endif; ?>
                                                            <?php if ($r->statusid == 5) : ?>
                                                                <a href="?c=Notify&a=Index&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-info btn-sm radius-30 px-4">Notificar</a>
                                                            <?php endif; ?>
                                                            <?php if ($r->statusid == 6) : ?>
                                                                <?php if ($r->serviceid == 1) : ?>
                                                                    <a href="#" class="btn btn-outline-info btn-sm radius-30 px-4">$<?php echo $r->weight*6 ?>.00</a>
                                                                <?php elseif ($r->serviceid == 2) : ?>
                                                                    <a href="#" class="btn btn-outline-info btn-sm radius-30 px-4">$<?php echo $r->weight*2 ?>.00</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($r->statusid < 6) : ?>
                                                                <a href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-info btn-sm radius-30 px-4">Estado</a>
                                                            <?php elseif ($r->statusid == 6) : ?>
                                                                <a href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-info btn-sm radius-30 px-4">Pagar</a>
                                                            <?php endif; ?>

                                                        </td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <div id="new-updates" class="card updates recent-updated">
                        <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                            <h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">Detalle de paquetes entregados</a></h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                        </div>

                        <div class="card-body collapse hide" id="updates-box" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Tracking ID</th>
                                            <th>Estado</th>
                                            <th>Servicio</th>
                                            <th>WHS Florida</th>
                                            <th>Delivered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <?php if ($r->statusid == 7) : ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $r->name; ?></h6>

                                                    </td>
                                                    <td><?php echo $r->whtracking; ?></td>
                                                    <td>
                                                        <div class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx bx-circle me-12"></i><?php echo $r->statusname; ?></div>
                                                    </td>
                                                    <td><?php echo $r->servicename; ?></td>
                                                    <td><?php $newDate = date("F d, Y", strtotime($r->whdate));
                                                        echo $newDate; ?>
                                                    </td>
                                                    <td><?php $newDate = date("F d, Y", strtotime($r->deliverydate));
                                                        echo $newDate; ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- BEGIN TABLA JMS -->

    

        <?php if ($userDetails->idrol == 3) : ?>
            <section >
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
              <?php foreach ($this->model->Listar() as $r) : ?>
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
              <?php foreach ($this->model->Listar() as $r) : ?>
                <? if ($r->statusid == 3) : ?>
              <li>
                <div class="row">
                  <div class="col-4 date-holder text-right">
                    <div class="icon"><i class="icon-clock"></i></div>
                    <div class="date"><span><?php echo $r->servicename ?></span><span class="text-info"> <?php $origDate = "$r->whdate"; $newDate = date("d M", strtotime($origDate)); echo $newDate;?></span></div>
                  </div>
                  <div class="col-8 content"><strong><?php echo $r->name ?></strong>
                    <p><?php echo $r->whtracking ?></p>
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
            <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Entregado - Pendiente de pago </a></h2>
            <div class="right-column">
              <a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
          <div id="feeds-box" role="tabpanel" class="collapse show">
            <div class="feed-box">
              <ul class="feed-elements list-unstyled">
                <!-- List-->
                <?php foreach ($this->model->Listar() as $r) : ?>
                  <? if ($r->statusid == 5 || $r->statusid == 6 )  : ?>
                    <? if ($r->serviceid == 1) : ?>
                <li class="clearfix">
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="assets/img/<?php echo $r->username ?>.jpg" alt="person" class="img-fluid rounded-circle"></a>
                      <div class="content"><strong><?php echo $r->name ?></strong>
                      <!--<small><?php echo $r->description ?></small>-->
                        <div class="full-date"><small><?php echo $r->servicename ?> - <?php echo $r->whtracking ?></small></div>
                      </div>
                    </div>
                    <div class="date"><small>$<?php echo $r->weight*6 ?></small></div>
                  </div>
                </li>

                <? elseif ($r->serviceid == 2) : ?>
                <li class="clearfix">
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="assets/img/<?php echo $r->username ?>.jpg" alt="person" class="img-fluid rounded-circle"></a>
                      <div class="content"><strong><?php echo $r->name ?></strong>
                      <!--<small><?php echo $r->description ?></small>-->
                        <div class="full-date"><small><?php echo $r->servicename ?> - <?php echo $r->whtracking ?></small></div>
                      </div>
                    </div>
                    <div class="date"><small>$<?php echo $r->weight*2 ?></small></div>
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
</section>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <h4>Detalle de paquetes en camino a Warehouse</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Tracking ID</th>
                                            <th>Estado</th>
                                            <th>Servicio</th>
                                            
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <?php if ($r->statusid < 2) : ?>
                                                <?php if ($r->courierid < 7) : ?>
                                                    <tr>
                                                        <td>
                                                         <?php echo $r->name; ?>

                                                        </td>
                                                        <td><?php echo $r->couriertracking; ?></td>
                                                        <td>
                                                            
                                                                <div data-toggle="tooltip" class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx bx-circle me-12"></i><?php echo $r->statusname; ?></div>
                                                           
                                                        </td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        
                                                        <td>
                                                            <a href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-info btn-sm radius-30 px-4">Estado</a>
                                                        </td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        <?php endif; ?>

        <!-- END TABLA JMS -->
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').popover()
    })
</script>