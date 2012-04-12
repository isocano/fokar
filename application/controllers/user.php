<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('logged_in'))
		{
			$data_head['title'] = 'Bienvenido a Fokar';
			$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
			
			$this->load->view('templates/head.php', $data_head);
			$this->load->view('templates/header.php');
			
			$data_content['links'] = get_kcys($this->session->userdata('username'), $this->config->item('api_key'), 1, 10);
			 
			$this->load->view('user_view', $data_content);
			$this->load->view('templates/footer.php');
		}
		else 	
			redirect('/inicio/', 'refresh');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */