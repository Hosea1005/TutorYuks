<?php

class PengumumanModel{

    private $db;


    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query('SELECT * FROM pengumuman');
        return $this->db->resultSet();
    } 

    public function tambahpengumuman($data)
    {
        $query = "INSERT INTO pengumuman VALUES 
            ('', '{$data['judul']}','{$data['pembuat']}','{$data['waktuberakhir']}','{$data['isi']}')
        ";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function detail($id){
        $this->db->query("SELECT * FROM pengumuman WHERE id = '$id'");
        return $this->db->single();
    }

    public function editpengumuman($data)
    {
        $query = "UPDATE pengumuman SET
            judul = '{$data['judul']}',
            waktuberakhir = '{$data['waktuberakhir']}',
            isi = '{$data['isi']}'
            WHERE id = '{$data['id']}'
        ";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletepengumuman($id)
    {
        $query = "DELETE FROM pengumuman WHERE id = $id";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

}