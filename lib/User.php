<?php
	include_once 'Session.php';
	include 'Database.php';

	class User
	{

		private $db;                    //....private only use in this class...//
		public function __construct()
		{

			$this->db = new Database();

		}
		public function userRegistration ($data)
		{
			$name = $data['Name'];
			$username = $data['UserName'];
			$email = $data['Email'];
			$password = $data['Pswd'];
			//$chk_email = $this->emailCheck($email);

			if($name == "" OR $username == "" OR $email =="" OR $password == "" )
			{
				$msg = "<div class='alert alert-danger'><strong>ERROR!</strong>Field must not be empty</div>";
				return $msg;

			}

			if (strlen($username) < 3) 
			{
					$msg = "<div class='alert alert-danger'>User Name should be geater then four character.</div>";

				return $msg;
			}
			/*elseif (preg_match('/[a-z0-9\-]+/i', $username)) 
			{
				$msg = "<div class='alert alert-danger'>User Name must contain alphpnumerical value,dash,Undersecore.</div>";

				return $msg;
			}*/
			if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) 
			{
				$msg = "<div class='alert alert-danger'>This email address is not valid..</div>";

				return $msg;

			}
			/*
			if ( $chk_email == true) 
			{
				$msg = "<div class='alert alert-danger'>This email address is already exist..</div>";

				return $msg;
			}*/
			$sql = "INSERT INTO tbl_user (name,UserName,email,password) VALUES(:name,:UserName,:email,:password)";

			$query = $this->db->pdo->prepare($sql);



			$query->bindValue(':name',$name);

			$query->bindValue(':UserName',$username);

			$query->bindValue(':email',$email);

			$query->bindValue(':password',$password);

			$result = $query->execute();

			if ($result) 
			{
				$msg = "<div class='alert alert-success'><strong>Success</strong>Thank you you have been register successfully/div>";

				return $msg;

				
			}
			else
			{
				$msg = "<div class='alert alert-success'><strong>Error</strong>Your registration is no complete successfully../div>";

				return $msg;

			}

			
		}
		
		/*public function emailCheck($email)
		{
			$sql = "SELECT email FROM tbl_user WHERE email = :email";

			$query = $this->db->pdo->prepare($sql);

			$query ->bindValue(':email',$email);
			
			$query ->execute();

			if ($query ->rowCount() > 0) 
			{
				
				return true;
			}
			else 
			{
				return false;
			}

		}*/
		
	}
?>