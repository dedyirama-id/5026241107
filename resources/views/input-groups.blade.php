<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyITS Kost - Formulir Pemesanan Kost</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-top: 70px;

            font-family: 'Inter', sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .brand-primary {
            background-color: #013880;
            color: white;
        }

        .brand-secondary {
            background-color: #f4f6f9;
            color: black;
        }

        .kost-carousel .carousel-inner {
            height: 400px;
            border-radius: 4px;
            overflow: hidden;
        }

        .kost-carousel .carousel-item {
            height: 100%;
        }

        .kost-carousel .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .selectable-label {
            background-color: white;
            margin-bottom: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm brand-primary navbar-dark fixed-top">
        <a class="navbar-brand font-weight-bold" href="#">MyITS Kost</a>
    </nav>

    <!-- Main content -->
    <main class="container mt-4 mb-5">
        <!-- Jumbotron -->
        <div class="jumbotron brand-secondary">
            <div class="row">
                <div class="col-2 mr-4">
                    <img class="w-100" src="https://upload.wikimedia.org/wikipedia/id/c/c4/Badge_ITS.png"
                        alt="Logo ITS" />
                </div>
                <div class="col-8 align-self-center">
                    <h1 class="font-weight-bold">Formulir Pemesanan Kost</h1>
                    <p>Silahkan isi data diri anda untuk melakukan pemesanan kost</p>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div id="kostCarousel" class="kost-carousel carousel slide mb-4" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#kostCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#kostCarousel" data-slide-to="1"></li>
                <li data-target="#kostCarousel" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1619810230359-b2c2f61c49cd?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Kost varian 1" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1600210491305-7396500b5b31?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Kost varian 2" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1541004995602-b3e898709909?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Kost varian 3" />
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#kostCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#kostCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!-- Form -->
        <form>
            <label class="font-weight-bold">Data Diri</label>

            <!-- Nama Lengkap -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nama Lengkap</span>
                </div>
                <input type="text" class="form-control" placeholder="Nama Depan" />
                <input type="text" class="form-control" placeholder="Nama Belakang" />
            </div>

            <!-- Fakultas dan Departemen -->
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                        Fakultas
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fakultas Sains dan Analitika Data (FSAD)</a>
                        <a class="dropdown-item" href="#">Fakultas Teknologi Industri dan Rekayasa Sistem
                            (FT-IRS)</a>
                        <a class="dropdown-item" href="#">Fakultas Teknik Sipil, Perencanaan, dan Kebumian
                            (FTSPK)</a>
                        <a class="dropdown-item" href="#">Fakultas Teknologi Kelautan (FTK)</a>
                        <a class="dropdown-item" href="#">Fakultas Teknologi Elektro dan Informatika Cerdas
                            (FTEIC)</a>
                        <a class="dropdown-item" href="#">Fakultas Desain Kreatif dan Bisnis Digital (FDKBD)</a>
                        <a class="dropdown-item" href="#">Fakultas Vokasi</a>
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Departemen" />
            </div>

            <!-- Nomor Telepon -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nomor Telepon</span>
                </div>
                <input type="text" class="form-control" placeholder="08xxxxxxxxx" />
            </div>

            <!-- Email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" placeholder="NRP" />
                <div class="input-group-append">
                    <span class="input-group-text">@student.its.ac.id</span>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <label class="font-weight-bold">Jenis Kelamin</label>
            <div class="row">
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" id="jk-laki" name="jenis_kelamin" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="jk-laki">Laki-laki</label>
                </div>
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" id="jk-perempuan" name="jenis_kelamin" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="jk-perempuan">Perempuan</label>
                </div>
            </div>

            <!-- Pilihan Fasilitas -->
            <label class="font-weight-bold">Pilihan Fasilitas</label>
            <div class="row">
                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-ac" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-ac">AC</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-kmd" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-kmd">Kamar Mandi Dalam</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-wifi" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-wifi">WiFi</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-kasur" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-kasur">Kasur</label>
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-lemari" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-lemari">Lemari</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-dapur" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-dapur">Dapur</label>
                </div>
                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-kulkas" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-kulkas">Kulkas</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" id="fac-mesin-cuci" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="fac-mesin-cuci">Mesin Cuci</label>
                </div>
            </div>

            <!-- Tipe Sewa -->
            <label class="font-weight-bold">Tipe Sewa</label>
            <div class="row">
                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" id="ts-per-semester" name="tipe_sewa" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="ts-per-semester">Per Semester</label>
                </div>

                <div class="input-group mb-3 col input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" id="ts-per-tahun" name="tipe_sewa" />
                        </div>
                    </div>
                    <label class="form-control selectable-label" for="ts-per-tahun">Per Tahun</label>
                </div>
            </div>

            <!-- Tombol -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Kode verifikasi" />
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        Dapatkan kode verifikasi
                    </button>
                    <button class="btn brand-primary" type="submit">Daftar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
