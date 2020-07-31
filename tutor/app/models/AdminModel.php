<?php

class AdminModel{

    private $db;


    public function __construct(){
        $this->db = new Database;
    }

    public function tambahdata($data){
        
        
        if($_FILES['gambar']['tmp_name'] == NULL){
            return 404;
        }
        else{
            $imgData =addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $imageProperties = getimageSize($_FILES['gambar']['tmp_name']);
            $imagetype = $_FILES["gambar"]["type"];
            $imagename = $_FILES["gambar"]["name"];

            if(substr($imagetype,0,5) == "image"){
                $query = "INSERT INTO account VALUES 
                ('{$data['id']}','{$imageProperties['mime']}','{$imgData}', '{$data['nama_lengkap']}', '{$data['username']}', '{$data['password']}', '{$data['prodi']}', '{$data['semester']}', '{$data['role']}', 'Belum Polling')";
            
                // $this->db->bind(':judul', $data['judul']);
        
                $this->db->query($query);
        
                $this->db->execute();
        
                return $this->db->rowCount();
            }else{
                return 403;
            }
        }

       
    }

    public function buatpolling($data){

        $semester = $data['semester'];
        $prodi = $data['prodi'];
        $waktu = $data['mulai'];

        

        $que = "UPDATE account SET status = 'Belum Polling' WHERE prodi = '$prodi' AND semester = '$semester'";
        $this->db->query($que);
        $this->db->execute();

        $query = "UPDATE matakuliah SET jumlah_polling = 0, waktu ='$waktu' WHERE prodi = '$prodi' AND semester = '$semester'";

        $this->db->query($query);

        $this->db->execute();

        

        return $this->db->rowCount();
    }

    public function anggota(){
        $query = "SELECT * FROM account WHERE prodi != 'NULL' AND semester != 'NULL'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function getAnggota($mulai, $halaman){
        $query = "SELECT * FROM account WHERE prodi != 'NULL' AND semester != 'NULL' LIMIT $mulai, $halaman";

        $this->db->query($query);

        return $this->db->resultSet();

    }

    public function getDataUbah($id){
        $this->db->query("SELECT * FROM account WHERE id = '$id'");

        return $this->db->single();
    }

    public function ubahdata($data){
        if($_FILES['gambar']['tmp_name'] == NULL){
        $query = "UPDATE account SET 
            id = '{$data['id']}', 
            nama_lengkap = '{$data['nama_lengkap']}',
            username = '{$data['username']}',
            password = '{$data['password']}',
            prodi = '{$data['prodi']}',
            semester = '{$data['semester']}',
            role = '{$data['role']}'
            WHERE id = '{$data['id']}'
            ";

            $this->db->query($query);

            $this->db->execute();

            return $this->db->rowCount();

        }else{
            $imgData =addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $imageProperties = getimageSize($_FILES['gambar']['tmp_name']);
            $imagetype = $_FILES["gambar"]["type"];
            $imagename = $_FILES["gambar"]["name"];

            if(substr($imagetype,0,5) == "image"){
                $que = "UPDATE account SET
                    id = '{$data['id']}', 
                    nama_lengkap = '{$data['nama_lengkap']}',
                    type = '{$imageProperties['mime']}',
                    gambar = '{$imgData}',
                    username = '{$data['username']}',
                    password = '{$data['password']}',
                    prodi = '{$data['prodi']}',
                    semester = '{$data['semester']}',
                    role = '{$data['role']}'
                    WHERE id = '{$data['id']}'  
                ";
                $this->db->query($que);

                $this->db->execute();
    
                return $this->db->rowCount();
            }
        }
    }

    
    public function delete($id)
    {
        $query = "DELETE FROM account WHERE id = '$id'";
                $this->db->query($query);

                $this->db->execute();
    
                return $this->db->rowCount();
    }

    public function hasil()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }
    public function hasildiv1()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah WHERE prodi = 'DIV Teknik Informatika' AND semester = '2'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }
    public function hasildiv2()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah WHERE prodi = 'DIV Teknik Informatika' AND semester = '4'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }
    public function hasildiv3()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah WHERE prodi = 'DIV Teknik Informatika' AND semester = '6'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }
    public function hasildiii1()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah WHERE prodi = 'DIII Teknik Informatika' AND semester = '2'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }
    public function hasildiii2()
    {
        $query = "SELECT SUM(jumlah_polling) as hasil FROM matakuliah WHERE prodi = 'DIII Teknik Informatika' AND semester = '4'";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->single();
    }

    public function opentutor($data)
    {
        $prodi = $data['prodi'];
        $semester = $data['semester'];
        $matakuliah = $data['matakuliah'];

       $que = "DELETE daftarhadir FROM daftarhadir INNER JOIN account ON daftarhadir.nim = account.id WHERE 
            semester = '$semester' AND prodi = '$prodi'
       ";
       
       $this->db->query($que);

       $this->db->execute();

        $query = "UPDATE matakuliah SET 
            tutor = 'open' WHERE 
                semester = '$semester' 
                    AND 
                        prodi = '$prodi' 
                            AND 
                                matakuliah = '$matakuliah'";
        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function daftarhadirdiv1()
    {
        $query = "SELECT * FROM account INNER JOIN daftarhadir ON account.id = daftarhadir.nim
            WHERE account.prodi = 'DIV Teknik Informatika' AND account.semester = '2' 
            ORDER BY account.nama_lengkap ASC
        ";

        $this->db->query($query);

        return $this->db->resultSet();
    }
    public function daftarhadirdiv2()
    {
        $query = "SELECT * FROM account INNER JOIN daftarhadir ON account.id = daftarhadir.nim
            WHERE account.prodi = 'DIV Teknik Informatika' AND account.semester = '4' 
            ORDER BY account.nama_lengkap ASC
        ";

        $this->db->query($query);

        return $this->db->resultSet();
    }
    public function daftarhadirdiv3()
    {
        $query = "SELECT * FROM account INNER JOIN daftarhadir ON account.id = daftarhadir.nim
            WHERE account.prodi = 'DIV Teknik Informatika' AND account.semester = '6' 
            ORDER BY account.nama_lengkap ASC
        ";

        $this->db->query($query);

        return $this->db->resultSet(); 
    }
    public function daftarhadirdiii1()
    {
        $query = "SELECT * FROM account INNER JOIN daftarhadir ON account.id = daftarhadir.nim
            WHERE account.prodi = 'DIII Teknik Informatika' AND account.semester = '2' 
            ORDER BY account.nama_lengkap ASC
        ";

        $this->db->query($query);

        return $this->db->resultSet();
    }
    public function daftarhadirdiii2()
    {
        $query = "SELECT * FROM account INNER JOIN daftarhadir ON account.id = daftarhadir.nim
            WHERE account.prodi = 'DIII Teknik Informatika' AND account.semester = '4' 
            ORDER BY account.nama_lengkap ASC
        ";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function hapushadir($nim)
    {
        $query = "DELETE FROM daftarhadir WHERE nim = $nim";

        $this->db->query($query);

        $this->db->execute();
    
        return $this->db->rowCount();

    }

    public function tutuptutor($id)
    {
        $query = "UPDATE matakuliah SET tutor = 'closed' WHERE id = $id";

        $this->db->query($query);

        $this->db->execute();
    
        return $this->db->rowCount();
    }

    public function penutor()
    {
        $this->db->query("SELECT * FROM penutor INNER JOIN account ON penutor.nim = account.id");

        return $this->db->resultSet();
    }

    public function deletepenutor($id)
    {
        $query = "DELETE FROM penutor WHERE nim = $id";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

}