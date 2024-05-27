<?php
class Trackings
{
	private $pdo;
    
    public $trackingid;
    public $uid;
	public $couriertracking;
    public $whtracking;
	public $estdate;
	public $whdate;
	public $deliverydate;
	public $courierid;
	public $description;
	public $serviceid;
	public $weight;
	public $statusid;
	public $resultDuplicate;

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

	public function Listar()
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

	public function ListClients()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND tblroles.idrol = 2 AND tbllogins.activelogin = true ORDER BY tbllogins.name ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListCourier()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblcouriers WHERE tblcouriers.courieractive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListService()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblservices WHERE  tblservices.servicestatus = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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
			          ->prepare("SELECT * FROM tbltrackings, tbllogins, tblstatus, tblservices, tblcouriers WHERE tbltrackings.uid = tbllogins.uid AND tbltrackings.statusid = tblstatus.statusid AND tbltrackings.serviceid = tblservices.serviceid AND tbltrackings.courierid = tblcouriers.courierid AND trackingid = ?");
			          

			$stm->execute(array($trackingid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($trackingid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tbltrackings SET activetracking = 0 WHERE trackingid = ?");			          

			$stm->execute(array($trackingid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function StatusChange($data)
	{
		try 
		{
			$sql = "UPDATE tbltrackings SET 
						statusid            = ?,
						whtracking            = ?,
						whdate            = ?,
						deliverydate            = ?

				    WHERE trackingid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->statusid,
						$data->whtracking,
						$data->whdate,
						$data->deliverydate,
						$data->trackingid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbltrackings SET  
						uid        = ?,
                        couriertracking        = ?,
						estdate        = ?,
						courierid        = ?,
						description        = ?,
						serviceid        = ?,
						weight            = ?
				    WHERE trackingid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->uid,
						$data->couriertracking,
						$data->estdate,
						$data->courierid,
						$data->description,
						$data->serviceid,
                    	$data->weight,
                        $data->trackingid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try {

		$stm = $this->pdo->prepare("SELECT * FROM tbltrackings WHERE couriertracking = :couriertracking");
		$stm->execute(array(':couriertracking' => $data->couriertracking));
		$duplicateTracking = $stm->fetch(PDO::FETCH_ASSOC);
		
		if ($duplicateTracking) {
			//Tracking duplicado
			return false;
		}
		else {

			$sql = "INSERT INTO `tbltrackings` (uid,couriertracking,estdate,courierid,description,serviceid,weight,statusid,activetracking) 
					VALUES (?, ?, ?, ?, ?, ?, ?, 1, 1)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->uid,
						$data->couriertracking,
						$data->estdate,
						$data->courierid,
						$data->description,
						$data->serviceid,
						$data->weight
					)
				);
			} 
			return true;
		}

		catch (Exception $e) 
			{
				echo $e->getMessage();
			}	
	}
}
