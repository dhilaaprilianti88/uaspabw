<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link href="<?php echo base_url() ?>template/img/1.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">DigiHelp Login</h1>
			<div class="container-xxl py-5 col-lg-6">
				<div class="container">
					<form action="<?php echo base_url(). 'login/aksi_login'; ?>" method="POST">
						<div class="row g-4">
							<div class="col-12">
								<div class="form-floating">
                                <input type="name" placeholder="Email" name="name" value="" class="form-control bg-light border-0" required>
									<label for="email">Email</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-floating">
                                <input type="password" placeholder="Password" name="password" value="" class="form-control bg-light border-0" required>
									<label for="number">Kata Sandi</label>
								</div>
							</div>
							<div>
								<input type="submit" class="btn btn-primary py-2 px-3 me-2 " name="submit" value="Masuk">
							</div>
                            <div>
                                <!-- <p hidden class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p> -->
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- Page Header End -->


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