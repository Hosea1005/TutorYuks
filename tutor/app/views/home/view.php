<?php
foreach($data['gambar'] as $gambar) :
?>
<h1><?= $gambar['judul']; ?></h1>
<img width="100px;" height="100px;" src="<?= BASEURL; ?>/home/hasil/<?= $gambar['id']; ?>" alt="">
<br>
<?php endforeach; ?>