<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Nilai</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .form-sec{ 
                width:400px; 
                background:#ccc; 
                padding:15px;width: 400px;
                background: #f8f9fa;
                padding: 15px;
                box-shadow: 0 0 4px #ccc;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="form-sec">
                <h4>Form Nilai</h4>             
                <form method="POST" action="array_siswa.php">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama" name="nama[]">
                    </div>
                    <div class="form-group">
                        <label>Mata Kuliah:</label>
                        <select class="form-control" name="matkul[]">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai UTS:</label>
                        <input type="number" class="form-control" placeholder="Masukkan nilai UTS" name="nilai_uts[]">
                    </div>
                    <div class="form-group">
                        <label>Nilai UAS:</label>
                        <input type="number" class="form-control" placeholder="Masukkan nilai UAS" name="nilai_uas[]">
                    </div>
                    <div class="form-group">
                        <label>Nilai Tugas/Praktikum:</label>
                        <input type="number" class="form-control" placeholder="Masukkan nilai Tugas" name="nilai_tugas[]">
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>


        </div>
    </body>
</html>