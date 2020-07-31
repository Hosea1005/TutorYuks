<?php

class UserModel{

    private $db;


    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query('SELECT * FROM matakuliah');
        return $this->db->resultSet();
    }
    public function getAlldaftarhadir(){
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $query = "SELECT * FROM daftarhadir WHERE nim = $id";

            $this->db->query($query);

            return $this->db->single();
        }
    }
    

    public function satu($id){
        $query = "SELECT * FROM account WHERE id = '$id'";

        $this->db->query($query);

        return $this->db->single();
    }
    public function account(){
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $query = "SELECT * FROM account WHERE id = '$id'";

            $this->db->query($query);

            return $this->db->single();
        }
    }

    public function vote($id){
        if(isset($_SESSION['id'])){
            $nim = $_SESSION['id'];

            $query = "UPDATE account SET status = 'Sudah Polling' WHERE id = '$nim'";

            $this->db->query($query);

            $this->db->execute();

            $this->db->query("SELECT * FROM matakuliah WHERE id = $id");

            $hasil = $this->db->single();
            
            $poll = $hasil['jumlah_polling'] + 1;

            $que = "UPDATE matakuliah SET jumlah_polling = '$poll' WHERE id = $id";

            $this->db->query($que);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }

    public function hadir($matakuliah)
    {
        if(isset($_SESSION['masuk']))
        {
            $date = date('Y-m-h');
            $query = "INSERT INTO daftarhadir VALUES
            ('{$_SESSION['id']}', '{$matakuliah}', '{$date}')
            ";

            $this->db->query($query);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }

    public function penutor($data)
    {
        $query = "INSERT into penutor VALUES 
        ('{$_SESSION['id']}', '{$data['matakuliah']}','{$data['prodi']}','{$data['semester']}')";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

}