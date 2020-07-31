<?php

class User extends Controller{

    public function index(){
        $this->view('user/header');
    }

    public function gambaruser($id){
        $row = $this->model('UserModel')->satu($id);

        header("Content-Type: " . $row["type"]);
        echo $row["gambar"];
    }

    public function dashboard(){
        $this->view('user/home');
    }
    public function polling(){
        $data['matakuliah'] = $this->model('UserModel')->getAll();
        $data['account'] = $this->model('UserModel')->account();
        $this->view('user/polling', $data);
    }

    public function vote($id){
        if($this->model('UserModel')->vote($id) > 0){
            Flasher::setFlash('Terima Kasih Anda Telah Melakukan Polling', 'success');
            header('Location: '.BASEURL.'/user');
        }
    }

    public function lihatpengumuman(){
        $data['pengumuman'] = $this->model('PengumumanModel')->getAll();
        $this->view('user/lihatpengumuman', $data);
    }
    public function detailpengumuman($id)
    {
        $data['detail'] = $this->model('PengumumanModel')->detail($id);
        $this->view('user/detailpengumuman', $data);
    }

    public function jointutor(){
        $data['matakuliah'] = $this->model('UserModel')->getAll();
        $data['daftarhadir'] = $this->model('UserModel')->getAlldaftarhadir();
        $this->view('user/jointutor', $data);
    }

    public function hadir($matakuliah)
    {
        
        if($this->model('UserModel')->hadir($matakuliah) > 0){
            Flasher::setFlash('Terima Kasih, Anda telah terdaftar dalam daftar hadir', 'success');
            header('Location: '.BASEURL.'/user');
        }
    }

    public function daftarpenutor(){
        $data['matakuliah'] = $this->model('UserModel')->getAll();
        $this->view('user/daftarpenutor', $data);
    }

    public function penutor(){
        if($this->model('UserModel')->penutor($_POST) > 0){
            Flasher::setFlash('Terima Kasih untuk niat berbagi Ilmunya', 'success');
            header('Location: '.BASEURL.'/user');
        }
    }

}
