<br>

<div class="">
    <?php Flasher::flash();  ?>
</div>
<div class="row">
   
    <div class="col-md-8" style="margin-left: 20px; margin-right: 20px;">
    <form action="<?= BASEURL; ?>/pengumuman/tambahpengumuman" method="post">
        <div class="row">
            <h4>Judul</h4>
            <input style="width: 100%; margin-bottom: 10px;" type="text" name="judul" placeholder="Judul Pengumuman">
        </div>
        <div class="row">
            <h4>Pembuat</h4>
            <input style="width: 100%; margin-bottom: 10px;" name="pembuat" type="text" value="<?= $_SESSION['nama']; ?>"><h4><?= $_SESSION['nama']; ?></h4>
                
        </div>
        <div class="row">
            <h4>Waktu Berakhir</h4>
            <input style="width: 100%; margin-bottom: 10px;" name="waktuberakhir" type="text" placeholder="Waktu Berakhir">
        </div>
        <div class="row">
            <h4>Isi Pengumuman</h4>
            <textarea name="isi" id="ckeditor" class="ckeditor"></textarea>
        </div>
        <br>
        <div class="row" style="float: right;">
            <input type="submit" class="btn btn-primary" value="Kirim">
        </div>
        <br><br>
        </form>
    </div>
    
    <div class="col-md-3">
        <h3 class="text-center">List Pengumuman</h3>

        <?php foreach($data['pengumuman'] as $pengumuman) : ?>
            <div class="alert alert-secondary" role="alert">
                <?= $pengumuman['judul']; ?><br><br>
                <a href="<?= BASEURL; ?>/pengumuman/detail/<?= $pengumuman['id']; ?>"><button class="btn btn-primary">Lihat</button></a>
                <a href="<?= BASEURL; ?>/pengumuman/edit/<?= $pengumuman['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                <a href="<?= BASEURL; ?>/pengumuman/delete/<?= $pengumuman['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
            </div>
        <?php endforeach; ?>

    </div>
</div>
	