<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		
		//TODO quitar		
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
	}
	
	function index() 
	{
		
	}
}

/* End of file ranking.php */
/* Location: ./controllers/ranking.php */