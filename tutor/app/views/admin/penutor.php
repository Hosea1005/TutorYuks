<br>
<div class="">
    <?php Flasher::flash();  ?>
</div>
<h1 class="text-center">Daftar Penutor</h1>
<hr>

<table class="table">
<thead class="thead-light">
    <tr>
        <th scope="col">Nim</th>
        <th scope="col">Nama</th>
        <th scope="col">Semester Penutor</th>
        <th scope="col">Matakuliah Yang Diajarkan</th>
        <th scope="col">Prodi Yang Diajarkan</th>
        <th scope="col">Semester</th>
        <th scope="col">Aksi</th>
    </tr>

    <?php foreach($data['penutor'] as $penutor) : ?>
        <tr>
            <th><?= $penutor['nim']; ?></th>
            <th><?= $penutor['nama_lengkap']; ?></th>
            <th><?= $penutor['semester']; ?></th>
            <th><?= $penutor['matakuliah']; ?></th>
            <th><?= $penutor['prodi_diajarkan']; ?></th>
            <th><?= $penutor['semester_diajarkan']; ?></th>
            <th>
                <a href="<?= BASEURL; ?>/admin/deletepenutor/<?= $penutor['nim']; ?>">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </th>
        </tr>
    <?php endforeach; ?>

</thead>