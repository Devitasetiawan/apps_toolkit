<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function wajan()
	{
		return $this->db->get_where('product', array('kategori' => 'Wajan'));
	}

	public function kompor()
	{
		return $this->db->get_where('product', array('kategori' => 'Kompor'));
	}

	public function Panggangan()
	{
		return $this->db->get_where('product', array('kategori' => 'Panggangan'));
	}

	public function mixer()
	{
		return $this->db->get_where('product', array('kategori' => 'mixer'));
	}

	public function freezer()
	{
		return $this->db->get_where('product', array('kategori' => 'Freezer'));
	}

}
