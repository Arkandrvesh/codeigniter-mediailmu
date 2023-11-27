<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function history()
	{
		$data['title'] = 'History Book List';
		$data['history'] = $this->model_kategori->history()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('history', $data);
		$this->load->view('layout/home/footer');
	}

	public function biography()
	{
		$data['title'] = 'Biography Book List';
		$data['biography'] = $this->model_kategori->biography()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('biography', $data);
		$this->load->view('layout/home/footer');
	}

	public function novel()
	{
		$data['title'] = 'Novel Book List';
		$data['novel'] = $this->model_kategori->novel()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('novel', $data);
		$this->load->view('layout/home/footer');
	}

	public function educational()
	{
		$data['title'] = 'Educational Book List';
		$data['educational'] = $this->model_kategori->educational()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('educational', $data);
		$this->load->view('layout/home/footer');
	}

	public function tech()
	{
		$data['title'] = 'Technology Book List';
		$data['tech'] = $this->model_kategori->tech()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('tech', $data);
		$this->load->view('layout/home/footer');
	}

	public function biology()
	{
		$data['title'] = 'Biology Book List';
		$data['biology'] = $this->model_kategori->biology()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('biology', $data);
		$this->load->view('layout/home/footer');
	}
}
