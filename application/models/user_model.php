<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
	}
	
	//Obtiene los usuarios de la aplicación
	function get_users() 
	{
		$query = $this->db->get('user');
		
		return $query->result();
	}
	
	//Añade un usuario a la aplicación
	function add_user($data)
	{
		$this->db->insert('user', $data);
	}
	
	function is_registered($username)
	{
		$this->db->where('NAME', $username);
		$query = $this->db->get('user');
		
		if ($query->row() != NULL)
			return TRUE;
		
		return FALSE;
	} 
	
	function follow()
	{
		
	}
}
	
/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */