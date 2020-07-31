<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Daftar Hadir.xls");
?>

<center>
	<h1>Daftar Hadir Tutor Himademtika</h1>
</center>
 
<table>
   <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>Semester</th>
        <th>Tanda Tangan</th>
    </tr>

    <?php $no = 0;  foreach($data['daftarhadirdiv1'] as $hadir) : $no++; ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?= $hadir['nim'] ?></td>
            <td><?= $hadir['nama_lengkap'] ?></td>
            <td><?= $hadir['prodi'] ?></td>
            <td><?= $hadir['semester'] ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>