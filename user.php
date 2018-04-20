<?php
	
	class User
	{
		private $id;
		private $email;
		private $fname;
		private $lname;
		private $phone;
		private $birthday;
		private $gender;
		private $password;

		public function __construct($Id, $Email, $Fname, $Lname, $Phone, $Birthday, $Gender, $Password) 
		{
	        $this->id = $Id;
	        $this->email = $Email;
	        $this->fname = $Fname;
	        $this->lname = $Lname;
	        $this->phone = $Phone;
	        $this->birthday = $Birthday;
	        $this->gender = $Gender;
	        $this->password = $Password;

    	}


		public function getId()
		{
			return $this->id;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		
		public function getFname()
		{
			return $this->fname;
		}
		
		public function getLname()
		{
			return $this->lname;
		}
		
		public function getPhone()
		{
			return $this->phone;
		}
				
		public function getBirthday()
		{
			return $this->birthday;
		}		

		public function getGender()
		{
			return $this->gender;
		}	

		public function getPass()
		{
			return $this->password;
		}

		public function setId($ID)
		{
			$this->id = $ID;
		}

		public function setEmail($Email)
		{
			$this->email = $Email;
		}

		public function setFname($Fname)
		{
			$this->fname = $Fname;
		}

		public function setLname($Lname)
		{
			$this->lname = $Lname;
		}

		public function setPhone($Phone)
		{
			$this->phone = $Phone;
		}

		public function setBirthday($Birthday)
		{
			$this->birthday = $Birthday;
		}

		public function setGender($Gender)
		{
			$this->gender = $Gender;
		}

		public function setPassword($Password)
		{
			$this->password = $Password;
		}

		public function displayUserRow() {
			return '<tr><td>User</td><td>Data</td><td>Goes</td><td>Here</td></tr>';
		}

	}



?>