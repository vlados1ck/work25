<?php
Class Worker
{
	private $name;
	private $age;
	private $salary;

public function setName($n){
		$this->name= $n;
}
public function getName () {
	return $this->name;
}
	
public function setAge ($a) {
	$this->age= $a;
}

public function getAge () {
	return $this->age;
}

public function setSalary ($s) {
	 $this->salary=$s;	
}

public function getSalary () {
	return $this->salary;
}
}
$obj = new Worker();
$obj -> setName = "Иван";
$obj -> setAge = 25;
$obj -> setSalary = 1000;

$obj2 = new Worker ();
$obj2 -> setName = "Вася";
$obj2 -> setAge = 26; 
$obj2 -> setSallary = 1000;



echo "Сумма возростов". ($obj -> setAge + $obj2 -> setAge);
echo "Сумма зарплат". ($obj -> setSalary + $obj2 -> setSalary);