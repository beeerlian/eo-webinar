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
