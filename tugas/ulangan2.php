<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.min.css" />
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>justify-content-left
  </div>
</nav>
<!-- End Header -->
<!--  Content -->
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-6" style="padding:20px;">
            <div class="card">
                <div class="card-header"><center>Data Diri Pembeli</center></div>
                <div class="card-body">
                <form action="isi1.php" method="POST">
                        <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                </div>
                                </form>
                         </div>
                     </div>
                     <form action="pros.php" method="GET">
                   <fieldset>
                   <table>
                   <tr>
                   <td>DATA BARANG</td>
                   <td><input type="number" min="1" name="jumlah" required</td>
                   </tr>
                   </table>
                   <input type="submit" name="simpan" class="btn btn-primary"value="simpan"></input>
                   <hr>
                   </form>
                   </fieldset>
                         </div>
                     </div>
                  </div>


