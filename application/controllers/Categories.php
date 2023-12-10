<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function wajan()
	{
		$data['title'] = 'Wajan Categories';
		$data['wajan'] = $this->model_kategori->wajan()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('wajan', $data);
		$this->load->view('layout/home/footer');
	}

	public function kompor()
	{
		$data['title'] = 'Kompor Categories';
		$data['kompor'] = $this->model_kategori->kompor()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('kompor', $data);
		$this->load->view('layout/home/footer');
	}

	public function panggangan()
	{
		$data['title'] = 'Panggangan Categories';
		$data['panggangan'] = $this->model_kategori->panggangan()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('panggangan', $data);
		$this->load->view('layout/home/footer');
	}

	public function mixer()
	{
		$data['title'] = 'Mixer Categories';
		$data['mixer'] = $this->model_kategori->mixer()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('mixer', $data);
		$this->load->view('layout/home/footer');
	}

	public function freezer()
	{
		$data['title'] = 'Freezer Categories';
		$data['freezer'] = $this->model_kategori->freezer()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('freezer', $data);
		$this->load->view('layout/home/footer');
	}
}


