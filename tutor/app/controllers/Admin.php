<?php

class Admin extends Controller{

    public function index(){
        $this->view('admin/home');
        $this->view('admin/dashboard');
        $this->view('admin/footer');
    }

    public function buatpolling()
    {
        $this->view('admin/home');
        $this->view('admin/buatpolling');
        $this->view('admin/footer');
    }

    public function createpolling()
    {
        if($this->model('AdminModel')->buatpolling($_POST) > 0){
            Flasher::setFlash('Polling Berhasil Di Buat', 'primary');
            header('Location: '.BASEURL.'/admin/buatpolling');
        }else{
            Flasher::setFlash('Polling gagal diperbaharui/polling dalam keadaan sama', 'danger');
            header('Location: '.BASEURL.'/admin/buatpolling');
        }
    }

    public function anggota($page = 1)
    {
        $halaman = 5;
        $data['page'] = $page;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $data['anggota'] = $this->model('AdminModel')->anggota();

        // echo $data['anggota'];

        $pages = ceil($data['anggota']/$halaman);
        $data['jumlahhalaman'] = $pages;

        $data['nama'] = $this->model('AdminModel')->getAnggota($mulai, $halaman);
        $data['mulai'] = $mulai;
        $this->view('admin/home');
        $this->view('admin/anggota', $data);
        $this->view('admin/footer');
    }

    public function tambahdata(){
        $hasil = $this->model('AdminModel')->tambahdata($_POST);
        if($hasil == 404){
            Flasher::setFlash('Gambar Tidak Memiliki ekstensi', 'danger');
            header('Location: '.BASEURL.'/admin/anggota');
        }else if($hasil == 403){
			Flasher::setFlash('Hanya Gambar yang diperbolehkan', 'danger');
            header('Location: '.BASEURL.'/admin/anggota');
		}
		else if($hasil > 0){
			Flasher::setFlash('Berhasil Ditambahkan', 'success');
            header('Location: '.BASEURL.'/admin/anggota');
		}
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->model('AdminModel')->getDataUbah($id);
        $this->view('admin/home');
        $this->view('admin/editanggota', $data);
        $this->view('admin/footer');
    }

    public function ubahdata(){
        if($this->model('AdminModel')->ubahdata($_POST) > 0){
            Flasher::setFlash('Berhasil Diubah', 'success');
            header('Location: '.BASEURL.'/admin/anggota');
        }else{
            Flasher::setFlash('Tidak Ada Data Diubah', 'danger');
            header('Location: '.BASEURL.'/admin/anggota');
        }
    }

    public function delete($id){
        if($this->model('AdminModel')->delete($id) > 0){
            Flasher::setFlash('Data Sudah Di Hapus', 'success');
            header('Location: '.BASEURL.'/admin/anggota');
        }
    }


    public function bukatutor(){
        $data['matakuliah'] = $this->model('UserModel')->getAll();
        $this->view('admin/home');
        $this->view('admin/bukatutor', $data);
        $this->view('admin/footer');
    }

    public function hasilpolling(){
        $data['hasil'] = $this->model('AdminModel')->hasil();
        $data['hasildiv1'] = $this->model('AdminModel')->hasildiv1();
        $data['hasildiv2'] = $this->model('AdminModel')->hasildiv2();
        $data['hasildiv3'] = $this->model('AdminModel')->hasildiv3();
        $data['hasildiii1'] = $this->model('AdminModel')->hasildiii1();
        $data['hasildiii2'] = $this->model('AdminModel')->hasildiii2();
        $data['matakuliah'] = $this->model('UserModel')->getAll();

        

        $this->view('admin/home');
        $this->view('admin/hasilpolling', $data);
        $this->view('admin/footer');
    }

    // public function hasil()
    // {
    //     $data['hasil'] = $this->model('AdminModel')->hasil();
    //     $data['matakuliah'] = $this->model('UserModel')->getAll();

    //     // echo $data['hasil']['hasil'];
    //     foreach($data['matakuliah'] as $matakuliah) {
    //         $total = (int)$data['hasil']['hasil'];
    //         $persen = $total + (int)$matakuliah['jumlah_polling'];
    //         echo $persen."<br>";
    //     }
    // }

    public function opentutor(){
        if($this->model('AdminModel')->opentutor($_POST) > 0){
            Flasher::setFlash('Tutor Berhasil Di Buka', 'success');
            header('Location: '.BASEURL.'/admin/bukatutor');
        }
    }

    public function coba(){
        echo $_POST['coba'];
    }

    public function daftarhadir()
    {
        $data['daftarhadirdiv1'] = $this->model('AdminModel')->daftarhadirdiv1();
        $data['daftarhadirdiv2'] = $this->model('AdminModel')->daftarhadirdiv2();
        $data['daftarhadirdiv3'] = $this->model('AdminModel')->daftarhadirdiv3();
        $data['daftarhadirdiii1'] = $this->model('AdminModel')->daftarhadirdiii1();
        $data['daftarhadirdiii2'] = $this->model('AdminModel')->daftarhadirdiii2();
        $this->view('admin/home');
        $this->view('admin/daftarhadir', $data);
        $this->view('admin/footer');
    }

    public function div1pdf(){
        $data['daftarhadirdiv1'] = $this->model('AdminModel')->daftarhadirdiv1();
        $this->view('exportpdf/div1', $data);
    }
    public function div2pdf(){
        $data['daftarhadirdiv2'] = $this->model('AdminModel')->daftarhadirdiv2();
        $this->view('exportpdf/div2', $data);
    }
    public function div3pdf(){
        $data['daftarhadirdiv3'] = $this->model('AdminModel')->daftarhadirdiv3();
        $this->view('exportpdf/div3', $data);
    }
    public function diii1pdf(){
        $data['daftarhadirdiii1'] = $this->model('AdminModel')->daftarhadirdiii1();
        $this->view('exportpdf/diii1', $data);
    }
    public function diii2pdf(){
        $data['daftarhadirdiii2'] = $this->model('AdminModel')->daftarhadirdiii2();
        $this->view('exportpdf/diii2', $data);
    }

    public function div1excel(){
        $data['daftarhadirdiv1'] = $this->model('AdminModel')->daftarhadirdiv1();
        $this->view('exportexcel/div1', $data);
    }
    public function div2excel(){
        $data['daftarhadirdiv2'] = $this->model('AdminModel')->daftarhadirdiv2();
        $this->view('exportexcel/div2', $data);
    }
    public function div3excel(){
        $data['daftarhadirdiv3'] = $this->model('AdminModel')->daftarhadirdiv13();
        $this->view('exportexcel/div3', $data);
    }
    public function diii1excel(){
        $data['daftarhadirdiii1'] = $this->model('AdminModel')->daftarhadirdiii1();
        $this->view('exportexcel/diii1', $data);
    }
    public function diii2excel(){
        $data['daftarhadirdiii2'] = $this->model('AdminModel')->daftarhadirdiii2();
        $this->view('exportexcel/diii2', $data);
    }

    public function hapushadir($nim)
    {
        if($this->model('AdminModel')->hapushadir($nim) > 0){
            Flasher::setFlash('Daftar hadir berhasil di hapus', 'success');
            header('Location: '.BASEURL.'/admin/daftarhadir');
        }
    }

    public function tutuptutor($id)
    {
        if($this->model('AdminModel')->tutuptutor($id) > 0){
            Flasher::setFlash('Tutor Berhasil Di tutup', 'success');
            header('Location: '.BASEURL.'/admin/bukatutor');
        }
    }

    public function penutor()
    {
        $data['penutor'] = $this->model('AdminModel')->penutor();
        $this->view('admin/home');
        $this->view('admin/penutor', $data);
        $this->view('admin/footer');
    }

    public function deletepenutor($id)
    {
        if($this->model('AdminModel')->deletepenutor($id) > 0){
            Flasher::setFlash('Penutor Berhasil Di Hapus', 'success');
            header('Location: '.BASEURL.'/admin/penutor');
        }
    }

}