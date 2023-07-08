<?php include 'class_bmi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Data Pasien</title>
</head>
<body>
    <div class= "container">
    <hr><h2 style="text-align: center; margin-top: 15px;">Data Pasien</h2><hr>
  
<form method="POST">
  <div class="form-group row">
  <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="umur" name="umur" placeholder="Masukan Umur" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki - laki" required="required"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Laki - laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-tachometer"></i>
          </div>
        </div> 
        <input id="berat_badan" name="berat_badan" placeholder="Masukan Berat badan" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">kg</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-text-height"></i>
          </div>
        </div> 
        <input id="tinggi_badan" name="tinggi_badan" placeholder="Masukan Tinggi Badan" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">cm</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<table class="table table-bordered">
    <tr class="table-primary text-center text-uppercase">
        <th>Nama Lengkap</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Berat badan</th>
        <th>Tinggi Badan</th>
        <th>BMI</th>
        <th>Keterangan</th>
    </tr>
<?php
       if(isset($_POST['submit'])){
          $nama = $_POST['nama'];
          $umur = $_POST['umur'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $berat_badan = $_POST['berat_badan'];
          $tinggi_badan = $_POST['tinggi_badan'];
          $tinggi_badan = $tinggi_badan/100;
          $bmi = new BMI($nama, $umur, $jenis_kelamin, $berat_badan, $tinggi_badan);
          $bmi->hasilBMI();
          $bmi->statusBMI();
            
?>

<tr class="table-warning text-center">
                <td><?= $bmi->nama; ?></td>
                <td><?= $bmi->umur; ?></td>
                <td><?= $bmi->jeniskelamin; ?></td>
                <td><?= $bmi->berat; ?></td>
                <td><?= $bmi->tinggi; ?></td>
                <td><?= number_format($bmi->hasilBMI(), 1, '.', ',');?></td>
                <td><?= $bmi->statusBMI(); ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</body>
</html>