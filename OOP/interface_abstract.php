<?php 
 
abstract class Person{
	protected $firstName;
	protected $lastName;

	public function __construct($firstName,$lastName){
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
	}

	public function __toString(){
		return sprintf("%s, %s",$this->lastName, $this->firstName);
	}

	abstract public function getSalary(); //we put it abstract because it has no body { }

	public function additional(){
		echo "Additional function";
	}
}

class Employee extends Person{  //Employee class is called concrete class because it extends an abstract class
	private $salary;
	 
	public function __construct($firstName,$lastName,$salary){
		parent::__construct($firstName, $lastName);
		$this->salary = $salary;
	}
	 
	public function getSalary(){
	 	return $salary;
	}
	 
	public function __toString(){
	 	return sprintf("Name: %s<br> Salary: $%0.2f",
	 	parent::__toString(),
	 	$this->salary);
	}
}


$e = new Employee('John','Doe',5000);
//echo $e;

 print_r( get_class_methods('Employee') );
//http://www.zentut.com/php-tutorial/php-abstract-class/