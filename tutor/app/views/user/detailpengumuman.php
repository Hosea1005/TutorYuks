<br>
<link href="<?= BASEURL; ?>/vend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/user/">List Pengumuman</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Pengumuman</li>
  </ol>
</nav>
</div>
<br>
<div class="container alert alert-secondary" style="color:">
    <center><h1><?= $data['detail']['judul'] ?></h1></center>
    <hr>
    <div class="col-md-8" style="margin: auto;">
        <?= $data['detail']['isi']; ?>
        <hr>
       
        
    </div>
    <h4>Pembuat</h4>
    <br><br><br>
    <?=$data['detail']['pembuat']; ?>
        <hr>
        Waktu Berakhir :<?= $data['detail']['waktuberakhir']; ?>
<br><br>
</div>
<br>