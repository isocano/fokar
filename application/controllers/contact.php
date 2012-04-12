<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	
	public function index()
	{
		$data_head['title'] = 'Fokar | Contacto';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		$data_head['activeView'] = 3;
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		
		$this->load->view('contact_view');
		
		$this->load->view('templates/footer.php');
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */