<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Mahasiswa</title>
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
        SEKOLAH TINGGI ILMU TARBIYAH
        </a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin: 30px;">Aplikasi Data Mahasiswa</h2>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_mahasiswa"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required="true">
                            <option value=""></option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                        </select>
                        <p class="text-danger" id="err_jurusan"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required="true">
                        <p class="text-danger" id="err_tanggal_masuk"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-laki
                        <input type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenkel"></p>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
            <input type="hidden" name="id" id="id">
        </form>
        <hr>

        <div class="data"></div>
    </div>

    <hr class="my-4">

    <div class="text-center">&copy
        <?php echo date('Y'); ?> Chat Me : 
        <a href="https://api.whatsapp.com/send? phone=6285237585803"> Kaligrafi Lombok</a>
    </div>


<script src="jquery.min.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap4.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="main.js" type="text/javascript"></script>

</body>
</html>
