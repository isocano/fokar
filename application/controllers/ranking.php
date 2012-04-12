<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller {
	
		
	public function index()
	{
		$data_head['title'] = 'Fokar | Ranking';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		
		$data_content['ranking'] = get_ranking(1, 25,$this->config->item('api_key'));
		
		
		$this->load->view('ranking_view', $data_content);
		
		$this->load->view('templates/footer.php');
	}
	
}

/* End of file ranking.php */
/* Location: ./application/controllers/ranking.php */