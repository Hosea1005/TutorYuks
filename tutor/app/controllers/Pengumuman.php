<?php

class Pengumuman extends Controller{

    public function index()
    {
        $data['pengumuman'] = $this->model('PengumumanModel')->getAll();
        $this->view('admin/home');
        $this->view('admin/buatpengumuman', $data);
        $this->view('admin/footer');
    }

    public function tambahpengumuman(){
        if($this->model('PengumumanModel')->tambahpengumuman($_POST) > 0)
        {
            Flasher::setFlash('Berhasil Ditambahkan', 'success');
            header('Location: '.BASEURL.'/pengumuman');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->model('PengumumanModel')->detail($id);
        $this->view('admin/home');
        $this->view('admin/lihatpengumuman', $data);
        $this->view('admin/footer');
    }

    public function edit($id){
        $data['detail'] = $this->model('PengumumanModel')->detail($id);
        $this->view('admin/home');
        $this->view('admin/editpengumuman', $data);
        $this->view('admin/footer');
    }

    public function editpengumuman(){
        if($this->model('PengumumanModel')->editpengumuman($_POST) > 0)
        {
            $id = $_POST['id'];
            Flasher::setFlash('Berhasil Diedit', 'success');
            header('Location: '.BASEURL.'/pengumuman');
        }
    }

    public function delete($id)
    {
        if($this->model('PengumumanModel')->deletepengumuman($id) > 0)
        {
            Flasher::setFlash('Pengumuman Berhasil Di hapus', 'success');
            header('Location: '.BASEURL.'/pengumuman');
        }
    }

}