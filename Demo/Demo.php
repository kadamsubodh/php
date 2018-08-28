<?php
class Demo{
	private $name;
	private $age;
	private $city;
	
	public function setName($name){
	$this->name=$name;
	} 
	public function getName()
	{
	return $this->name;
	}
	public function setAge($age){
	$this->age=$age;
	} 
	public function getAge()
	{
	return $this->age;
	}
	public function setCity($city){
	$this->city=$city;
	} 
	public function getCity()
	{
	return $this->city;
	}
}
?>