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
                                        <a href="mailto:<?php echo $alm->email; ?>"><button class="btn btn-outline-primary radius-5 px-4">Message</button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-sm-12">
                                <?php foreach ($this->model->Packages() as $r) : ?>
                                    <?php if ($alm->username == $r->username) : ?>
                                        <?php if ($r->statusid < 6) : ?>
                                            <div class="card pt-card status-card radius-5">
                                                <div class="card-header">
                                                    <?php if ($r->whtracking == null) : ?>
                                                        <h2 class="card-title"><?php echo $r->couriername; ?></h2>
                                                        <div class="right-column">Tracking # <?php echo $r->couriertracking; ?></div>
                                                    <?php else : ?>
                                                        <?php if ($r->whtracking == $r->couriertracking) : ?>
                                                            <h2 class="card-title">Atlantic Logistic</h2>
                                                            <div class="right-column">Tracking # <?php echo $r->couriertracking; ?></div>
                                                        <?php else : ?>
                                                            <h2 class="card-title">Grupo Garza</h2>
                                                            <div class="right-column">Tracking # <?php echo $r->whtracking; ?></div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Entrega estimada
                                                        <?php
                                                        $origDate = "$r->estdate";
                                                        $newDate = date("F d", strtotime($origDate));
                                                        echo $newDate;
                                                        ?>
                                                    </h5>
                                                    <?php echo $r->description; ?>
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="btn btn-outline-primary radius-5 px-4"><?php echo $r->statusname; ?></a><?php if ($r->statusid == 5) : ?>
                                                        <a href="#" class="btn btn-primary radius-5 px-4">Peso: <?php echo $r->weight; ?> Lbs</a>
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
    </div>
</section>