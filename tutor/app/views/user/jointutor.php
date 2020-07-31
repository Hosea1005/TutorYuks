<?php
    if($data['daftarhadir']['nim'] == $_SESSION['id']) {
      echo '<br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Terima Kasih, Anda telah terdaftar !</strong>
        </div>
            ';
    }else{
?>
<h1 class="text-center">Join tutor</h1>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center" scope="col">No</th>
      <th class="text-center" scope="col">Mata Kuliah</th>
      <th class="text-center" scope="col">Prodi</th>
      <th class="text-center" scope="col">Semester</th>
      <th class="text-center" scope="col">Aksi</th>
    </tr>
  </thead>
<tbody>
<?php $no = 0; foreach($data['matakuliah'] as $matakuliah){ 
    if($matakuliah['prodi'] == $_SESSION['prodi'] && $matakuliah['semester'] == $_SESSION['semester'] && $matakuliah['tutor'] == 'open' ){
    $no++;
    ?>
    <tr>
        <th><?= $no; ?></th>
        <th><?= $matakuliah['matakuliah']; ?></th>
        <th><?= $matakuliah['prodi']; ?></th>
        <th><?= $matakuliah['semester']; ?></th>
        <th>
            <a href="<?= BASEURL; ?>/user/hadir/<?= $matakuliah['matakuliah']; ?>"><button class="btn btn-primary">Join</button></a>
        </th>
    </tr>

<?php } } }  ?>