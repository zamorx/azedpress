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
                    <?php if($userDetails->idrol == 1) : ?>
                        <a class="btn btn-primary" href="?c=Trackings&a=Crud">Agregar Seguimiento</a>
                    <?php elseif($userDetails->idrol == 2) : ?>
                        <a class="btn btn-primary" href="#">Prealertar Paquete</a>
                    <?php endif; ?>
                </div>
                </header>
                <!-- TABLAS CLIENTES -->
                <!-- BEGIN TABALA DE ENVIOS EN CAMINO  -->
                <?php if($userDetails->idrol == 2 ) : ?> 
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
                                                        <?php if($userDetails->uid == $r->uid ) : ?>
                                                                <?php if($r->statusid < 6 ) : ?>
                                                        <tr>
                                                            
                                                            <td>AZ<?php echo $r->trackingid; ?></td>
                                                            <td><?php echo $r->description; ?></td>
                                                            <td><?php echo $r->servicename; ?></td>
                                                            <td><?php echo $r->weight; ?></td>

                                                            <!--
                                                            <td>
                                                                <?php if($r->serviceid == 1):?>
                                                                    $<?php echo $r->weight*8;?>

                                                                <?php elseif($r->serviceid == 2):?>
                                                                    $<?php echo $r->weight*3;?>
                                                                <?php endif ?>
                                                            </td
                                                            >-->
                                                            <td><?php $origDate = "$r->estdate"; $newDate = date("d M", strtotime($origDate)); echo $newDate;?></td>
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
                                                        <?php if($userDetails->uid == $r->uid ) : ?>
                                                                <?php if($r->statusid == 6 ) : ?>
                                                        
                                                        <tr>
                                                            
                                                            <td>AZ<?php echo $r->trackingid; ?></td>
                                                            <td><?php echo $r->description; ?></td>
                                                            <td><?php echo $r->servicename; ?></td>
                                                            <td><?php echo $r->weight; ?></td>
                                                            <!--
                                                            <td>
                                                                <?php if($r->serviceid == 1):?>
                                                                    $<?php echo $r->weight*8;?>

                                                                <?php elseif($r->serviceid == 2):?>
                                                                    $<?php echo $r->weight*3;?>
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
                <?php elseif($userDetails->idrol == 1 ) : ?>
                    <!-- TABLA PAQUETES EN CAMINO -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Detalle de paquetes en camino</h4>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Cliente</th>
                                                    <th>Courier Tracking</th>
                                                    <th>Descripción</th>
                                                    <th>Servicio</th>
                                                    <th>Peso</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->model->Listar() as $r) : ?>
                                                    <?php if($r->statusid < 6 ) : ?>
                                                    <tr>
                                                        <td><a href="?c=Trackings&a=Crud&trackingid=<?php echo $r->trackingid; ?>"><?php echo $r->name; ?></a></td>
                                                        <td>
                                                            <?php if ($r->statusid == 1) {
                                                                echo $r->couriertracking;} 
                                                                else { echo $r->whtracking;}
                                                            ?>
                                                        </td>
                                                        <td><?php echo $r->description; ?></td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        <td><?php echo $r->weight; ?> lbs</td>

                                                        <!-- 
                                                                INICIO CODIGO PARA CALCULAR COSTO DE ENVIO
                                                        <td>
                                                                <?php if($r->serviceid == 1):?>
                                                                    $<?php echo $r->weight*8;?>

                                                                <?php elseif($r->serviceid == 2):?>
                                                                    $<?php echo $r->weight*3;?>
                                                                <?php endif ?>
                                                        </td>
                                                                FIN CODIGO PARA CALCULAR COSTO DE ENVIO
                                                        -->

                                                        <td><i class="glyphicon glyphicon-edit"><a class="<?php echo $r->statuscode; ?>" href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>"><?php echo $r->statusname; ?></a></i></td>
                                                          
                                                        <td>
                                                            <?php if($r->statusid == 5) : ?>
                                                                <a class="btn btn-info" href="?c=Notify&a=Index&trackingid=<?php echo $r->trackingid; ?>">Notificar</a>
                                                                
                                                                
                                                            <?php endif ?>
                                                        </td>
                                                      
                                                    </tr>
                                                    <?php endif ;?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BEGIN TABLA DE PAQUETES ENTREGADOS -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div id="new-updates" class="card updates recent-updated">
                                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                                <h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">Detalle de paquetes entregados</a></h4><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                                </div>

                                <div class="card-body collapse hide" id="updates-box" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Cliente</th>
                                                    <th>Courier Tracking</th>
                                                    <th>Descripción</th>
                                                    <th>Servicio</th>
                                                    <th>Peso</th>
                                                    <th>Estado</th>
                                                    <th>Fecha de Entrega</th>
                                                    <!--
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                            -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->model->Listar() as $r) : ?>
                                                    <?php if($r->statusid == 6 ) : ?>
                                                    <tr>
                                                        <td><?php echo $r->name; ?></td>
                                                        <td><?php echo $r->whtracking; ?></td>
                                                        <td><?php echo $r->description; ?></td>
                                                        <td><?php echo $r->servicename; ?></td>
                                                        <td><?php echo $r->weight; ?> lbs</td>

                                                        <!-- CODIGO PARA CALCULAR COSTO DE ENVIO
                                                        <td>
                                                                <?php if($r->serviceid == 1):?>
                                                                    $<?php echo $r->weight*8;?>

                                                                <?php elseif($r->serviceid == 2):?>
                                                                    $<?php echo $r->weight*3;?>
                                                                <?php endif ?>
                                                        </td>-->

                                                        <td><i class="glyphicon glyphicon-edit"><a class="<?php echo $r->statuscode; ?>" href="?c=Trackings&a=Status&trackingid=<?php echo $r->trackingid; ?>"><?php echo $r->statusname; ?></a></i></td>
                                                        <td>
                                                        <?php $newDate = date("d/m/Y", strtotime($r->deliverydate)); echo $newDate;?>
                                                        </td>

                                                        <!--
                                                        <td>
                                                            <?php if($userDetails->idrol == 1) : ?>
                                                                <i class="glyphicon glyphicon-edit"><a class="text-info" href="?c=Trackings&a=Crud&trackingid=<?php echo $r->trackingid; ?>"> Editar</a></i>
                                                            <?php endif; ?>
                                                        </td>
                                                        
                                                        // NOTIFICACIONES
                                                        <td>
                                                            <i class="glyphicon glyphicon-remove"><a class="text-info" href="?c=Notify&a=Index&trackingid=<?php echo $r->trackingid; ?>"> Notificar</a></i>
                                                        </td>
                                                         
                                                    
                                                        <td>
                                                            <?php if($userDetails->idrol == 1) : ?>
                                                                <i class="glyphicon glyphicon-remove"><a class="text-danger" href="?c=Trackings&a=Eliminar&trackingid=<?php echo $r->trackingid; ?>"> Archivar</a></i>
                                                            <?php endif; ?>
                                                        </td>
                                                            -->
                                                        
                                                        
                                                        
                                                    </tr>
                                                    <?php endif ; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TABLA DE PAQUETES ENTREGADOS -->
                <?php endif; ?>
            </div>
        </section>