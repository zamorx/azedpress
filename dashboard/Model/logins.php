<?php
class Logins
{
	private $pdo;
    
    public $uid;
	public $username;
	public $password;
	public $email;
	public $name;
	public $phone;
	public $idrol;
	public $activelogin;

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

			// $limit = 10;
			// $page = isset($_GET['page']) ? $_GET['page'] : 1;
			// $start = ($page - 1) * $limit;


			$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND tbllogins.activelogin = true" );
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Packages()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbltrackings,  tbllogins, tblstatus, tblservices, tblcouriers WHERE tbltrackings.uid =  tbllogins.uid AND tbltrackings.statusid = tblstatus.statusid AND tbltrackings.serviceid = tblservices.serviceid AND tbltrackings.courierid = tblcouriers.courierid AND tbltrackings.activetracking = true ORDER BY tbltrackings.trackingid DESC" );
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

	public function ListRol()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblroles WHERE  tblroles.activerol = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($uid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND uid = ?");
			          

			$stm->execute(array($uid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Eliminar($uid)
	{	
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tbllogins SET activelogin = 0 WHERE uid = ?");			          

			$stm->execute(array($uid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbllogins SET 
						name            = ?,
						username            = ?, 
						idrol            = ?,
						email            = ?,
						phone            = ?

				    WHERE uid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->name,
						$data->username,
						$data->idrol,
						$data->email,
						$data->phone,
						$data->uid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function PasswordChange($data)
	{
		try 
		{
			$sql = "UPDATE tbllogins SET 
						password            = ?

				    WHERE uid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$password_hash=hash('sha256', $data->password),
						$data->uid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO tbllogins (name, username, password, idrol, email, phone, activelogin) 
		        VALUES (?, ?, ?, ?, ?, ?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->name,
					$data->username,
					$password_hash=hash('sha256', $data->password),
					$data->idrol,
					$data->email,
					$data->phone
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
