<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Clientes </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Clientes</h1>
            <div class="well well-sm text-right">
                <?php if ($userDetails->idrol == 1) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Logins&a=Crud">Nuevo Cliente</a>
                <?php elseif ($userDetails->idrol == 2) : ?>
                    <a class="btn btn-primary radius-5 px-4" href="?c=Logins&a=Crud">Nuevo Cliente</a>
                <?php endif; ?>
            </div>
        </header>

        <section class="mt-30px mb-30px">
            <div class="row">
                <?php foreach ($this->model->Listar() as $r) : ?>
                    <div class="col-lg-3 col-md-12">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="assets/img/<?php echo $r->username; ?>.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h2 class="mb-0 mt-5"><a href="?c=Logins&a=Crud&uid=<?php echo $r->uid; ?>"><?php echo $r->name; ?></a></h5>
                                        <p class="mb-3"><?php echo $r->namerol; ?></p>
                                        <div class="list-inline contacts-social mt-3 mb-3">
                                            <a href="mailto:<?php echo $r->email; ?>" class="list-inline-item bg-twitter text-black border-0"><i class="bx bxl-twitter"></i>Contact Me</a>
                                        </div>
                                        <div class="d-grid"> <a href="?c=Logins&a=PassWD&uid=<?php echo $r->uid; ?>" class="btn btn-outline-primary radius-5 px-4">Change Password</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <div hidden="hidden" class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de clientes registrados</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dtPagination" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre completo</th>
                                        <th>Rol</th>
                                        <th>Phone</th>
                                        <th></th>
                                        <th></th>
                                        <!-- <th></th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->model->Listar() as $r) : ?>
                                        <tr>
                                            <td><a href="?c=Logins&a=Crud&uid=<?php echo $r->uid; ?>"><?php echo $r->name; ?></a></td>
                                            <td><?php echo $r->namerol; ?></td>
                                            <td><?php echo $r->phone; ?></td>
                                            <td>
                                                <?php if ($userDetails->idrol == 1) : ?>
                                                    <i class="glyphicon glyphicon-remove"><a class="text-danger" href="?c=Logins&a=Eliminar&uid=<?php echo $r->uid; ?>"> Eliminar</a></i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($userDetails->idrol == 1) : ?>
                                                    <i class="glyphicon glyphicon-remove"><a class="text-info" href="?c=Logins&a=PassWD&uid=<?php echo $r->uid; ?>"> Cambiar password</a></i>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>