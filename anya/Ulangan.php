<!DOCTYPE html>
<html>
<head>
  <title> Latihan 1</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><b>ASSALAAM</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
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
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->
    <!-- Content -->
    <div class="container">
        <div class="row" style="padding:20px">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header badge-info" >Masukan Data Pembeli</div>
                    <div class="card-body">
                        <form action="barang.php" method="POST">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="ala" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk"  value="Laki Laki">
                                    <label class="form-check-label">
                                        Laki Laki
                                     </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal </label>
                                <input type="date" name="tgl" class="form-control">
                            </div>
                            <form action="" method="post">
                            <div class="form-group">
                                <label> Jumlah Barang</label>
                                <input type="number" name="jumlah" required class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="proses">Proses</button>
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="reset" name="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content-->
    <!-- footer -->
    <footer>
      <center><b>&copy; 2019 SMK ASSALAAM</b></center>
    </footer>
    <!--  End Footer-->
    <!-- Js -->
    <script  src="assets/js/jquery-3.4.1.min.js"></script>
    <script src=" assets/js/bootstrap.bundle.min.js"></script>
    <script src=" assets/js/bootstrap.bundle.js"></script>
    <!-- End Js -->
</body>
</html>