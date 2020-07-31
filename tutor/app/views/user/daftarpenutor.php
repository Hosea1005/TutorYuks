<br>
<h1 class="text-center">Daftar Penutor</h1>
<hr>

<div class="col-md-8" style="margin: auto;">
    <form action="<?=BASEURL; ?>/user/penutor" method="post">
        <div class="form-group">
            <label for="matakuliah">Matakuliah</label>
            <select style="width: 100%;" name="prodi" id="">
                <?php foreach($data['matakuliah'] as $matakuliah) : ?>
                    <option value="<?= $matakuliah['matakuliah']; ?>"><?= $matakuliah['matakuliah']."-".$matakuliah['semester']; ?></option>
                <?php endforeach; ?>
            </select>
            
        </div>
        <div class="form-group">
            <label for="prodi">Prodi</label>
            <input type="text" class="form-control" id="matakuliah" placeholder="Matakuliah" name="matakuliah">
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <select style="width: 100%;" name="semester" id="">
                <?php for($i=1;$i<=8;$i++) : ?>
                    <option value="<?= $i; ?>"><?= $i;?></option>
                <?php endfor; ?>
            </select>
        </div>
        <button style="float: right;" type="submit" class="btn btn-primary">Daftar</button><br><br>
    </form>
</div>

