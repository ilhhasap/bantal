<?php

class Home extends Controller {
	public function index() {
		$data['judul'] = 'Home';
		$data['ambilFreeBooks'] = $this->model('Home_model')->ambilFreeBooks();
		$data['ambilProBooks'] = $this->model('Home_model')->ambilProBooks();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
	

}