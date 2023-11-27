<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function history()
	{
		return $this->db->get_where('product', array('kategori' => 'History'));
	}

	public function biography()
	{
		return $this->db->get_where('product', array('kategori' => 'Biography'));
	}

	public function novel()
	{
		return $this->db->get_where('product', array('kategori' => 'Novel'));
	}

	public function educational()
	{
		return $this->db->get_where('product', array('kategori' => 'Educational'));
	}

	public function tech()
	{
		return $this->db->get_where('product', array('kategori' => 'Technology'));
	}

	public function biology()
	{
		return $this->db->get_where('product', array('kategori' => 'Biology'));
	}
}
