<?php if (! defined('BASEPATH')) exit('No direct script allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_laporan');
		$this->load->helper('url');
		$this->load->helper('array');
	}
	
	public function index()
	{
		$data['hasil']= $this->model_laporan->get_data();
		//print_r($data);
		$this->load->view('form_login',$data);
		
	}
}
?>