<?php
class Home
{
	private $pdo;
    
    public $trackingid;
    public $uid;
    public $whtracking;
	public $description;
	public $shipment;
	public $statusid;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = dbconnection::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function clientList()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND tbllogins.activelogin = true" );
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function trackingList()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbltrackings,  tbllogins, tblstatus, tblservices, tblcouriers WHERE tbltrackings.uid =  tbllogins.uid AND tbltrackings.statusid = tblstatus.statusid AND tbltrackings.serviceid = tblservices.serviceid AND tbltrackings.courierid = tblcouriers.courierid AND tbltrackings.activetracking = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function alertList()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbltrackings,  tbllogins, tblstatus, tblservices, tblcouriers WHERE tbltrackings.uid =  tbllogins.uid AND tbltrackings.statusid = tblstatus.statusid AND tbltrackings.serviceid = tblservices.serviceid AND tbltrackings.courierid = tblcouriers.courierid AND tbltrackings.activetracking = true ORDER BY tbltrackings.trackingid DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}
