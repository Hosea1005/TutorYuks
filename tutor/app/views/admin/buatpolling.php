<br>
<div class="">
    <?php Flasher::flash();  ?>
</div>
<h1 class="text-center">Buat Polling</h1>
<hr>
<br>
<div style="margin: auto; border: 2px solid black" class="col-md-8">
<br>
    <form action="<?=BASEURL; ?>/admin/createpolling" method="post">
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
            <label for="mulai">Waktu Mulai Polling</label>
            <input type="date" class="form-control" id="mulai" placeholder="Waktu Mulai Polling" name="mulai">
        </div>
        <button style="float: right;" type="submit" class="btn btn-primary">Submit</button><br><br>
    </form>
</div>

<br>


