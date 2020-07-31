<br>
<div class="">
    <?php Flasher::flash();  ?>
</div>

<h1 class="text-center">Buka Tutor</h1>
<hr>
<br>
<div class="row">
    <div style="border: 2px solid black" class="col-md-8">
    <br>
        <form action="<?=BASEURL; ?>/admin/opentutor" method="post">
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select style="width: 100%" name="semester" id="">
                    <?php for($i=1 ; $i <= 8; $i++): ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="matakuliah">Matakuliah</label>
                <select style="width: 100%" name="matakuliah" id="">
                    <?php foreach($data['matakuliah'] as $matakuliah) : ?>
                        <option value="<?= $matakuliah['matakuliah']; ?>"><?= $matakuliah['matakuliah']."  (".$matakuliah['prodi']."-".$matakuliah['semester'].")"; ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <input type="text" class="form-control" id="matakuliah" placeholder="Matakuliah" name="matakuliah"> -->
            </div>
            <button style="float: right;" type="submit" class="btn btn-primary">Buka Tutor</button><br><br>
        </form>
    </div>
    <div class="col-md-4">
        <h4 class="text-center">Daftar Kelas Tutor Yang Sedang Di Buka</h4>
        <hr>
        <?php foreach($data['matakuliah'] as $matakuliah) : 
            if($matakuliah['tutor'] == 'open'){
        ?>
            <div class="alert alert-secondary" role="alert">
                <?= $matakuliah['matakuliah']; ?><br>
                Prodi : <?= $matakuliah['prodi']; ?>
                <br>Semester : <?= $matakuliah['semester']; ?>
                <br><center><a href="<?= BASEURL; ?>/admin/tutuptutor/<?= $matakuliah['id']; ?>"><button class="btn btn-danger">Tutup</button></a></center>
            </div>
        <?php }endforeach; ?><br>
    </div>
</div>

