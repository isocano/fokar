<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
	}
	
	function get_users () 
	{
		$query = $this->db->get('user');
		
		return $query->result();
	}
}
	
/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */