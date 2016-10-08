<?php if (! defined('BASEPATH')) exit('No direct script allowed');

class Laporan extends CI_Controller {

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
		$this->load->view('form_laporan',$data);
		
	}
	
	public function input()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required');
		$this->form_validation->set_rules('payment', 'Payment', 'required');
			$nama = $this->input->post('nama');
			$nominal = $this->input->post('nominal');
			$pay = $this->input->post('payment');

			if ($this->form_validation->run() == TRUE)
			{
				$data = array(
				'Nama'  					=> $nama,	
				'Nominal'  					=> $nominal,
				'Payment'  					=> $pay	
				);
				$this->model_laporan->get_insert($data);
				$nama=$nominal=$pay="";
				redirect(base_url() . 'index.php/laporan/');
			}
	}
	
	public function pdf()
	{
		$data['hasil']= $this->model_laporan->get_data();
		$html = $this->load->view('pdfreport',$data,true);
		$pdfFilePath = "Laporan.pdf";

        //load mPDF library
		$this->load->library('m_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D");
	}
	
	
}

/* End of file welcome.php */

/* Location: ./application/controllers/login.php */