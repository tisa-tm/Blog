<?php
class user {
	private $userid;
	private $username;
	private $email;
	private $password;

	function getUserid(){
		return $this->userid;
	}
		function getUsername(){
		return $this->username;
	}
		function getEmail(){
		return $this->email;
	}
		function getPassword(){
		return $this->password;
	}


	function setUserid($userid){
		$this->userid = $userid;
	}
		function setUsername($username){
		$this->username = $username;
	}
		function setEmail($email){
		$this->email = $email;
	}
		function setPassword($password){
		$this->password = $password;
	}
}
?>