<?php
class Login
{
	private $pdo;
    public $usernameEmail;
    public $password;

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

	public function userLogin($usernameEmail,$password)
	{
		try
		{
			$hash_password= hash('sha256', $password); //Password encryption
			$stm = $this->pdo->prepare("SELECT uid FROM tbllogins WHERE (username=:usernameEmail or email=:usernameEmail) AND password=:hash_password" );
			$stm->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
			$stm->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
			$stm->execute();

			$count=$stm->rowCount();

			return $data=$stm->fetch(PDO::FETCH_OBJ);

			if($count)
				{
					$_SESSION['uid']=$data->uid; // Storing user session value
				return true;
			}
				else
			{
				return false;
			} 
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	/* User Details */
public function userDetails($uid)
{
try{

$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND uid=:uid"); 
$stm->bindParam("uid", $uid,PDO::PARAM_INT);
$stm->execute();
$data = $stm->fetch(PDO::FETCH_OBJ); //User data
return $data;
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}

}

?>
