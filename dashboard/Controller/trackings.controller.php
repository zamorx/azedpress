<?php
require_once 'Model/trackings.php';

class TrackingsController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Trackings();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/trackings.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Trackings();

        if (isset($_REQUEST['trackingid'])) {
            $alm = $this->model->getting($_REQUEST['trackingid']);
        }

        require_once 'View/header.php';
        require_once 'View/trackings-crud.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Trackings();

        $alm->trackingid = $_REQUEST['trackingid'];
        $alm->uid = $_REQUEST['uid'];
        $alm->couriertracking = $_REQUEST['couriertracking'];
        $alm->estdate = $_REQUEST['estdate'];
        $alm->courierid = $_REQUEST['courierid'];
        $alm->description = $_REQUEST['description'];
        $alm->serviceid = $_REQUEST['serviceid'];
        $alm->weight = $_REQUEST['weight'];

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->trackingid > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

       /* if ($alm->trackingid > 0 ) {
            $this->model->Actualizar($alm);
        }
       
        else{
            $this->model->Registrar($alm); 
        }*/

        header('Location: ?c=trackings');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['trackingid']);
        header('Location: ?c=Trackings');
    }


    public function Status()
    {
        $alm = new Trackings();

        if (isset($_REQUEST['trackingid'])) {
            $alm = $this->model->getting($_REQUEST['trackingid']);
        }

        require_once 'View/header.php';
        require_once 'View/trackings-status.php';
        require_once 'View/footer.php';
    }

    public function StatusChange()
    {
        $alm = new Trackings();

        $alm->trackingid = $_REQUEST['trackingid'];
        $alm->statusid = $_REQUEST['statusid'];
        $alm->whtracking = $_REQUEST['whtracking'];
        $alm->whdate = $_REQUEST['whdate'];
        $alm->deliverydate = $_REQUEST['deliverydate'];

        $this->model->StatusChange($alm);

        header('Location: ?c=Trackings');
    }

}
