    <div class="col-md-8" style="margin: auto">    
        <br>
        <form action="<?= BASEURL; ?>/admin/ubahdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">Id</label>
                <input value="<?= $data['mahasiswa']['id']; ?>" type="text" class="form-control" id="id" placeholder="id" name="id">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
            </div>
            <div class="form-group">
                <label  for="nama_lengkap">Nama Lengkap</label>
                <input value="<?= $data['mahasiswa']['nama_lengkap']; ?>" type="text" class="form-control" id="nama_lengkap" placeholder="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?= $data['mahasiswa']['username']; ?>" type="text" class="form-control" id="username" placeholder="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?= $data['mahasiswa']['password']; ?>" type="text" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <select style="width: 100%" name="prodi" id="prodi">
                    <option value="<?= $data['mahasiswa']['prodi']; ?>"><?= $data['mahasiswa']['prodi']; ?></option>
                    <option value="DIV Teknik Informatika">DIV Teknik Informatika</option>
                    <option value="DIII Teknik Informatika">DIII Teknik Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select style="width: 100%" name="semester" id="semester">
                    <option value="<?= $data['mahasiswa']['semester']; ?>"><?= $data['mahasiswa']['semester']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select style="width: 100%" name="role" id="role">
                    <option value="<?= $data['mahasiswa']['role']; ?>"><?= $data['mahasiswa']['role']; ?></option>
                    <option value="Admin">Admin</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>