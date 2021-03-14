<?php
    error_reporting(0);
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    if(isset($_POST['simpan'])){
        if(empty($nama_siswa)){
            echo "<p style='color:#F00;'>* Masukan Nama Anda</p>";
        }
        elseif(empty($nilai_uts)){
            echo "<p style='color:#F00;'>* Masukan Nilai UTS Anda</p>";
        }
        elseif(empty($nilai_uas)){
            echo "<p style='color:#F00;'>* Masukan Nilai UAS Anda</p>";
        }
        elseif(empty($nilai_tugas)){
            echo "<p style='color:#F00;'>* Masukan Nilai Tugas Anda</p>";
        }else{
            $list1 = ['nama'=>'Dimas','matkul'=>'DDP','uts'=>90,'uas'=>85,'tugas'=>80];
            $list2 = ['nama'=>'Yusuf','matkul'=>'BDI','uts'=>85,'uas'=>90,'tugas'=>80];
            $list3 = ['nama'=>$nama_siswa,'matkul'=>$mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
            $array_siswa = [$list1,$list2,$list3];
            array_push($list3,$nama_siswa,$mata_kuliah,$nilai_uts,$nilai_uas,$nilai_uas);
        }
    };


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Nilai Mahasiswa</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            .custab{
                border: 1px solid #ccc;
                padding: 5px;
                margin: 5% 0;
                box-shadow: 3px 3px 2px #ccc;
                transition: 0.5s;
                }
            .custab:hover{
                box-shadow: 3px 3px 0px transparent;
                transition: 0.5s;
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                    <thead>
                        <a href="form_nilai.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add</a>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>MATKUL</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Tugas</th>
                                <th>Nilai Akhir</th>
                            </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($array_siswa as $ns){
                                echo '<tr><td>'.$nomor.'</td>';
                                echo '<td>'.$ns['nama'].'</td>';
                                echo '<td>'.$ns['matkul'].'</td>';
                                echo '<td>'.$ns['uts'].'</td>';
                                echo '<td>'.$ns['uas'].'</td>';
                                echo '<td>'.$ns['tugas'].'</td>';
                                $nilai_akhir = (30*$ns['uts']/100) + (30*$ns['uas']/100) + (35*$ns['tugas']/100);
                                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                echo '<tr/>';
                                $nomor++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>


