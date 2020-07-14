<?php

class User{

    private $id;
    private $name;
    private $user;
    private $email;
    private $password;
    private $privilge;
    private $registation_date;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPrivilge(){
		return $this->privilge;
	}

	public function setPrivilge($privilge){
		$this->privilge = $privilge;
	}

	public function getRegistation_date(){
		return $this->registation_date;
	}

	public function setRegistation_date($registation_date){
		$this->registation_date = $registation_date;
	}
   
}

