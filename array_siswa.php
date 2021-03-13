<?php
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
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
                            foreach($nama_siswa as $ns => $k){
                                echo '<tr><td>'.$nomor.'</td>';
                                echo '<td>'.$k.'</td>';
                                echo '<td>'.$mata_kuliah[$ns].'</td>';
                                echo '<td>'.$nilai_uts[$ns].'</td>';
                                echo '<td>'.$nilai_uas[$ns].'</td>';
                                echo '<td>'.$nilai_tugas[$ns].'</td>';
                                $nilai_akhir = (30*$nilai_uts[$ns]/100) + (30*$nilai_uas[$ns]/100) + (35*$nilai_tugas[$ns]/100);
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


