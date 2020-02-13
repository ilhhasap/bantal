<?php

class catalogBuku extends Controller {
	public function index() {
        // $data['cari'] = $_POST['cari'];
        $cari = $_POST['cari'];
        $data['namaCari'] = $_POST['cari'];
		$data['judul'] = 'Catalog';
		$data['ambilAllBooks'] = $this->model('Home_model')->ambilAllBooks();
		$data['cariBuku'] = $this->model('Home_model')->cariBuku($cari);
		$this->view('templates/header', $data);
		$this->view('catalogBuku/index', $data);
		$this->view('templates/footer');
	}
	

}