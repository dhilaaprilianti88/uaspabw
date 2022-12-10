<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DigiHelp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url() ?>template/img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url() ?>template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() ?>template/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


<!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Bogor Utara, Kota Bogor </small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>digihelp@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Hubungi Kami:</small>
                <a class="text-white-50 ms-3" href="https://chat.whatsapp.com/JcHGvbQsHcs53az4II9xPY"><i class="fab fa-whatsapp""></i></a>
                <a class="text-white-50 ms-3" href="mailto:digihelp@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="text-white-50 ms-3" href="https://www.youtube.com/channel/UCRb6dr0uRBylwp1fctTGdwg"><i class="fab fa-youtube"></i></a>
                <a class="text-white-50 ms-3" href="https://www.instagram.com/dhilaaprilianti88/?hl=id"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Digi<span class="text-white">Help.</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?php echo base_url('userview/index'); ?>" class="nav-item nav-link"><div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-1">Beranda</div></a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Ayo Kirimkan Donasimu</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Donate Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Pendataan Donasi</div>
                    <h1 class="display-6 mb-2">Silakan Isi Formulir</h1>
                    <p>Setelah formulir dikirim, tim akan segera memeriksa kelayakan barang dari foto yang telah diunggah. Jika barang masih layak untuk didonasikan, tim akan segera melakukan proses pick up</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-secondary p-5">
                    <?php 
                    // $dataquery = $this->db->query('SELECT * FROM tb_barang FULL JOIN penerima ON id_penerima = penerima.id;',$where)->result();
                    foreach($tb_barang as $qy){ 
                    ?>
                        <form action="<?php echo base_url(). 'admin/crud_donasi/tambahdonasi_aksi'; ?>" enctype="multipart/form-data" class="was-validated" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <!-- <br><label for="Name">ID Barang Donasi</label> -->
                                    <input class="form-control form-control bg-light border-0"  type="hidden" name="id_barang" value="<?php echo $qy->id_barang ?>">
                                    <br><label for="Name">Tanggal Donasi</label>
                                    <input class="form-control form-control bg-light border-0" type="date" placeholder="Your Name" name="tanggal_donasi" required>
                                    <br><label for="name">Nama Donatur</label>
                                     <input type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name" name="nama_donatur" required>
                                    <br><label for="number">No.Hp/WhatsApp</label>
                                    <input type="text" class="form-control bg-light border-0" id="number" placeholder="Your Email" name="nohp" required>
                                    <br><label for="address">Alamat</label>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" name="alamat" required>
                                    
                                    <!-- <br><label for="penerima">Nama Penerima</label>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Email" name="nama_penerima" value="<?php echo $qy->nama ?>" required> -->
                                    <br><label for="penerima">Jenis Barang Donasi</label>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Email" name="jenis_barang" value="<?php echo $qy->jenis_barang ?>" required>
                                    <br><label for="barang">Barang yang Akan Didonasikan</label>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Email" name="nama_barang" value="<?php echo $qy->nama_barang ?>" required>
                                    <br><label for="Name">Foto Kondisi Barang</label>
                                    <input type="file" accept="image/jpg, image/jpeg, image/png" class="form-control bg-light border-0" name="gb_depan" accept="image/jpg, image/jpeg, image/png" required>
                                    <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
                                    <label class="form-check-label" for="myCheck">Saya sudah mengisi data donasi dengan benar</label>
                                    <div class="invalid-feedback">Checklist kotak untuk melanjutkan</div>
                                    <input class="btn btn-primary py-2 px-3 me-3" type="submit" value="Donasi Sekarang">
                                </div>										
                            </div>
                        </form>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>
        

     <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h1 class="fw-bold text-primary mb-4">Digi<span class="text-white">Help.</span></h1>
                    <p>Digihelp adalah Web penyaluran barang yang masih memiliki manfaat dan nilai jual sesuai dengan kebutuhan target.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="https://chat.whatsapp.com/JcHGvbQsHcs53az4II9xPY"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square me-1" href="mailto:digihelp@gmail.com"><i class="fa fa-envelope"></i></a>
                        <a class="btn btn-square me-1" href="https://www.youtube.com/channel/UCRb6dr0uRBylwp1fctTGdwg"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="https://www.instagram.com/dhilaaprilianti88/?hl=id"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
             
				
				<div class="col-md-6 text-center text-md-end">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jl.Tatapakan 04 No.19, Bogor Utara</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+0123456789</p>
                    <p><i class="fa fa-envelope me-3"></i>digihelp@gmail.com</p>
                </div>
           
                <div class="col-lg-3 col-md-6">
                   
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>template/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>template/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>template/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>template/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>template/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url() ?>template/js/main.js"></script>
</body>

</html>
