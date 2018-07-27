<?php 

/* Note: Abstract classes are not allowed to be instantiated. 
 * They can only be extended
 */

abstract class Animals{

	public function getHeight()
	{
		return 2;
	} 
}
 
class Dog extends Animals{

	public function speed()
	{
		return 10;
	}
}

/* For example, uncomment this out:
$animal = new Animals;
echo $animal->getHeight();
*/

$dog = new Dog;
echo $dog->speed();
