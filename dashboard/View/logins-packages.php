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
                                                            <h2 class="card-title"><?php echo $r->couriername; ?></h2>
                                                            <!--<h2 class="card-title">Atlantic Logistic</h2>-->
                                                            <div class="right-column">Tracking # <?php echo $r->couriertracking; ?></div>
                                                        <?php else : ?>
                                                            <h2 class="card-title"><?php echo $r->couriername; ?></h2>
                                                            <!--<h2 class="card-title">Grupo Garza</h2>-->
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
                                                

                                                <div class="card-header">
                                                     <!-- BEGIN PESO -->
                                                     <?php echo $r->servicename;?><h1><?php echo $r->weight;?> lbs</h1>
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
                                                            <div class="pt-status-milestone" data-reached="false" data-last-reached="false" data-percent-complete="2">
                                                                <div class="pt-status-milestone-bar">
                                                                    <div class="pt-status-milestone-bar-progress" style="transition-timing-function: ease-out; transition-duration: 720ms; width: 2%;"></div>
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