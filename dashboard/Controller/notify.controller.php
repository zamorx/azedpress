<?php
require_once 'Model/notify.php';

class NotifyController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Notify();
    }

    public function Index()
    {
        $alm = new Notify();

        if (isset($_REQUEST['trackingid'])) {
            $alm = $this->model->getting($_REQUEST['trackingid']);
        }

        require_once 'View/header.php';
        require_once 'View/notify.php';
        require_once 'View/footer.php';
    }
}
