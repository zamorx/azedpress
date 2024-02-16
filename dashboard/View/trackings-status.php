<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="?c=Trackings">Seguimiento de paquetes</a></li>
            <li class="breadcrumb-item active">AZ<?php echo $alm->trackingid != null ? $alm->trackingid  : 'Nuevo Registro'; ?></li>
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
                        <h4>AZ<?php echo $alm->trackingid != null ? $alm->trackingid : 'Nuevo Registro'; ?></h4>
                    </div>

                    <div class="card-body">
                        <p>Complete el formulario con los datos solicitados.</p>
                        <form id="tracking" action="?c=Trackings&a=StatusChange" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="trackingid" value="<?php echo $alm->trackingid; ?>" />

                        <?php if($alm->statusid == 1 ) : ?>
                            <div class="form-group">
                                <label>Estado de paquete</label>
                                <select id="statusid" name="statusid" value="<?php echo $alm->statusname; ?>" class="form-control">
                                    <option value="<?php echo $alm->statusid; ?>"><?php echo $alm->statusid != null ? $alm->statusname : 'Seleccione un cliente'; ?></option>
                                    <option value="2">en Warehouse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Warehouse Tracking</label>
                                <input type="text" name="whtracking" class="form-control" placeholder="Escriba numero de tracking warehouse" data-validacion-tipo="requerido|min:8" />
                            </div>
                            <div class="form-group">
                                <label>Fecha Warehouse</label>
                                <input type="date" name="whdate" class="form-control" placeholder="Fecha de entrega en Warehouse" data-validacion-tipo="requerido|date" />
                            </div>
                        <?php endif; ?>

                            

                        <?php if($alm->statusid == 2 ) : ?>
                            <div class="form-group">
                                <label>Estado de paquete</label>
                                <select id="statusid" name="statusid" value="<?php echo $alm->statusname; ?>" class="form-control">
                                    <option value="<?php echo $alm->statusid; ?>"><?php echo $alm->statusid != null ? $alm->statusname : 'Seleccione un cliente'; ?></option>
                                    <option value="3">en Camino</option>
                                </select>
                                <input type="hidden" name="whdate" value="<?php echo $alm->whdate; ?>"/>
                                <input type="hidden" name="whtracking" value="<?php echo $alm->whtracking; ?>" />
                            </div>
                        <?php endif; ?>

                        <?php if($alm->statusid == 3 ) : ?>
                            <div class="form-group">
                                <label>Estado de paquete</label>
                                <select id="statusid" name="statusid" value="<?php echo $alm->statusname; ?>" class="form-control">
                                    <option value="<?php echo $alm->statusid; ?>"><?php echo $alm->statusid != null ? $alm->statusname : 'Seleccione un cliente'; ?></option>
                                    <option value="4">en Aduanas</option>
                                </select>
                            </div>
                            <input type="hidden" name="whdate" value="<?php echo $alm->whdate; ?>"/>
                            <input type="hidden" name="whtracking" value="<?php echo $alm->whtracking; ?>" />

 
                        <?php endif; ?>

                        <?php if($alm->statusid == 4 ) : ?>
                            <div class="form-group">
                                <label>Estado de paquete</label>
                                <select id="statusid" name="statusid" value="<?php echo $alm->statusname; ?>" class="form-control">
                                    <option value="<?php echo $alm->statusid; ?>"><?php echo $alm->statusid != null ? $alm->statusname : 'Seleccione un cliente'; ?></option>
                                    <option value="5">para Entrega</option>
                                </select>
                            </div>
                            <input type="hidden" name="whdate" value="<?php echo $alm->whdate; ?>"/>
                            <input type="hidden" name="whtracking" value="<?php echo $alm->whtracking; ?>" />

 
                        <?php endif; ?>

                        <?php if($alm->statusid == 5 ) : ?>
                            <div class="form-group">
                                <label>Estado de paquete</label>
                                <select id="statusid" name="statusid" value="<?php echo $alm->statusname; ?>" class="form-control">
                                    <option value="<?php echo $alm->statusid; ?>"><?php echo $alm->statusid != null ? $alm->statusname : 'Seleccione un cliente'; ?></option>
                                    <option value="6">Entregado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fecha de entregado</label>
                                <input type="date" name="deliverydate" value="<?php echo $alm->deliverydate; ?>" class="form-control" placeholder="Fecha de entregado" data-validacion-tipo="requerido|date" />
                            </div>
                            <input type="hidden" name="whdate" value="<?php echo $alm->whdate; ?>"/>
                            <input type="hidden" name="whtracking" value="<?php echo $alm->whtracking; ?>" />
                        <?php endif; ?>
                           
                            
                            <div class="text-right">
                                <a class="btn btn-danger radius-5 px-4" href="?c=Trackings">Cancel</a>
                                <button class="btn btn-primary radius-5 px-4">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#tracking").submit(function() {
            return $(this).validate();
        });
    })
</script>