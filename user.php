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


		public getId()
		{
			return $this->id;
		}
		
		public getEmail()
		{
			return $this->email;
		}
		
		public getFname()
		{
			return $this->fname;
		}
		
		public getLname()
		{
			return $this->lname;
		}
		
		public getPhone()
		{
			return $this->phone;
		}
				
		public getBirthday()
		{
			return $this->birthday;
		}		

		public getGender()
		{
			return $this->gender;
		}	

		public getPass()
		{
			return $this->password;
		}

		public setId($ID)
		{
			$this->id = $ID;
		}

		public setEmail($Email)
		{
			$this->email = $Email;
		}

		public setFname($Fname)
		{
			$this->fname = $Fname;
		}

		public setLname($Lname)
		{
			$this->lname = $Lname;
		}

		public setPhone($Phone)
		{
			$this->phone = $Phone;
		}

		public setBirthday($Birthday)
		{
			$this->birthday = $Birthday;
		}

		public setGender($Gender)
		{
			$this->gender = $Gender;
		}

		public setPassword($Password)
		{
			$this->password = $Password;
		}

	}



?>