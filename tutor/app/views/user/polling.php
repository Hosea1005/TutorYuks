<?php
    if($data['account']['status'] == "Sudah Polling") {
      echo '<br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Terima Kasih, Anda telah melakukan polling.</strong>
        </div>
            ';
    }else if($data['account']['status'] == "Belum Polling"){
?>
<h1 class="text-center">Polling</h1>

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

    <?php $no = 0; foreach($data['matakuliah'] as $matakuliah) {
        $date = date_create();
        $akhir = date_create($matakuliah['waktu']);
        $waktu = date_diff($akhir,$date);
        if($matakuliah['semester'] == $_SESSION['semester'] && $matakuliah['prodi'] == $_SESSION['prodi']  && $waktu->d <= 3 && $waktu->d > 0) { 
          $no++;
        ?>
        <tr>
            <th class="text-center" scope="row"><?= $no; ?></th>
            <td><?= $matakuliah['matakuliah']; ?></td>
            <td><?= $matakuliah['prodi']; ?></td>
            <td><?= $matakuliah['semester']; ?></td>
            <td class="text-center">
                <a href="<?= BASEURL; ?>/user/vote/<?=$matakuliah['id']; ?>">
                  <button class="btn btn-primary">Vote</button>
                </a>
            </td>
        </tr>
        <?php } }
          if($no == 0){
            
        ?>
            <tr>
              <th colspan="5" class="text-center" scope="row">Sedang Tidak Tersedia</th>
            </tr>
          <?php } ?>
  </tbody>
</table>
<?php } ?>