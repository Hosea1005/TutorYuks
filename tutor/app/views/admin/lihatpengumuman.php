<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/pengumuman">Buat Pengumuman</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail</li>
  </ol>
</nav>
<br>
<div class="container" style="background-color: white;">
    <center><h1><?= $data['detail']['judul'] ?></h1></center>
    <hr>
    <?= $data['detail']['isi']; ?>
    <hr>
    <h4>Pembuat</h4>
    <br><br><br>
    <?=$data['detail']['pembuat']; ?>
    <hr>
    Waktu Berakhir :<?= $data['detail']['waktuberakhir']; ?>
<br><br>
</div>
<br>
<a href="<?= BASEURL; ?>/pengumuman/edit/<?= $data['detail']['id']; ?>"><button class="btn btn-primary">Edit</button></a>
<a href="<?= BASEURL; ?>/pengumuman/delete/<?= $data['detail']['id']; ?>"><button class="btn btn-danger">Hapus</button></a><br><br>