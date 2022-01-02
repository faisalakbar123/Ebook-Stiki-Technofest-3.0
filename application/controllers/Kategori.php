<?php 

class Kategori extends CI_Controller{


		public function Agama()
	{

		$data  ['Agama'] = $this->model_kategori->Agama()->result();

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Agama',$data);
		$this->load->view('templates/footer');
	}



		public function Perikanan()
	{

		$data  ['Perikanan'] = $this->model_kategori->Perikanan()->result();

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Perikanan',$data);
		$this->load->view('templates/footer');
	}

			public function Piskologi()
	{

		$data  ['Piskologi'] = $this->model_kategori->Piskologi()->result();

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Piskologi',$data);
		$this->load->view('templates/footer');
	}
			public function Sosial()
	{

		$data  ['Sosial'] = $this->model_kategori->Sosial()->result();

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Sosial',$data);
		$this->load->view('templates/footer');
	}

			public function Umum()
	{

		$data  ['Umum'] = $this->model_kategori->Umum()->result();

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Umum',$data);
		$this->load->view('templates/footer');
	}

}
