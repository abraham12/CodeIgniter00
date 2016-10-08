<?php

class Model_barcode extends CI_Model {
	public function __construct() { //Call the Model constructor
		parent::__construct();
		$this->load->database();
	}
	var $tabel = 'orders';
	public function get_insert($data){ 
		$this->db->insert($this->tabel,$data);
		return TRUE;
	}
	public function get_data() {
		$query = $this->db->get('jenis');
		return $query->result_array();
	}

}

/* End of file model_login.php */

/* Location: ./application/models/model_login.php */