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
    <!-- ABOUT -->
    <div class="container">
        <div class="row">

            <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
                <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                    <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                    <br><br>
                    <span style="font-size:25px"><i>This is to certify that</i></span>
                    <br><br>
                    <span style="font-size:30px"><b>{{ $user['email'] }}</b></span><br /><br />
                    <span style="font-size:25px"><i>has participating the course</i></span> <br /><br />
                    <span style="font-size:30px">{{ $event['title'] }}</span> <br /><br />
                    <span style="font-size:20px">on <b>Eo-Webinar</b></span>
                    <br /><br />
                    <span style="font-size:25px"><i>dated</i></span><br>

                    <span style="font-size:30px">{{ $event['time'] }}</span>
                </div>
            </div>
            {{-- <div class="col-lg-7 mx-auto col-md-10 col-12" style="background-color: aqua">
                <div class="about-info">

                    <h2 class="mb-4" data-aos="fade-up"><strong>Sertifikat Partisipasi</strong>
                    </h2>

                    <p class="mb-0" data-aos="fade-up">Dalam event webinar dengan tema
                        <br><strong>{{ $event['title'] }}</strong><br>
                        Atas nama :<br>
                        <strong>{{ $user['email'] }}</strong><br><br>
                    </p>
                    <br><br>
                    {{-- <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/office.png" class="img-fluid" alt="office">
                    </div> --}}
        </div>
    </div>
    </div>
    <br><br>
    <form action="/download-pdf" method="get" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form"
        target="_blank">
        {{ csrf_field() }}
        <div>
            <input type="hidden" class="form-control" name="userid" value={{ $user['_id'] }} placeholder="Email"
                required>
        </div>

        <div>
            <input type="hidden" class="form-control" name="eventid" value={{ $event['_id'] }} placeholder="Password"
                required>
        </div>
        <button type="submit" class="form-control" id="submit-button" name="btn-input"
            style="width: 20%;">Download</button>
    </form>
    </div>



    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
