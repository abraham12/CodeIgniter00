<?php

class Model_laporan extends CI_Model {
	public function __construct() { //Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	var $tabel = 'laporan';
	public function get_insert($data){ 
		$kNominal = $dNominal = 0;
		if($data['Payment']==="Kredit")
			$kNominal = $data['Nominal'];
		else
			$dNominal = $data['Nominal'];

		$sql = "INSERT INTO laporan (`Nama`, `Nominal`, `Debet`, `Kredit`) VALUES ('".$data['Nama']."',".$data['Nominal'].",".$dNominal.",".$kNominal.");";

		$this->db->query($sql);
		return TRUE;
	}
	public function get_data() {
		$query = $this->db->get('laporan');
		return $query->result_array();
	}

}

/* End of file model_login.php */

/* Location: ./application/models/model_login.php */