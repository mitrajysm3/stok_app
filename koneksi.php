<?php
class koneksi {
   private $server = "localhost";
   private $username = "dev";
   private $password = "";
    private $db = "id5161521_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,$this->password,$this->db);
    }
}

?>