<div class="">
    <?php Flasher::flash();  ?>
</div>
<h3 class="text-center">Pengumuman Terkini</h3>

<div class="row">
    <?php foreach($data['pengumuman'] as $pengumuman) : ?>
        <div class="col-md-4">
            <div class="alert alert-secondary" role="alert">
                <?= $pengumuman['judul']; ?><br><br>
                <a href="<?= BASEURL; ?>/user/detailpengumuman/<?= $pengumuman['id']; ?>"><button class="btn btn-primary">Lihat</button></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
        