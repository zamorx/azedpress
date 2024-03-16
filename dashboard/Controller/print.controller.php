<?php
require_once 'Model/trackings.php';

class PrintController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Invoices();
    }

    public function Index()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['trackingid'])) {
            $alm = $this->model->getting($_REQUEST['trackingid']);
        }

       // require_once 'View/header.php';
        require_once 'View/pdf-invoice.php';
       // require_once 'View/footer.php';
    }

    public function InvoiceView()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['trackingid'])) {
            $alm = $this->model->getting($_REQUEST['trackingid']);
        }

        //require_once 'View/header.php';
        require_once 'View/invoice-view.php';
        //require_once 'View/footer.php';
    }
}
