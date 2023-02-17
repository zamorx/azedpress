<?php
class Notify
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

	public function getting($trackingid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbltrackings, tbllogins, tblstatus, tblservices WHERE trackingid = ? AND tbltrackings.uid = tbllogins.uid AND tbltrackings.statusid = tblstatus.statusid AND tbltrackings.serviceid = tblservices.serviceid");
			          

			$stm->execute(array($trackingid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}