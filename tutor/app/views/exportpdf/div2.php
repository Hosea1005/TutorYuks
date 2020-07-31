<?php
$pdf = new FPDF('p', 'mm', 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(190, 7, 'Daftar Hadir Tutor HIMADEMTIKA', 0,1,'C');
// $pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(9,6,'NO',1,0);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(60,6,'NAMA',1,0);
$pdf->Cell(40,6,'PRODI',1,0);
$pdf->Cell(35,6,'Semester',1,0);
$pdf->Cell(30,6,'TANDA TANGAN',1,1);

$index = 1;

foreach($data['daftarhadirdiv2'] as $data){
    $pdf->Cell(9,6,$index++,1,0);
    $pdf->Cell(20,6,$data['nim'],1,0);
    $pdf->Cell(60,6, $data['nama_lengkap'],1,0);  
    $pdf->Cell(40,6, $data['prodi'],1,0);  
    $pdf->Cell(35,6, $data['semester'],1,0);  
    $pdf->Cell(30,6,'',1,1);
}

// while($sata = mysqli_fetch_array($query)){
//     $pdf->Cell(9,6,$index++,1,0);
//     $pdf->Cell(20,6,$sata['nim'],1,0);
//     $pdf->Cell(60,6, $sata['nama'],1,0);  
//     $pdf->Cell(40,6, $sata['prodi'],1,0);  
//     $pdf->Cell(35,6, $sata['tahunmasuk'],1,0);  
//     $pdf->Cell(30,6,'',1,1);  
// }

$pdf->Output();