<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard', $data);
		$this->load->view('templates/footer');
		$config['total_rows'] = $this->db->count_all('tb_barang');
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

	}

		public function event1()
	{
		$data['barang'] = $this->model_barang->tampil_data1()->result();
		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('Event1', $data);
		$this->load->view('templates/footer');
		$config['total_rows'] = $this->db->count_all('tb_barang');
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

	}

		public function event2()
	{
		$data['barang'] = $this->model_barang->tampil_data2()->result();
		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('event2', $data);
		$this->load->view('templates/footer');
		$config['total_rows'] = $this->db->count_all('tb_barang');
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

	}

	public function tambah_ke_keranjang($id)
	{

		$barang = $this->model_barang->find($id);

		$kart = array(
			'id' => $barang->id_brg,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg,
		);
		$this->cart->insert($kart);
		redirect('dashboard');


	}

	public function detail_keranjang()
	{

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran()
	{

		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');


	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if ($is_processed) {

			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');

		} else {

			echo "Maaf pesanan anda gagal di proses !";

		}


	}


	public function detail($id_brg)
	{

		$data['barang'] = $this->model_barang->detail_brg($id_brg);
//		$this->cart->destroy();
		$this->load->view('templates/header');
//		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');

	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['barang']=$this->model_barang->findByName($keyword);
		$this->load->view('templates/header');
		$this->load->view('search',$data);
		$this->load->view('templates/footer');
	}

}


?>
