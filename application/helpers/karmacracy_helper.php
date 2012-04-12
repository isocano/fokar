<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Karmacracy Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Pablo Sánchez Lozano, Ignacio Soriano Cano, Pablo Ángel Velasco Molinero
 */


function curl_connection ($api_url)
{
	// Iniciamos la sesión CURL
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api_url);
	curl_setopt($ch, CURLOPT_HEADER, 0); 						
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 			
	
	// Fetch and return content
	$data = curl_exec($ch);
	curl_close($ch);
	
	return json_decode($data, TRUE);
}

//Establece conexión con karmacracy	para comprobar si el usuario y la contraseña son válidos
function confirm_user($username, $password)
{
	$api_url = "http://karmacracy.com/api/v1/key/check/?u=$username&key=$password&appkey=" . $this->config->item('api_key');
	$data = curl_connection($api_url);
	
	if ($data != NULL && isset($data['ok']))
		if ($data['ok'] == 1)
			return 'true';
		else
			return 'false';
	else 	
		return 'error';
}

// Obtiene una lista de kcys, type 1 -> populares, type 2 -> fecha
function get_kcy_list($inicio, $final, $type) 
{
	$api_url = "http://karmacracy.com/api/v1/world/?appkey=" . $this->config->item('api_key'). "&from=$inicio&num=$final&type=$type";     
	
	$data = curl_connection($api_url);
	
	if ($data != NULL)
		return $data;
	else 	
		echo 'error';
}
//Obtiene los kcys de un determinado usuario
function get_kcys($username) 
{
	$api_url = "http://karmacracy.com/api/v1/user/$username?kcy=1&from=11&num=10&appkey=" . $this->config->item('api_key');
	$data = curl_connection($api_url);
}
