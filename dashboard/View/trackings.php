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
            <h1 class="h3 display">Seguimiento de paquetes</h1>
            <div class="well well-sm text-right">
                <?php if ($userDetails->idrol == 1) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Trackings&a=Crud">Agregar Seguimiento</a>
                <?php elseif ($userDetails->idrol == 2) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Trackings&a=Crud">Prealertar Paquete</a>
                <?php endif; ?>
            </div>
        </header>
        <!-- TABLAS CLIENTES -->
        <!-- BEGIN TABALA DE ENVIOS EN CAMINO  -->
        <?php if ($userDetails->idrol == 2) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Paquetes en camino</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>AZ Tracking</th>
                                            <th>Descripción</th>
                                            <th>Servicio</th>
                                            <th>Peso</th>
                                            <th>Entrega prevista</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <?php if ($userDetails->uid == $r->uid) : ?>
                                                <?php if ($r->statusid < 6) : ?>
                                                    <tr>

                                                        <td>AZ<?php echo $r->trackingid; ?></td>
                                                        <td><?php echo $r->description; ?></td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        <td><?php echo $r->weight; ?></td>

                                                        <!--
                                                            <td>
                                                                <?php if ($r->serviceid == 1) : ?>
                                                                    $<?php echo $r->weight * 8; ?>

                                                                <?php elseif ($r->serviceid == 2) : ?>
                                                                    $<?php echo $r->weight * 3; ?>
                                                                <?php endif ?>
                                                            </td
                                                            >-->
                                                        <td><?php $origDate = "$r->estdate";
                                                            $newDate = date("d M", strtotime($origDate));
                                                            echo $newDate; ?></td>
                                                        <td><span class="<?php echo $r->statuscode; ?>"><?php echo $r->statusname; ?></span></td>
                                                        <td>
                                                        </td>

                                                    </tr>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END TABALA DE ENVIOS EN CAMINO  -->

            <!-- BEGIN TABALA DE ENVIOS ENTREGADOS  -->

            <div class="row">
                <div class="col-lg-12">
                    <div id="new-updates" class="card updates recent-updated">
                        <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                            <h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">Paquetes entregados</a></h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                        </div>

                        <div class="card-body collapse hide" id="updates-box" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>AZ Tracking</th>
                                            <th>Descripción</th>
                                            <th>Servicio</th>
                                            <th>Peso</th>
                                            <th>Estado</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <?php if ($userDetails->uid == $r->uid) : ?>
                                                <?php if ($r->statusid == 6) : ?>

                                                    <tr>

                                                        <td>AZ<?php echo $r->trackingid; ?></td>
                                                        <td><?php echo $r->description; ?></td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        <td><?php echo $r->weight; ?></td>
                                                        <!--
                                                            <td>
                                                                <?php if ($r->serviceid == 1) : ?>
                                                                    $<?php echo $r->weight * 8; ?>

                                                                <?php elseif ($r->serviceid == 2) : ?>
                                                                    $<?php echo $r->weight * 3; ?>
                                                                <?php endif ?>
                                                            </td>
                                                            -->
                                                        <td><a class="<?php echo $r->statuscode; ?>"><?php echo $r->statusname; ?></a></td>
                                                        </td>

                                                    </tr>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END TABALA DE ENVIOS ENTREGADOS  -->



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
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Cliente</th>
										<th>Tracking ID</th>
										<th>Estado</th>
										<th>Servicio</th>
										<th>Fecha</th>
										<th>Acciones</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($this->model->Listar() as $r) : ?>
                                    <?php if ($r->statusid < 6) : ?>
									<tr>
										<td>
											<?php echo $r->name; ?></h6>
												
										</td>
										<td>AZ<?php echo $r->trackingid; ?></td>
										<td><div class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx2 bx2-circle me-12"></i><?php echo $r->statusname; ?></div></td>
										<td><?php echo $r->servicename; ?></td>
										<td><?php $newDate = date("F d, Y", strtotime($r->estdate));
                                                        echo $newDate; ?></td>
										<td>
                                            <?php if ($r->statusid < 5) : ?>
                                            <a href="?c=Trackings&a=Crud&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-success btn-sm radius-30 px-4">Editar</a>
                                            <?php endif; ?>
                                            <?php if ($r->statusid == 5) : ?>
                                                <a href="?c=Notify&a=Index&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-info btn-sm radius-30 px-4">Notificar</a>
                                            <?php endif; ?>
                                        </td>
										<td>
                                            <a href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>" class="btn btn-outline-info btn-sm radius-30 px-4">Estado</a>
										</td>
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
										<th>Warehouse</th>
                                        <th>Delivered</th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($this->model->Listar() as $r) : ?>
                                    <?php if ($r->statusid == 6) : ?>
									<tr>
										<td>
											<?php echo $r->name; ?></h6>
												
										</td>
										<td><?php echo $r->whtracking; ?></td>
										<td><div class="badgex rounded-pill2 text-<?php echo $r->statuscode; ?> bg-light-<?php echo $r->statuscode; ?> p-21 text-uppercase px-50"><i class="bx2 bx2-circle me-12"></i><?php echo $r->statusname; ?></div></td>
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
    </div>
</section>