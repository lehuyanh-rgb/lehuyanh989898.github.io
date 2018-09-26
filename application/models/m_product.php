<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function count_data()
	{
		$this->db->select('*');
		$data = $this->db->get('san_pham');
		$data = $data->result_array();
		$size = count($data);
		return $size;
	}

	public function show_data($page)
	{
		//$this->db->get('Table', limit, offset);
		$this->db->select('*,sp.hinh');
		$this->db->from('san_pham as sp');
		$this->db->join('loai_san_pham as lsp', 'sp.ma_loai = lsp.ma_loai', 'left');
		$data = $this->db->get('san_pham',10,$page*10+1);
		$data = $data->result_array();
		return $data;
	}



}

/* End of file m_product.php */
/* Location: ./application/models/m_product.php */