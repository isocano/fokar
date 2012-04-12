<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->model('user_model');
	}
		
	public function index()
	{
		$data_head['title'] = 'Fokar | Ranking';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		$data_head['activeView'] = 2;
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		
		$data_content['ranking'] = get_ranking(1, 25,$this->config->item('api_key'));
		
		//Comprobamos si el usuario está logueado para ver si sigue a alguien
		if ($this->session->userdata('logged_in'))
			for ($i=0; $i<count($data_content['ranking']['data']['user']); $i++) 
				if (!$this->user_model->is_followed($this->session->userdata('username'), $data_content['ranking']['data']['user'][$i]['username']))
					$data_content['ranking']['data']['user'][$i]['followed'] = FALSE;
				else
					$data_content['ranking']['data']['user'][$i]['followed'] = TRUE;
		
		$this->load->view('ranking_view', $data_content);
		
		$this->load->view('templates/footer.php');
	}
	
}

/* End of file ranking.php */
/* Location: ./application/controllers/ranking.php */