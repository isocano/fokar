<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->library(array('form_validation'));
	}
	
	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('/inicio/', 'refresh');
	}
	
	public function index()
	{
		if ($this->session->userdata('logged_in'))
			redirect('/user/', 'refresh');
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
				$response = confirm_user($username, $password, $this->config->item('api_key'));
				
				//TODO QUITAR ESTO!!!
				$response = 'true';
				
				if ($response == 'true')		//Credenciales correctos 
				{
					$this->session->set_userdata('logged_in', TRUE);
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('password', $password);
					 
					redirect('/user/', 'refresh');
				}
				else if ($response == 'false')	//Credenciales erróneos
					$data_content['message'] = 'El usuario o la contraseña no es correcto';
				else 							//Se produjo un error en la conexión
					$data_content['message'] = 'Se produjo un error en la conexión';
						
				$data_head['title'] = 'Bienvenido a Fokar';
				$data_head['description'] = 'Sigue a personas con karma en base al sistema de karmacracy.';
					
				$this->load->view('templates/head.php', $data_head);
				$this->load->view('templates/header.php');
					
				$this->load->view('index_view', $data_content);
					
				$this->load->view('templates/footer.php');
			}
		}
	}
}


/* End of file login.php */
/* Location: ./application/controllers/login.php */
