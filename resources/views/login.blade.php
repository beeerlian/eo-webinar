<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="/login" method="post">
       {{ csrf_field() }}
    Email : <input type="text" name="email"> <br>
    Password: <input type="text" name="password"> <br>
    <input type="submit" value="Input nilai" name="btn-input"> <br> <br>
  </form>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Sign In</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <p class="navbar-brand">
                E-Learning - Sign In
            </p>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/register" class="nav-link contact">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">

                        <!-- <h1 class="text-white" data-aos="fade-up">We are ready for your digital marketing</h1>

            <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us
              discuss together!</a>

            <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i
                class="fa fa-phone mr-2"></i> +99 080 070 4224</strong> -->
                        <form action="/login" method="post" class="contact-form" data-aos="fade-up"
                            data-aos-delay="300" role="form">
                            {{ csrf_field() }}
                            <div class="col-lg-12 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required>
                            </div>
                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control" id="submit-button" name="btn-input">Sign
                                    In</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                        <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">E-Learning merupakan suatu<strong> website
                                pembelajaran online</strong>
                        </h2>

                        <p class="mb-0" data-aos="fade-up">Mempermudah siswa untuk bergabung
                            <br><br>dengan kelas yang <strong>sesuai jadwal dan materi </strong>yang siswa minati.
                            Berisi kelas-kelas dari pemateri terbaik, dan tema yang up-to-date dengan perkembangan
                            zaman.
                        </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                        <img src="images/office.png" class="img-fluid" alt="office">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <div class="contact-image" data-aos="fade-up">

                        <img src="images/female-avatar.png" class="img-fluid" alt="website">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-12">
                    <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Testimoni Siswa</h4>

                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Aplikasi yang sangat bagus,
                        sehingga memudahkan antara guru dan siswa untuk berinteraksi melalui metode pembelajaran online.
                    </h2>

                    <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Naufal Berlian</strong>

                        <span class="mx-1">/</span>

                        <small>Mahasiswa di UIN Sunan Gunung Djati Bandung</small>
                    </p>
                </div>

            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Jam Operasional Pelayanan:<br>
                        Senin-Jum'at Pukul 09.00-14.00 WIB
                    </h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +62 8888 267 265
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            e-learningku@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Temukan Kami di</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        Jl. A. H. Nasution No. 105, Kode Pos 40614, Bandung, Jawa Barat, Indonesia
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2021 E-Learning
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                    <ul class="footer-link">
                        <li>
                            <p>Kolaborasi dengan Kami</p>
                        </li>
                        <li>
                            <p>sebagai programmer</p>
                        </li>
                        <li>
                            <p>ataupun pengajar</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li>
                            <p class="fa fa-instagram"></p>
                        </li>
                        <li>
                            <p class="fa fa-twitter"></p>
                        </li>
                        <li>
                            <p class="fa fa-dribbble"></p>
                        </li>
                        <li>
                            <p class="fa fa-behance"></p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
