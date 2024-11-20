<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form PPDB</title>
    
  </head>
  <body>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <br><br>
    <center>
    <div class="card border-success mb-3" style="max-width: 70rem;">
  <div class="card-body text-dark">
    <h5 class="card-title"><u>Data Diri Calon Pendaftar</u></h5>
<br>
<br>
    <form action="hasil12.php" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="left">Jurusan</label>
    <div class="col-sm-10">
    <select class="form-select"  name="jurusan">
  <option selected width="20%">Pilih Jurusan</option>
  <option value="TKRO (MOBIL)">TKRO (MOBIL)</option>
  <option value="TBSM (SEPEDA MOTOR)">TBSM (SEPEDA MOTOR)</option>
  <option value="RPL (KOMPUTER)">RPL (KOMPUTER)</option>
</select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0" align="left">Jenis Kelamin</legend>
    <div class="col-sm-3" align="left">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
        <label class="form-check-label" for="jenis_kelamin1">
          Perempuan
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Laki-laki">
        <label class="form-check-label" for="gridRadios2">
          Laki-laki
        </label>
      </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Nomor HP siswa yang bisa dihubungi  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_siswa" placeholder="No HP">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Email </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email_siswa" placeholder="Email">
    </div>
  </div>
 
</div>
</center>

<!-- ALAMAT CALON PENDAFTAR -->
<br><br>
    <center>
    <div class="card border-success mb-3" style="max-width: 70rem;">
  <div class="card-body text-dark">
    <h5 class="card-title"><u>Alamat Calon Pendaftar</u></h5>
<br>
<br>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="left">Provinsi</label>
    <div class="col-sm-10">
    <select class="form-select" aria-label="Default select example" name="provinsi">
  <option selected width="20%">Pilih Provinsi</option>
  <option value="ACEH">ACEH </option>
  <option value="SUMATERA UTARA">SUMATERA UTARA</option>
  <option value="SUMATERA BARAT">SUMATERA BARAT</option>
  <option value="RIAU">RIAU </option>
  <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
  <option value="KEPULAUAN RIAU"> KEPULAUAN RIAU </option>
  <option value="DKI JAKARTA">DKI JAKARTA</option>
  <option value="JAWA BARAT">JAWA BARAT</option>
  <option value="JAWA TENGAH">JAWA TENGAH</option>
  <option value="JAWA TIMUR">JAWA TIMUR</option>
</select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="left">Kab / Kota</label>
    <div class="col-sm-10">
    <select class="form-select" aria-label="Default select example" name="kota">
    <optgroup label="Aceh">
        <option value="">Pilih Kab / Kota</option>
        <option value="aceh timur">Aceh Timur</option>
        <option value="sabang"> Sabang</option>
        <option value="langsa"> Langsa</option>
        <option value="lhokseumawe"> Lhokseumawe</option>
        <option value="subulussalam"> Subulussalam</option>
    </optgroup>
    <!-- Sumatera Utara -->
    <optgroup label="Sumatera utara">
    <option value="medan"> Medan</option>
    <option value="binjai"> Binjai</option>
    <option value="tebing tinggi"> Tebing Tinggi</option>
    <option value="pematangsiantar"> Pematangsiantar</option>
    <option value="tanjungbalai"> Tanjungbalai</option>
    <option value="sibolga"> Sibolga</option>
    <option value="padangsidimpuan"> Padangsidimpuan</option>
    <option value="gunungsitoli"> Gunungsitoli</option>
    </optgroup>
    
    <!-- Sumatera Barat -->
    <optgroup label="Sumatera Barat">
    <option value="padang"> Padang</option>
    <option value="bukittinggi"> Bukittinggi</option>
    <option value="pariaman"> Pariaman</option>
    <option value="payakumbuh"> Payakumbuh</option>
    <option value="sawahlunto"> Sawahlunto</option>
    <option value="solok"> Solok</option>
    <option value="padangpanjang"> Padangpanjang</option>
    </optgroup>

    <!-- riau -->
    <optgroup label="Riau">
    <option value="bengkalis"> Bengkalis</option>
        <option value="indragiri hilir"> Indragiri Hilir</option>
        <option value="indragiri hulu"> Indragiri Hulu</option>
        <option value="kampar"> Kampar</option>
        <option value="kepulauan meranti"> Kepulauan Meranti</option>
        <option value="kuantan singingi"> Kuantan Singingi</option>
        <option value="pelalawan"> Pelalawan</option>
        <option value="rokan hilir"> Rokan Hilir</option>
        <option value="rokan hulu"> Rokan Hulu</option>
        <option value="siak"> Siak</option>
    </optgroup>

    <!-- Sumatera Selatan -->
</select>

</center>
<br>

<center>
<div class="card border-success mb-3" style="max-width: 70rem;">
  <div class="card-body text-dark">
    <h5 class="card-title"><u>Data Asal Sekolah</u></h5>
<br>
<br>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Nama Asal Sekolah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Asal Sekolah">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Alamat Sekolah</label>
    <div class="col-sm-10">
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
  style="height: 100px" name="alamat_sekolah">
</textarea>
  <label for="floatingTextarea2">Alamat Sekolah</label>
</div>
    </div>
 

</div>
</center>
<br>

<center>
<div class="card border-success mb-3" style="max-width: 70rem;">
  <div class="card-body text-dark">
    <h5 class="card-title"><u>Data Orangtua</u></h5>
<br>
<br>

    <div class="row gy-2 gx-3 align-items-center">
    <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Nama Ortu / Wali</label>

  
  
  <div class="col-2">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect" name="wali">
      <option selected>Ayah</option>
      <option value="1">Ibu</option>
      <option value="2">Wali</option>
    </select>
  </div>
  <div class="col-sm-8">
    <label class="visually-hidden" for="specificSizeInputName">Nama Ortu / Wali</label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="Nama Lengkap"
    name="nama_ortu">
  </div>
  <!-- ini -->
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Pekerjaan Ayah / Ibu / Wali </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Ortu">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">No HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_ortu" placeholder="No Telepon">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" align="left">Alamat </label>
    <div class="col-sm-10">
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
  style="height: 100px" name="alamat">
</textarea>
  <label for="floatingTextarea2">Alamat </label>
</div>
    </div>
</div>
    </div>
    <div class="row mb-3">
    <div class="col-sm-7">
    <button type="submit" class="btn btn-primary" name="daftar">Simpan Dan Daftar</button>
    <button type="button" class="btn btn-outline-danger">Reset</button>
    </div>
  </div>
</form>
</div>
</center>


    </div>
  </div>
  </body>
</html>