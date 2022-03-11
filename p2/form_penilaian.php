<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>form penilaian</title>
</head>
<body>
        <div class="m-5 border border-success p-4 rounded">
            <form action="form_penilaian.php" method="POST">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilihlah Mata kuliah</option>
                        <option value="bing">Bahasa Inggris</option>
                        <option value="ppkn">Pendidikan Pancasila dan Kewarganegaraan</option>
                        <option value="ddp">Dasar Dasar Pemrograman</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="m-5 border border-success p-4 rounded">
                <!-- Cetak php -->
                <?php
                    $nama = $_POST["nama"];
                    $matkul = $_POST["matkul"];
                    $nilai_uts = $_POST["uts"];
                    $nilai_uas = $_POST["uas"];
                    $nilai_tugas = $_POST["tugas"];
                    $nilai_total = (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);

                    if ($nilai_total >= 85 && $nilai_total <= 100) {
                      $grade = "A";
                    } elseif ($nilai_total >= 74 && $nilai_total <= 84) {
                      $grade = "B";
                    } elseif ($nilai_total >= 56 && $nilai_total <= 69) {
                      $grade = "C";
                    }elseif ($nilai_total >= 36 && $nilai_total <= 55) {
                      $grade = "D";
                    } elseif ($nilai_total >= 0 && $nilai_total <= 35) {
                      $grade = "E";
                    } else {
                      $grade = "I";
                    }

                    // switch
                    switch ($grade) {
                      case "A";
                      $predikat ="sangat memuaskan";
                        break;
                      case "B";
                      $predikat ="memuaskan";
                        break;
                      case "C";
                      $predikat ="cukup";
                        break;
                      case "D";
                      $predikat ="kurang";
                        break;
                      case "E";
                      $predikat ="sangat kurang";
                        break;
                      default:
                      $predikat ="tidak ada";
                        break;
                      }
                
                      echo"Nama :" . $nama;
                      echo"<br> Mata Kuliah :" . $matkul;
                      echo"<br> Nilai UTS :" . $nilai_uts;
                      echo"<br> Nilai UAS :" . $nilai_uas;
                      echo"<br> Nilai Tugas :" . $nilai_tugas;
                      echo '<br> Nilai Total :' . $nilai_total = (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);
                      echo '<br> Grade :' . $grade;
                      echo '<br> Predikat :' . $predikat;
                      ?>
                
        </div>
</body>
</html>