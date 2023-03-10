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

}
