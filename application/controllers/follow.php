<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Follow extends CI_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->model('user_model');
	}
	
	public function do_follow() 
	{
		$follower = $this->input->get('follower');
		$followed = $this->input->get('followed');
		
		if ($this->session->userdata('username') == $follower)
		{
			if ($this->user_model->follow($follower, $followed) == TRUE)
			{
				$response['follower'] = $follower;
				$response['followed'] = $followed;
				$response['button_id'] = $this->input->get('button_id');
				
				echo json_encode($response);
			}
			else
				echo -1;
		}
	}
	
	public function do_unfollow() 
	{
		$follower = $this->input->get('follower');
		$unfollowed = $this->input->get('unfollowed');
		
		if ($this->session->userdata('username') == $follower)
		{
			if ($this->user_model->unfollow($follower, $unfollowed) == TRUE)
			{
				$response['follower'] = $follower;
				$response['unfollowed'] = $unfollowed;
				$response['button_id'] = $this->input->get('button_id');
				
				echo json_encode($response);
			}
			else
				echo -1;
		}
	}
	
	public function index()
	{
	}
}


/* End of file follow.php */
/* Location: ./application/controllers/follow.php */
