<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="?c=Trackings">Seguimiento de paquetes</a></li>
            <li class="breadcrumb-item active"><?php echo $alm->trackingid != null ? $alm->name  : 'Nuevo Registro'; ?></li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display"> </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo $alm->trackingid != null ? $alm->name : 'Nuevo Registro'; ?></h4>
                    </div>
                    <div class="card-body">
                        <p>Complete el formulario con los datos solicitados.</p>

                        <!-- BEGIN AGREGAR TRACKING ADMINISTRADOR -->
                        <?php if($userDetails->idrol == 1 ) : ?> 
                        <form id="test" action="?c=Trackings&a=Guardar" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="trackingid" value="<?php echo $alm->trackingid; ?>" />
                            <div class="form-group">
                                <label>Nombre de usuario</label>

                                <select id="uid" name="uid" value="<?php echo $alm->name; ?>" class="form-control">
                                    <option value="<?php echo $alm->uid; ?>"><?php echo $alm->trackingid != null ? $alm->name : 'Seleccione un cliente'; ?></option>
                                    <?php foreach ($this->model->ListClients() as $r) : ?>
                                        <option value="<?php echo $r->uid?>"><?php echo $r->name; ?></option>
                                    <?php endforeach ?>
                                </select>

                                <!--
                                <select id="uid" name="uid" value="<?php echo $alm->name; ?>" class="form-control">
                                    <option value="<?php echo $alm->uid; ?>"><?php echo $alm->trackingid != null ? $alm->name : 'Seleccione un cliente'; ?></option>
                                    <?php while ($row1 = mysqli_fetch_array($userform)) :; ?>
                                        <option value="<?php echo $row1[0] ?>"><?php echo $row1[4] ?></option>
                                    <?php endwhile ?>
                                </select>

                                -->

                            </div>
                            <div class="form-group">
                                <label>Courier Tracking</label>
                                <input type="text" name="couriertracking" value="<?php echo $alm->couriertracking; ?>" class="form-control" placeholder="Escriba el Courier Tracking" data-validacion-tipo="requerido|min:8" />
                            </div>

                            <div class="form-group">
                                <label>Fecha estimada de entrega</label>
                                <input type="date" name="estdate" value="<?php echo $alm->estdate; ?>" class="form-control" placeholder="Fecha estimada de entrega" data-validacion-tipo="requerido|date" />
                            </div>

                            <div class="form-group">
                                <label>Nombre de Courier</label>
                                <select id="courierid" name="courierid" value="<?php echo $alm->couriername; ?>" class="form-control">
                                    <option value="<?php echo $alm->courierid; ?>"><?php echo $alm->trackingid != null ? $alm->couriername : 'Nombre de Courier'; ?></option>
                                    <?php foreach ($this->model->ListCourier() as $r) : ?>
                                        <option value="<?php echo $r->courierid?>"><?php echo $r->couriername; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" name="description" value="<?php echo $alm->description; ?>"class="form-control" placeholder="Descripción del paquete" data-validacion-tipo="requerido|min:8" />
                            </div>

                            <div class="form-group">
                                <label>Tipo de Servicio</label>
                                <select id="serviceid" name="serviceid" value="<?php echo $alm->servicename; ?>" class="form-control">
                                    <option value="<?php echo $alm->serviceid; ?>"><?php echo $alm->trackingid != null ? $alm->servicename : 'Tipo de Servicio'; ?></option>
                                    <?php foreach ($this->model->ListService() as $r) : ?>
                                        <option value="<?php echo $r->serviceid?>"><?php echo $r->servicename; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Peso</label>
                                <input type="text" name="weight" value="<?php echo $alm->weight; ?>"class="form-control" placeholder="Peso del paquete" data-validacion-tipo="requerido|min:8" />
                            </div>
                            <div class="text-right">
                                <a class="btn btn-danger" href="?c=Trackings">Cancel</a>
                                <button class="btn btn-success">Guardar</button>
                            </div>
                        </form>
                        <?php endif; ?>
                        <!-- END AGREGAR TRACKING ADMINISTRADOR -->



                        <!-- BEGIN PREALERTAR PAQUETE CLIENTE -->
                        <?php if($userDetails->idrol == 2 ) : ?> 
                        <form id="test" action="?c=Trackings&a=Guardar" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="trackingid" value="<?php echo $alm->trackingid; ?>" />
                            <div hidden="hidden" class="form-group">

                                <select id="uid" name="uid" value="<?php echo $alm->name; ?>" class="form-control">
                                    <option value="<?php echo $userDetails->uid; ?>"><?php echo $userDetails->name; ?></option>
                                </select>
                            

                            </div>
                            <div class="form-group">
                                <label>Número de tracking</label>
                                <input type="text" name="couriertracking" value="<?php echo $alm->couriertracking; ?>" class="form-control" placeholder="Escriba el número de tracking" data-validacion-tipo="requerido|min:8" />
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="estdate" value="<?php echo date('Y/m/d', strtotime('+7 days')); ?>" class="form-control" placeholder="Fecha estimada de entrega" data-validacion-tipo="requerido|date" />
                            </div>

                            <div hidden="hidden" class="form-group">
                                <select id="courierid" name="courierid" value="<?php echo $alm->couriername; ?>" class="form-control">
                                        <option value="<?php echo "6"?>"><?php echo "None"; ?></option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>Descripción del paquete</label>
                                <input type="text" name="description" value="<?php echo $alm->description; ?>"class="form-control" placeholder="Escriba la descripción de su paquete" data-validacion-tipo="requerido|min:8" />
                            </div>

                            <div class="form-group">
                                <label>Tipo de Servicio</label>
                                <select id="serviceid" name="serviceid" value="<?php echo $alm->servicename; ?>" class="form-control">
                                    <option value="<?php echo $alm->serviceid; ?>"><?php echo $alm->trackingid != null ? $alm->servicename : 'Tipo de Servicio'; ?></option>
                                    <?php foreach ($this->model->ListService() as $r) : ?>
                                        <option value="<?php echo $r->serviceid?>"><?php echo $r->servicename; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="weight" value="Undefined" class="form-control" placeholder="Peso del paquete" data-validacion-tipo="requerido|min:8" />
                            </div>
                            <div class="text-right">
                                <a class="btn btn-danger" href="?c=Trackings">Cancel</a>
                                <button class="btn btn-success">Guardar</button>
                            </div>
                        </form>

                        <?php endif; ?>

                        <!-- END PREALERTAR PAQUETE CLIENTE -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#test").submit(function() {
            return $(this).validate();
        });
    })
</script>