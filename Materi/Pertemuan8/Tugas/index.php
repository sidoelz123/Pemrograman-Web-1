<center>
<table border=1 cellspacing=0 cellpadding=5 width=100%>
    <tr>
        <th rowspan=2 >No</th>
        <th rowspan=2>Nama</th>
        <th colspan=7>Kategori Nilai</th>
        <th rowspan=2>Nilai</th>
        <th rowspan=2>Grade</th>
    </tr>
    <tr>
        <th>Desain</th>
        <th>Point</th>
        <th>Nyawa</th>
        <th>Rintangan</th>
        <th>Musik</th>
        <th>Laporan</th>
        <th>Os</th>
    </tr>

<?php
$newdata = file_get_contents('data_mhs.txt'); // ambil data_mhs.txt
$newdata = json_decode($newdata); //ubah menjadi json

// print_r ($newdata); => cek data yang tersimpan
$no=1;
foreach ($newdata as $value) {
    // echo "<td>$value->nama</td>"; => cek properti nama
    
    $n = $value->nilai; 
        $nilaiAkhir = $n->desain + $n->point+$n->nyawa + $n->rintangan + $n->musik + $n->laporan+$n->os;
        $grade = $nilaiAkhir;
            if ($grade >=90) {
                $grade = 'A';
            }else if($grade >=80) {
                $grade = 'B';
            }else if($grade >=70){
                $grade = 'C';
            }else{
                $grade = 'D';
            }
            echo "
            <tr>
            <td>$no</td>
            <td>$value->nama</td>
            <td>$n->desain</td>
            <td>$n->point</td>
            <td>$n->nyawa</td>
            <td>$n->rintangan</td>
            <td>$n->musik</td>
            <td>$n->laporan</td>
            <td>$n->os</td>
            <td>$nilaiAkhir</td>
            <td>$grade</td> 
            </tr>";
            $no++;
    
    }
    
?>


</table>
</center>

