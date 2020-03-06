<?php

class allBooks extends Controller {
	public function index() {
		$data['judul'] = 'Buku';
		$data['ambilAllBooks'] = $this->model('Home_model')->ambilAllBooks();
		$this->view('templates/header', $data);
		$this->view('allBooks/index', $data);
		$this->view('templates/footer');
	}

}