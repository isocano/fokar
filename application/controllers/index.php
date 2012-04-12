<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	private function get_kcy_list($inicio, $final, $type) 
	{
		$api_url = "http://karmacracy.com/api/v1/world?appkey=" . $this->config->item('api_key'). "&from=$inicio&num=$final&type=$type";     
		
		// Iniciamos la sesión CURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_HEADER, 0); 						
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 			
		
		// Fetch and return content
		$data = curl_exec($ch);
		curl_close($ch);
		
		$data = json_decode($data, TRUE);
		
		if ($data != NULL)
			return $data;
		else 	
			echo 'error';
	}	
		
	public function index()
	{
		$data_head['title'] = 'Fokar | Inicio';
		$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
		
		$this->load->view('templates/head.php', $data_head);
		$this->load->view('templates/header.php');
		
		$data_content['list_kcys'] = $this->get_kcy_list(1, 20, 2);
		
		
		$this->load->view('index_view', $data_content);
		
		$this->load->view('templates/footer.php');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */