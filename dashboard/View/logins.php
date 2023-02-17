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
                <?php if($userDetails->idrol == 1) : ?>
                    <a class="btn btn-primary" href="?c=Logins&a=Crud">Nuevo Cliente</a>
                <?php  elseif($userDetails->idrol == 2) : ?>
                    <a class="btn btn-primary" href="?c=Logins&a=Crud">Nuevo Cliente</a>
                <?php endif; ?>
            </div>
        </header>

        <div class="row">
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
                                                <?php if($userDetails->idrol == 1) : ?>
                                                    <i class="glyphicon glyphicon-remove"><a class="text-danger" href="?c=Logins&a=Eliminar&uid=<?php echo $r->uid; ?>"> Eliminar</a></i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($userDetails->idrol == 1) : ?>
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