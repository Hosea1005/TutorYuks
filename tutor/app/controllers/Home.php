<?php

class Home extends Controller{
    public function index(){
        $this->view('user/header');
    }

    public function data(){
        if($this->model('HomeModel')->tambah($_POST) > 0){
            header("Location: ".BASEURL."/home/lihat");
        }
    }

    public function lihat(){
        $data['gambar'] = $this->model('HomeModel')->getAll();
        $this->view('home/view', $data);
    }

    public function hasil($id){
        $row = $this->model('HomeModel')->satu($id);

        header("Content-Type: " . $row["type"]);
        echo $row["data"];
    }

    // ini halaman serius

    public function login(){
        $this->view('login');
    }

    public function Vlogin(){
        $hasil = $this->model('HomeModel')->login($_POST);
        if($hasil['role'] == "Admin"){
            $_SESSION['admin'] = true;
            $_SESSION['id'] = $hasil['id'];
            $_SESSION['nama'] = $hasil['nama_lengkap'];
            $_SESSION['role'] = $hasil['role'];
            header('Location: '.BASEURL.'/admin');
        }
        else if($hasil['role'] == "Mahasiswa"){
            $_SESSION['masuk'] = true;
            $_SESSION['id'] = $hasil['id'];
            $_SESSION['nama'] = $hasil['nama_lengkap'];
            $_SESSION['role'] = $hasil['role'];
            $_SESSION['prodi'] = $hasil['prodi'];
            $_SESSION['semester'] = $hasil['semester'];
            $_SESSION['status'] = $hasil['status'];
            header('Location: '.BASEURL.'/user');
        }else{
            Flasher::setFlash('Login Gagal', 'danger');
            header('Location: '.BASEURL.'/home/login');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: ".BASEURL."/home/login");
    }

    //akhir halaman serius
}