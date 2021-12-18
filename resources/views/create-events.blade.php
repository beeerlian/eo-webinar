<!DOCTYPE html>
<html lang="en">

<head>

    <title>Create Class</title>
    <!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
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
                E-Learning | Create your class
            </p>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href={{ url('/login-email') }} class="nav-link contact">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- CONTACT -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                    <h1 class="mb-4">Buat <strong>kelas Anda</strong> dengan <strong>materi terbaik</strong>
                        dan menarik</h1>

                    <p>Isi detail kelas anda sesuai dengan data yang tertera dibawah</p>
                    <p>Jadi bagian dari kami dengan membuat kelas anda sendiri.</p>
                </div>

                <div class="col-lg-8 mx-auto col-md-10 col-12">


                    <form action="/add-event" method="post" class="contact-form" data-aos="fade-up"
                        data-aos-delay="300" role="form">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" name="title" placeholder="Title" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" name="link" placeholder="Link" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" name="time" placeholder="Time" required>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="hidden" class="form-control" name="lecturer" value={{ $userId }}>
                            </div>

                            <div class="col-lg-5 mx-auto col-7">
                                <button type="submit" class="form-control" id="submit-button" name="submit">Create
                                    Class</button>
                            </div>
                        </div>

                    </form>
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
    <script src="js/custom.js"></script>

</body>

</html>
