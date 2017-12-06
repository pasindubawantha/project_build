<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model {

	public function __construct()
	{
	}

	public function get_all_vendors()
	{
		$query = $this->db->get('vendor');
		return $query->result();
	}

	public function get_vendor_details_by_id($id)
	{
		$query = $this->db->get_where('vendor', array('id'=>$id));
		return $query->row();
	}
}