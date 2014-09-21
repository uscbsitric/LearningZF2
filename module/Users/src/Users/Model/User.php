<?php
	namespace Users\Model;
	
	class User
	{
		public $id;
		public $name;
		public $email;
		public $password;
		
		public function setPassword($clearPassword)
		{
			$this->password = md5($clearPassword);
		}
		
		public function exchangeArray($data)
		{
			$this->name  = (isset($data['name'])) ? $data['name'] : null;
			$this->email = (isset($data['email'])) ? $data['email'] : null;
			
			if( isset($data['password']) )
			{
				$this->setPassword($data['password']);
			}
		}
	}