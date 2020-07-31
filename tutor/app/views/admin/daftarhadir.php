<br>
<div class="">
    <?php Flasher::flash();  ?>
</div>
<h1 class="text-center">Daftar Hadir</h1>
<hr>
<ul id="tabsJustified" class="nav nav-tabs">
   <li class="nav-item"><a href="" data-target="#div1" data-toggle="tab" class="nav-link small text-uppercase active">DIV 1</a></li>
   <li class="nav-item"><a href="" data-target="#div2" data-toggle="tab" class="nav-link small text-uppercase">DIV 2</a></li>
   <li class="nav-item"><a href="" data-target="#div3" data-toggle="tab" class="nav-link small text-uppercase">DIV 3</a></li>
   <li class="nav-item"><a href="" data-target="#diii1" data-toggle="tab" class="nav-link small text-uppercase">DIII 1</a></li>
   <li class="nav-item"><a href="" data-target="#diii2" data-toggle="tab" class="nav-link small text-uppercase">DIII 2</a></li>
</ul>

<div id="tabsJustifiedContent" class="tab-content">
   <div id="div1" class="tab-pane fade active show col-md-12" style="margin: auto;">
    <br>
    <a href="<?= BASEURL; ?>/admin/div1pdf">
        <button class="btn btn-primary">Export To PDF</button>
    </a>
    <a href="<?= BASEURL; ?>/admin/div1excel">
        <button class="btn btn-primary">Export To Excel</button>
    </a>
    <h5 class="text-center">Daftar Hadir Himademtika Tingkat 1</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi</th>
            <th class="text-center" scope="col">Semester</th>
            <th class="text-center" scope="col">Matakuliah</th>
            <th class="text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; foreach($data['daftarhadirdiv1'] as $daftarhadir) { $no++; ?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $daftarhadir['nama_lengkap']; ?></th>
                <th><?= $daftarhadir['prodi']; ?></th>
                <th><?= $daftarhadir['semester']; ?></th>
                <th><?= $daftarhadir['matakuliah']; ?></th>
                <th><a href="<?= BASEURL; ?>/admin/hapushadir/<?= $daftarhadir['nim']; ?>"><button class="btn btn-danger">Delete</button></a></th>
            </tr>
        <?php } ?>

        </tbody>
    </table>

        
   </div>
   <div id="div2" class="tab-pane fade" style="margin: auto;">
   <br>
   <a href="<?= BASEURL; ?>/admin/div2pdf">
        <button class="btn btn-primary">Export To PDF</button>
    </a>
    <a href="<?= BASEURL; ?>/admin/div2excel">
        <button class="btn btn-primary">Export To Excel</button>
    </a>
    <h5 class="text-center">Daftar Hadir Himademtika Tingkat 2</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi</th>
            <th class="text-center" scope="col">Semester</th>
            <th class="text-center" scope="col">Matakuliah</th>
            <th class="text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; foreach($data['daftarhadirdiv2'] as $daftarhadir) { $no++; ?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $daftarhadir['nama_lengkap']; ?></th>
                <th><?= $daftarhadir['prodi']; ?></th>
                <th><?= $daftarhadir['semester']; ?></th>
                <th><?= $daftarhadir['matakuliah']; ?></th>
                <th><a href=""><button class="btn btn-danger">Delete</button></a></th>
            </tr>
        <?php } ?>

        </tbody>
    </table>
   </div>
   <div id="div3" class="tab-pane fade" style="margin: auto;">
   <br>
   <a href="<?= BASEURL; ?>/admin/div3pdf">
        <button class="btn btn-primary">Export To PDF</button>
    </a>
    <a href="<?= BASEURL; ?>/admin/div3excel">
        <button class="btn btn-primary">Export To Excel</button>
    </a>
    <h5 class="text-center">Daftar Hadir Himademtika Tingkat 3</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi</th>
            <th class="text-center" scope="col">Semester</th>
            <th class="text-center" scope="col">Matakuliah</th>
            <th class="text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; foreach($data['daftarhadirdiv3'] as $daftarhadir) { $no++; ?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $daftarhadir['nama_lengkap']; ?></th>
                <th><?= $daftarhadir['prodi']; ?></th>
                <th><?= $daftarhadir['semester']; ?></th>
                <th><?= $daftarhadir['matakuliah']; ?></th>
                <th><a href=""><button class="btn btn-danger">Delete</button></a></th>
            </tr>
        <?php } ?>

        </tbody>
    </table>
   </div>
   <div id="diii1" class="tab-pane fade" style="margin: auto;">
   <br>
   <a href="<?= BASEURL; ?>/admin/diii1pdf">
        <button class="btn btn-primary">Export To PDF</button>
    </a>
    <a href="<?= BASEURL; ?>/admin/diii1excel">
        <button class="btn btn-primary">Export To Excel</button>
    </a>
    <h5 class="text-center">Daftar Hadir Himatif Tingkat 1</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi</th>
            <th class="text-center" scope="col">Semester</th>
            <th class="text-center" scope="col">Matakuliah</th>
            <th class="text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; foreach($data['daftarhadirdiii1'] as $daftarhadir) { $no++; ?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $daftarhadir['nama_lengkap']; ?></th>
                <th><?= $daftarhadir['prodi']; ?></th>
                <th><?= $daftarhadir['semester']; ?></th>
                <th><?= $daftarhadir['matakuliah']; ?></th>
                <th><a href=""><button class="btn btn-danger">Delete</button></a></th>
            </tr>
        <?php } ?>

        </tbody>
    </table>
   </div>
   <div id="diii2" class="tab-pane fade" style="margin: auto;">
   <br>
   <a href="<?= BASEURL; ?>/admin/diii2pdf">
        <button class="btn btn-primary">Export To PDF</button>
    </a>
    <a href="<?= BASEURL; ?>/admin/diii2excel">
        <button class="btn btn-primary">Export To Excel</button>
    </a>
    <h5 class="text-center">Daftar Hadir Himatif Tingkat 2</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi</th>
            <th class="text-center" scope="col">Semester</th>
            <th class="text-center" scope="col">Matakuliah</th>
            <th class="text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; foreach($data['daftarhadirdiii2'] as $daftarhadir) { $no++; ?>
            <tr>
                <th><?= $no; ?></th>
                <th><?= $daftarhadir['nama_lengkap']; ?></th>
                <th><?= $daftarhadir['prodi']; ?></th>
                <th><?= $daftarhadir['semester']; ?></th>
                <th><?= $daftarhadir['matakuliah']; ?></th>
                <th><a href=""><button class="btn btn-danger">Delete</button></a></th>
            </tr>
        <?php } ?>

        </tbody>
    </table>
   </div>
</div>