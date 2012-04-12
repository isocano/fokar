<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	
	public function index()
	{
		$data_head['title'] = 'Fokar | Inicio';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		$data_head['activeView'] = 1;
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		
		$data_content['list_kcys'] = get_kcy_list(1, 20, 2,$this->config->item('api_key'));
		
		$this->load->view('index_view', $data_content);
		
		$this->load->view('templates/footer.php');
	}
}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */