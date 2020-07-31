<h1 class="text-center">Daftar Anggota</h1>
<hr>

<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<br><br>
<div class="">
    <?php Flasher::flash();  ?>
</div>

<?php $no = $data['mulai'] + 1; ?>

    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Gambar</th>
            <th scope="col">Prodi</th>
            <th scope="col">Semester</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>

<?php foreach($data['nama'] as $nama) :
    if($nama['prodi'] != "" && $nama['semester'] != "") :
    ?>
        <tbody>
            <tr>
            <th scope="row"><?= $no++;  ?></th>
            <td><?= $nama['nama_lengkap']; ?></td>
            <td><img class="rounded-circle" height="100" width="125" src="<?= BASEURL; ?>/user/gambaruser/<?= $nama['id']; ?>" alt=""></td>
            <td><?= $nama['prodi']; ?></td>
            <td><?= $nama['semester']; ?></td>
            <td>
            <a href="<?= BASEURL; ?>/admin/edit/<?= $nama['id']; ?>"><button class="btn btn-success">Edit</button></a>
                <a href="<?= BASEURL; ?>/admin/delete/<?= $nama['id']; ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
            </tr>
        </tbody>
<?php 
endif;
endforeach; ?>
</table>


<!-- <center> -->
    <!-- <nav aria-label="Page navigation example"> -->
        <ul class="pagination" style="margin: auto;">
            <li class="page-item">
            <?php if($data['page'] - 1 == 0){ ?>
                <a class="disabled page-link" href="<?= BASEURL; ?>/admin/anggota/<?= $data['page'] - 1; ?>">Previous</a>
            <?php }else{ ?>
                <a class="page-link" href="<?= BASEURL; ?>/admin/anggota/<?= $data['page'] - 1; ?>">Previous</a>
            <?php } ?>
            </li>

            <?php for($i = 1;$i <= $data['jumlahhalaman']; $i++) : ?>
                <li class="page-item"><a class="page-link" href="<?= BASEURL; ?>/admin/anggota/<?= $i; ?>"><?= $i; ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
            <?php if($data['page'] + 1 > $data['jumlahhalaman']){ ?>
                <a class="disabled page-link" href="<?= BASEURL; ?>/admin/anggota/<?= $data['page'] + 1; ?>" >Next</a>
            <?php }else{ ?>
                <a class="page-link" href="<?= BASEURL; ?>/admin/anggota/<?= $data['page'] + 1; ?>" >Next</a>
            <?php } ?>
            </li>
        </ul> <br><br>
    <!-- </nav> -->
<!-- </center> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/admin/tambahdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id" placeholder="id" name="id">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <select style="width: 100%" name="prodi" id="prodi">
                    <option value="DIV Teknik Informatika">DIV Teknik Informatika</option>
                    <option value="DIII Teknik Informatika">DIII Teknik Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select style="width: 100%" name="semester" id="semester">
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
                    <option value="Admin">Admin</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

