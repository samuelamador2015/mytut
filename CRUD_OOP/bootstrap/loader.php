<?php 

require_once __DIR__ . '/app.php';




/* @Loader of library and helpers
 */
class Loader{

	protected $library = [
		'system'  => [

		],
		'client'   => [

		]
	];


	protected $helpers = [


	]; 

	public function __construct()
	{
		parent::__construct();
	}
	 
}


new Loader();