<?php 

/* when a class implements an interface, you have to 
   add the method (the same name) inside of the class. A class can implement
   more than 1 interface. */

interface shapeInterface{

	public function getArea();
}

interface pointInterface{
	public function getSides();
}

class Circle implements shapeInterface, pointInterface {

	/* @return void
	 */
	public function getArea()
	{
		echo "this is Circle";
	}

	/* TO test, comment out this function below. 
	 * Then, the error will appear because getSides is required in pointInterface 
	 * as implemented in this class. 
	 */
	public function getSides()
	{
		echo "There is zero side";
	}
}

$circle = new Circle;
$circle->getArea();