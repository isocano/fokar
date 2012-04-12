<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Follow extends CI_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->model('user_model');
	}
	
	public function follow() 
	{
		$follower = $this->input->get('follower');
		$followed = $this->input->get('followed');
		
		if ($this->session->userdata('username') == $follower)
		{
			if (!$this->user_model->follow($follower, $followed))
				echo -1;
			else
				echo $this->input->get('button_id');
		}
	}
	
	public function unfollow() 
	{
		$follower = $this->input->get('follower');
		$followed = $this->input->get('unfollowed');
		
		if ($this->session->userdata('username') == $follower)
		{
			if (!$this->user_model->unfollow($follower, $unfollowed))
				echo -1;
			else
				echo $this->input->get('button_id');
		}
	}
	
	public function index()
	{
		
	}
}


/* End of file follow.php */
/* Location: ./application/controllers/follow.php */
