<?php 

class Menu_model {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMenuMinum() {
        $this->db->query("SELECT * FROM `menu` WHERE kategori = 'drink' ");
        return $this->db->resultSet();
    }
    public function getMenuMakan() {
        $this->db->query("SELECT * FROM `menu` WHERE kategori = 'food' ");
        return $this->db->resultSet();
    }
    public function getMenu($kode_menu) {
        $this->db->query("SELECT * FROM `menu` WHERE kode_menu = '$kode_menu'");
        return $this->db->resultSet();
    }

}