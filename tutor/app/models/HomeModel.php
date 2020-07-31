<?php

class HomeModel{

    private $db;


    public function __construct(){
        $this->db = new Database;
    }

    public function tambah($data){
        $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imageProperties = getimageSize($_FILES['image']['tmp_name']);
        
        $query = "INSERT INTO images VALUES ('', '{$data['judul']}' ,'{$imageProperties['mime']}', '{$imgData}')";
        
        // $this->db->bind(':judul', $data['judul']);

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAll(){
        $this->db->query('SELECT * FROM images');
        return $this->db->resultSet();
    }

    public function satu($id){
        $query = "SELECT * FROM images WHERE id = $id";

        $this->db->query($query);

        return $this->db->single();
    }

    //halaman serius

    public function login($data){
        // $awal = date('Y-m-h');
        // $quer = "UPDATE matakuliah set status = 'Berakhir' WHERE DateDiff(Day, waktu,$awal) >= 3";
        // $this->db->query($quer);
        // $this->db->execute();

        $query = "SELECT * FROM account WHERE username = :username AND password = :password";

        $this->db->query($query);

        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);

        $hasil = $this->db->single();

        return $hasil;
    }

    //akhir halaman serius

}