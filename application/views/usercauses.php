<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DigiHelp.</title>
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


    <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url() ?>template/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                   <h1 class="display-4 text-white mb-3 animated slideInDown">Ayo Ulurkan Tangan Mu Untuk Berdonasi.</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Mari kita sama-sama membantu saudara kita yang membutuhkan.</p>
                                    <a class="py-2 px-3 animated slideInDown" href="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url() ?>template/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Ayo Ulurkan Tangan Mu Untuk Berdonasi.</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Tidak ada hal yang lebih menyenangkan selain berbagi.</p>
                                    <a class="py-2 px-3 animated slideInDown" href="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Causes Start -->
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-6 mb-5">Mari Bantu Mereka Dapatkan yang Mereka Butuhkan</h1>
    </div>

     
    <div class="container-xxl py-5">
        <div class="container">            
            <div class="row g-4 justify-content-center">   
            
            <?php 
            
            foreach($tb_barang as $br){ ?>  

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p type="hidden" name="id_barang" <?php echo $br->id_barang ?>>
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">  
                            
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small><?php echo $br->jenis_barang ?></small>
                                </div>
                                    <h5 class="mb-3"><?php echo $br->nama_barang ?></h5>
                                    <br><p><?php echo $br->deskripsi ?></p><br><br>
                                    <div class="position-relative mt-auto">
                                        <img class="img-fluid" src="<?php echo base_url() . '/gambar/'. $br->photo_barang; ?>" width="540" height="400" alt="">
                                        <div class="causes-overlay">
                                            <a class="btn btn-outline-primary" <?php echo anchor('userview/donate/'. $br->id_barang, 'Donasi Sekarang');?>
                                            </a>
                                        </div> 
                                        
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <?php } ?> 
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    
    <!-- Causes End -->
        


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
