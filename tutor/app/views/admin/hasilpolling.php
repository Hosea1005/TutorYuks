<h1 class="text-center">Hasil Polling </h1>
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
         <div class="col-md-6" style="margin: auto; border: 1px solid black;">
         <br>
         <h4 class="text-center">DIV Teknik Informatika Tingkat 1</h4>
         <br>

         <?php foreach($data['matakuliah'] as $matakuliah) {
            if($matakuliah['prodi'] == 'DIV Teknik Informatika' && $matakuliah['semester'] == '2'){ 
               $total = (int)$data['hasildiv1']['hasil'];
               if($total != 0){
                  $persen = ((int)$matakuliah['jumlah_polling'] / $total) * 100;
               }else{
                  $persen = ((int)$matakuliah['jumlah_polling'] / 1) * 100;
               }
            ?>
            <h6><?= $matakuliah['matakuliah']; ?></h6>
            
            <div class="progress" >
               <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         <?php } } ?>
         <br>
         </div>
   </div>
   <div id="div2" class="tab-pane fade" style="margin: auto;">
   <br>
         <div class="col-md-6" style="margin: auto; border: 1px solid black;">
         <br>
         <h4 class="text-center">DIV Teknik Informatika Tingkat 2</h4>
         <br>

         <?php foreach($data['matakuliah'] as $matakuliah) {
            if($matakuliah['prodi'] == 'DIV Teknik Informatika' && $matakuliah['semester'] == '4'){ 
               $total = (int)$data['hasildiv2']['hasil'];
               if($total != 0){
                  $persen = ((int)$matakuliah['jumlah_polling'] / $total) * 100;
               }else{
                  $persen = ((int)$matakuliah['jumlah_polling'] / 1) * 100;
               }
            ?>
            <h6><?= $matakuliah['matakuliah']; ?></h6>
            
            <div class="progress" >
               <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         <?php } } ?>
         <br>
         </div>
   </div>
   <div id="div3" class="tab-pane fade" style="margin: auto;">
   <br>
         <div class="col-md-6" style="margin: auto; border: 1px solid black;">
         <br>
         <h4 class="text-center">DIV Teknik Informatika Tingkat 3</h4>
         <br>

         <?php foreach($data['matakuliah'] as $matakuliah) {
            if($matakuliah['prodi'] == 'DIV Teknik Informatika' && $matakuliah['semester'] == '6'){ 
               $total = (int)$data['hasildiv3']['hasil'];
               if($total != 0){
                  $persen = ((int)$matakuliah['jumlah_polling'] / $total) * 100;
               }else{
                  $persen = ((int)$matakuliah['jumlah_polling'] / 1) * 100;
               }
            ?>
            <h6><?= $matakuliah['matakuliah']; ?></h6>
            
            <div class="progress" >
               <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         <?php } } ?>
         <br>
         </div>
   </div>
   <div id="diii1" class="tab-pane fade" style="margin: auto;">
   <br>
         <div class="col-md-6" style="margin: auto; border: 1px solid black;">
         <br>
         <h4 class="text-center">DIII Teknik Informatika Tingkat 1</h4>
         <br>

         <?php foreach($data['matakuliah'] as $matakuliah) {
            if($matakuliah['prodi'] == 'DIII Teknik Informatika' && $matakuliah['semester'] == '2'){ 
               $total = (int)$data['hasildiii1']['hasil'];
               if($total != 0){
                  $persen = ((int)$matakuliah['jumlah_polling'] / $total) * 100;
               }else{
                  $persen = ((int)$matakuliah['jumlah_polling'] / 1) * 100;
               }
            ?>
            <h6><?= $matakuliah['matakuliah']; ?></h6>
            
            <div class="progress" >
               <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         <?php } } ?>
         <br>
         </div>
   </div>
   <div id="diii2" class="tab-pane fade" style="margin: auto;">
   <br>
         <div class="col-md-6" style="margin: auto; border: 1px solid black;">
         <br>
         <h4 class="text-center">DIII Teknik Informatika Tingkat 2</h4>
         <br>

         <?php foreach($data['matakuliah'] as $matakuliah) {
            if($matakuliah['prodi'] == 'DIII Teknik Informatika' && $matakuliah['semester'] == '4'){ 
               $total = (int)$data['hasildiii2']['hasil'];
               if($total != 0){
                  $persen = ((int)$matakuliah['jumlah_polling'] / $total) * 100;
               }else{
                  $persen = ((int)$matakuliah['jumlah_polling'] / 1) * 100;
               }
            ?>
            <h6><?= $matakuliah['matakuliah']; ?></h6>
            
            <div class="progress" >
               <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         <?php } } ?>
         <br>
         </div>
   </div>
</div>


