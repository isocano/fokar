<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->library(array('form_validation'));
	}
	
	//Establece conexión con karmacracy	para comprobar si el usuario y la contraseña son válidos
	private function confirm_user($username, $password) 
	{
		$api_url = "http://karmacracy.com/api/v1/key/check/?u=$username&key=$password&appkey=" . $this->config->item('api_key');
		
		// Iniciamos la sesión CURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_HEADER, 0); 						
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 			
		
		// Fetch and return content
		$data = curl_exec($ch);
		curl_close($ch);
		
		$data = json_decode($data, TRUE);
		
		if ($data != NULL && isset($data['ok']))
			if ($data['ok'] == 1)
				return 'true';
			else
				return 'false';
		else 	
			return 'error';
	}
	
	public function index()
	{
		if ($this->session->userdata('logged_in'))
			header('location: profile');
		else 
		{
			// Valida las entradas
			$this->form_validation->set_rules('username', 'username', 'required|trim');
			$this->form_validation->set_rules('password', 'password', 'required|trim');	

			// El cliente ejecuta el formulario
			if ($this->form_validation->run() == TRUE) 
			{
				// Carga modelo de login
				$this->load->model('user_model');
				
				// Guardamos los datos de entrada del formulario
				$username = $this->input->post('username'); 
				$password = $this->input->post('password');
				
				// Si existe el usuario se redirecciona a profile
				$response = $this->confirm_user($username, $password);
				
				if ($response == 'true') 
				{
					//Credenciales correcto
				}
				else if ($response == 'false')
				{
					//Credenciales erróneos
				}
				else 
				{
					//Se produjo un error en la conexión	
				}
			}
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */