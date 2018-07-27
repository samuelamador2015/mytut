<?php 


/* Imagine, you have 3 files with the same class
 * and you want to use all. To avoid conflict of class,
 * we put a namespace.
 */
namespace Home\Dir;


class Person{

	public function __construct(){
		echo "Person Constructor";
	}

	function getName(){
		return "hellow";
	}
}
