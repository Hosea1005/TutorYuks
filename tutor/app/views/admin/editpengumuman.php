<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/pengumuman">Buat Pengumuman</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="">
    <?php Flasher::flash();  ?>
</div>
<div class="col-md-8" style="margin: auto">
    <form action="<?= BASEURL; ?>/pengumuman/editpengumuman" method="post">
    <input value="<?= $data['detail']['id']; ?>" style="width: 100%; margin-bottom: 10px;" type="hidden" name="id" >
        <div class="row">
            <h4>Judul</h4>
            <input value="<?= $data['detail']['judul']; ?>" style="width: 100%; margin-bottom: 10px;" type="text" name="judul" placeholder="Judul Pengumuman">
        </div>
        <div class="row">
            <h4>Pembuat</h4>
            <input value="<?= $data['detail']['pembuat']; ?>" style="width: 100%; margin-bottom: 10px;" name="pembuat" type="text" placeholder="Pembuat">
        </div>
        <div class="row">
            <h4>Waktu Berakhir</h4>
            <input value="<?= $data['detail']['waktuberakhir']; ?>" style="width: 100%; margin-bottom: 10px;" name="waktuberakhir" type="text" placeholder="Waktu Berakhir">
        </div>
        <div class="row">
            <h4>Isi Pengumuman</h4>
            <textarea name="isi" id="ckeditor" class="ckeditor"><?= $data['detail']['isi']; ?></textarea>
        </div>
        <br>
        <div class="row" style="float: right;">
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>
        <br><br>
        </form>
    </div>