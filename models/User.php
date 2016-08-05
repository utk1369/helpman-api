<?php

/**
 * @author utk
 *
 */
class User {
	private $id;
	private $password;
	private $name;
	private $address;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($newPassword) {
		$this->password = $newPassword;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($newName) {
		$this->name = $newName;
	}
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAdress($newAddress) {
		$this->address = $newAddress;
	}
}