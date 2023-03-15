<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="?c=Users">Clientes</a></li>
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
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                                </svg>Website</h6>
                                            <span class="text-secondary">https://codervent.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline">
                                                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                </svg>Github</h6>
                                            <span class="text-secondary">codervent</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info">
                                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                </svg>Twitter</h6>
                                            <span class="text-secondary">@codervent</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>Instagram</h6>
                                            <span class="text-secondary">codervent</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>Facebook</h6>
                                            <span class="text-secondary">codervent</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="?c=Logins&a=Guardar" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="uid" value="<?php echo $alm->uid; ?>" />
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nombre completo</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="name" value="<?php echo $alm->name; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nombre de usuario</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="username" value="<?php echo $alm->username; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Rol de acceso</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select id="idrol" name="idrol" value="<?php echo $alm->idrol; ?>" class="form-control">
                                                    <option value="<?php echo $alm->idrol; ?>"><?php echo $alm->uid != null ? $alm->namerol : 'Seleccione un rol'; ?></option>
                                                    <?php foreach ($this->model->ListRol() as $r) : ?>
                                                        <option value="<?php echo $r->idrol ?>"><?php echo $r->namerol; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <input type="hidden" class="form-control" name="namerol" value="<?php echo $alm->namerol; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Correo electrónico</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="email" value="<?php echo $alm->email; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Teléfono</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="phone" value="<?php echo $alm->phone; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <button class="btn btn-primary px-4">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="d-flex align-items-center mb-3">Flujo de paqueteria</h5>
                                            <p>Aereos</p>
                                            <div class="progress mb-3 h-5">
                                                <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p>Maritimos</p>
                                            <div class="progress mb-3 h-5">
                                                <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <a class="btn btn-danger" href="?c=Logins">Cancel</a>
                                    <button class="btn btn-success">Guardar</button>
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