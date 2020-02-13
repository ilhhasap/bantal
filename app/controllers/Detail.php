<?php

class Detail extends Controller {
    
    
	public function index($id_buku) {
		// $id_buku = $_GET['url'][12];
		$data['judul'] = 'Detail';
		$data['detailBuku'] = $this->model('Home_model')->ambilDetailById($id_buku);
		$this->view('templates/header', $data);
		$this->view('detail/index', $data);
		$this->view('templates/footer');
    }
    
	public function baca($id_buku) {
		$data['judul'] = 'Baca';
		$data['ambilBaca'] = $this->model('Home_model')->ambilBaca($id_buku);
		$this->view('detail/baca', $data);
    }
    
}