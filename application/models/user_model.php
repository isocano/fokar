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
	
	//Comprueba si un usuario está registrado
	function is_registered($username)
	{
		$this->db->where('NAME', $username);
		$query = $this->db->get('user');
		
		if ($query->row() != NULL)
			return TRUE;
		
		return FALSE;
	} 
	
	//Comprueba si un usuario sigue a otro
	function is_followed ($follower, $followed)
	{
		$this->db->where(array('FOLLOWER' => $follower, 'FOLLOWED' => $followed));	
		$query = $this->db->get('user_follow');
		
		if ($query->row() != NULL)
			return TRUE;
		
		return FALSE;
	}
	
	//Un usuario (follower) decide seguir a otro (followed)
	function follow($follower, $followed)
	{
		if (!is_followed($follower, $followed))
		{
			$data =  array('FOLLOWER' => $follower, 'FOLLOWED' => $followed);
			$this->db->insert('user_follow', $data);
		}
		else 
			return FALSE;
	}
	
	//Un usuario (follower) decide dejar de seguir a otro (followed)
	function unfollow($follower, $unfollowed)
	{
		if (is_followed($follower, $followed))
		{
			$this->db->where(array('FOLLOWER' => $follower, 'FOLLOWED' => $unfollowed));
			$this->db->delete('user_follow'); 
		}
		else 
			return FALSE;
	}
}
	
/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */