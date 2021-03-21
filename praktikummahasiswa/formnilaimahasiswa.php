<?php
$proses = $_GET['proses'];
$namahasiswa = $_GET['namaha'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tgs = $_GET['tugas'];
$nilai_uts = $uts * 30 / 100;
$nilai_uas = $uas * 35 / 100;
$nilai_tgs = $tgs * 35 / 100;
$total_nilai = $nilai_uts + $nilai_uas + $nilai_tgs;

if ($total_nilai >= 0 && $total_nilai <= 35){

    $keterangan = 'E';

}elseif ($total_nilai >= 36 && $total_nilai <= 55) {

    $keterangan = 'D';

}elseif ($total_nilai >= 56 && $total_nilai <= 69) {

    $keterangan = 'C';

} elseif ($total_nilai >= 70 && $total_nilai <= 84) {

    $keterangan = 'B';

    # code...
} elseif ($total_nilai >= 85 && $total_nilai <= 100) {

    $keterangan = 'A';

    # code...
} else{

 $keterangan = 'I';


}






?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulir Nilai</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="text-black p-2 mt-5">
            <h1 class="text-center">Formulir Nilai</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 mt-5 mx-auto">
                    <form role="form" action="form.php" method="GET">
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Nama Mahasiswa  :
                            </label>
                            <input type="text" class="form-control my-input" name="namaha" />
                        </div>

                        <div class="form-group"> 
                            <label for="MATKUL">
                                Mata Kuliah :
                            </label>
                            <select name="matkul" class="form-control my-input">
                                <option selected>Pilih Mata Kuliah</option>
                                <option value="PW">Pemrograman Web</option>
                                <option value="BDI">Basis Data I</option>
                                <option value="DDP">Dasar - Dasar Pemrograman</option>
                                <option value="UI/X">User Interface User Experience</option>
                            </select>
                        </div>

                        <div class="form-group"> 
                            <label for="Nilai UTS">
                                Nilai UTS   :
                            </label>
                            <input type="text" class="form-control" name="uts" />
                        </div> 

                        <div class="form-group"> 
                            <label for="Nilai UAS">
                                Nilai UAS   :
                            </label>
                            <input type="text" class="form-control" name="uas" />
                        </div>

                        <div class="form-group"> 
                            <label for="Nilai Tugas">
                                Nilai Tugas   :
                            </label>
                            <input type="text" class="form-control" name="tugas" />
                        </div>

                        <button type="submit" name="proses" class="btn btn-outline-success">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="col-8 mt-5 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header bg-success text-black">
                                Result
                            </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama : <?= $namahasiswa ?></li>
                            <li class="list-group-item">Mata Kuliah : <?= $matkul ?></li>
                            <li class="list-group-item">Nilai UTS : <?= $uts ?></li>
                            <li class="list-group-item">Nilai UAS : <?= $uas ?></li>
                            <li class="list-group-item">Nilai Tugas : <?= $tgs ?></li>
                            <li class="list-group-item">Hasil Nilai : <?= $keterangan ?></li>

                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                </div>
            </div>
        </div>
    </body>
</html>