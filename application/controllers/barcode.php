<?php if (! defined('BASEPATH')) exit('No direct script allowed');

class Barcode extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barcode');
		$this->load->helper('url');
		$this->load->helper('array');
	}

	public function index()
	{
		
		$data['hasil']= $this->model_barcode->get_data();
		//print_r($data);
		$this->load->view('form_barcode',$data);
		
	}
	
	public function input()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('kodeBarang', 'Kode Barang', 'required');
		$this->form_validation->set_rules('namaBarang', 'Nama Barang', 'required');
		

			if ($this->form_validation->run() == TRUE)
			{
				
				
				redirect(base_url() . 'index.php/barcode/');
			}
	}
	
	
	
	
}

/* End of file welcome.php */

/* Location: ./application/controllers/login.php */