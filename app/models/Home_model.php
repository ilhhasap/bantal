<?php

class Home_model {

    public function __construct() {
        $this->db = new Database;
    }
    public function ambilFreeBooks() {
        $this->db->query("SELECT * FROM `buku` WHERE status_buku = 'free'  ");
        return $this->db->resultSet();
    }
    public function ambilProBooks() {
        $this->db->query("SELECT * FROM `buku` WHERE status_buku = 'pro' ");
        return $this->db->resultSet();
    }

    public function ambilDetailById($id_buku) {
        $this->db->query("SELECT * FROM `buku` WHERE id_buku = $id_buku ");
        return $this->db->resultSet();
    }

    public function ambilBaca($id_buku) {
        $this->db->query("SELECT * FROM `buku` WHERE id_buku = $id_buku ");
        return $this->db->resultSet();
    }
    
    public function cariBuku($cari) {
        $this->db->query("SELECT * FROM `buku` WHERE judul_buku like '%".$cari."%' ");
        return $this->db->resultSet();
    }

    public function ambilAllBooks() {
        $this->db->query("SELECT * FROM `buku`");
        return $this->db->resultSet();
    }
}