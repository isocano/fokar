<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function index()
	{
		$data_head['title'] = 'Bienvenido a Fokar';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		$this->load->view('index_view');
		$this->load->view('templates/footer.php');
	}
}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */