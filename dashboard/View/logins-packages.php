<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="?c=Logins">Clientes</a></li>
            <li class="breadcrumb-item active"><?php echo $alm->uid != null ? $alm->name  : 'Nuevo Registro'; ?></li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display"> </h1>
        </header>

        <!-- CONDICION PARA MOSTRAR U OCULTAR FORMULARIO DE EDICION -->
        <?php if ($alm->uid > 0) : ?>
            <div>
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="assets/img/<?php echo $alm->username; ?>.jpg" alt="Admin" class="rounded-circle bg-primary" width="110">
                                        <div class="mt-3">
                                            <h1><?php echo $alm->uid != null ? $alm->name : 'Nuevo Registro'; ?></h1>
                                            <p class="text-secondary mb-1"><?php echo $alm->namerol; ?></p>
                                            <p class="text-muted font-size-sm">Nicaragua</p>
                                            <button class="btn btn-primary radius-5 px-4">Follow</button>
                                            <button class="btn btn-outline-primary radius-5 px-4">Message</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php foreach ($this->model->Packages() as $r) : ?>
                                        <?php if ($alm->username == $r->username) : ?>
                                            <?php if ($r->statusid < 6) : ?>
                                            <div class="card radius-5">
                                                <div class="card-header">
                                                    Tracking # AZ<?php echo $r->trackingid; ?>
                                                </div>
                                                
                                                    <div class="card-body">
                                                        <h5 class="card-title">Entrega estimada <?php $origDate = "$r->estdate";
                                                                                                $newDate = date("F d", strtotime($origDate));
                                                                                                echo $newDate; ?></h5>
                                                        <?php echo $r->description; ?>
                                                        <p class="card-text"></p>
                                                        <?php if ($r->statusid == 5) : ?>
                                                            <a href="#" class="btn btn-primary radius-5 px-4">Factura</a>
                                                        <?php endif; ?>
                                                    </div>
                                                
                                            </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php else : ?>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4><?php echo $alm->uid != null ? $alm->name : 'Nuevo Registro'; ?></h4>
                        </div>
                        <div class="card-body">
                            <p>Complete el formulario con los datos solicitados.</p>
                            <form action="?c=Logins&a=Guardar" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="uid" value="<?php echo $alm->uid; ?>" />
                                <div class="form-group">
                                    <label>Nombre completo</label>
                                    <input type="text-box" name="name" value="<?php echo $alm->name; ?>" class="form-control" placeholder="Escriba su nombre completo" data-validacion-tipo="requerido|min:8" />
                                </div>
                                <div class="form-group">
                                    <label>Nombre de usuario</label>
                                    <input type="text-box" name="username" value="<?php echo $alm->username; ?>" class="form-control" placeholder="Escriba su nombre de usuario" data-validacion-tipo="requerido|min:8" />
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" value="<?php echo $alm->password; ?>" class="form-control" placeholder="Escriba su contraseña" data-validacion-tipo="requerido|min:8" />
                                </div>

                                <div class="form-group">
                                    <label>Rol de acceso</label>
                                    <select id="idrol" name="idrol" value="<?php echo $alm->idrol; ?>" class="form-control">
                                        <option value="<?php echo $alm->idrol; ?>"><?php echo $alm->uid != null ? $alm->namerol : 'Seleccione un rol'; ?></option>
                                        <?php foreach ($this->model->ListRol() as $r) : ?>
                                            <option value="<?php echo $r->idrol ?>"><?php echo $r->namerol; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Correo electronico</label>
                                    <input type="text-box" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Escriba su correo electronico" data-validacion-tipo="requerido|min:8" />
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text-box" name="phone" value="<?php echo $alm->phone; ?>" class="form-control" placeholder="Escriba su número de teléfono" data-validacion-tipo="requerido|min:8" />
                                </div>
                                <div class="text-right">
                                    <a class="btn btn-danger radius-5 px-4" href="?c=Logins">Cancel</a>
                                    <button class="btn btn-success radius-5 px-4">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- FIN DE LA CONDICION -->
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#frm-alumno").submit(function() {
            return $(this).validate();
        });
    })
</script>