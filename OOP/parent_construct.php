<?php 

interface employeeInterface{
	public function computeSalary();
}

abstract class BaseClass{

	protected $gender = 'Male';

	public function __construct()
	{
		$this->gender = 'Female';
	}

	public function getGender()
	{
		return $this->gender;
	}
}

class Child extends BaseClass  implements employeeInterface{

	public function __construct()
	{
		parent::__construct();
	}

	public function computeSalary()
	{
		return 3;
	}
}

$child = new Child;
echo $child->getGender(); //result is Female becase we overwrite in line 23 parent::__construct()