<!DOCTYPE html>
<html lang="en">
<head>
    <title>aamra | the power of we</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{route('/')}}/front-end/image/fav.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel=stylesheet type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet'  href='{{route('/')}}/front-end/superfish_responsive/superfish.css' type='text/css' media='all' />


<!-- <link rel="stylesheet" type="text/css" href="{{route('/')}}/front-end/css/bootstrap.css"> -->
    <link rel='stylesheet' href='{{route('/')}}/front-end/iosslider/style.css' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="{{route('/')}}/front-end/css/style.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="{{route('/')}}/front-end/image/company-logo-2.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                    <span class="indicator"></span>

                    <ul class=" sub-menu">
                        <li><a href="about-aamra.php">About aamra</a></li>
                        <li><a href="management.php">Management</a></li>
                        <li><a href="our-credo.php">Our Credo</a></li>
                    </ul>

                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Businesses</a>
                    <span class="indicator"></span>

                    <ul class=" sub-menu">
                        <li><a href="textile-apparels.php">Textile & Apparels</a></li>
                        <li><a href="information-technology.php">Information Technology</a></li>
                        <li><a href="professional-development.php">Professional Development</a></li>
                        <li><a href="business-to-consumer.php">Business to Consumer</a></li>
                    </ul>

                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a>
                    <span class="indicator"></span>

                    <ul class=" sub-menu">
                        <li><a href="news.php">Press Release</a></li>
                        <li><a href="multimedia.php">Multimedia</a></li>
                        <li><a href="video-gallery.php">Video Gallery</a></li>
                    </ul>

                </li>

                <li> <a href="https://www.aamranetworks.com/investors/ipo-prospectus/">Investors</a> </li>

                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')



<!-- Footer -->
<footer class="container-fluid bg-4 pad_50">

    <div class="container">
        <div class="row" style="padding-bottom: 50px;">

            <div class="col-md-5">
                <h4>ABOUT AAMRA</h4>
                <p style="color: #d5d5d5;">aamra is an amalgamation of businesses focused towards catalyzing the modernisation of Bangladesh by providing technology driven solutions to their clients in various market segments.<a href="about-aamra.php" style="color: #fff;">Read More</a></p>
            </div>

            <div class="col-md-4">
                <h4>RELATED LINKS</h4>
                <ul class="borderDot">
                    <li><a href="https://ems.aamra.com.bd/">EMS</a></li>
                    <li><a href="https://outlook.office365.com/mail">Webmail</a></li>
                    <li><a href="http://people.aamra.com.bd/">Career</a></li>
                    <li><a href="contact.php" style="text-decoration: underline !important;">Contact Us</a></li>
                </ul>
            </div>


            <div class="col-md-3">
                <h4>CONTACT US</h4>
                <ul style="color: #d5d5d5;">
                    <li>Safura Tower (9th Floor) 20 Kemal Ataturk Avenue, Banani C/A, Dhaka – 1213 Bangladesh.</li>
                    <li> Contact Centre: 09666715715</li>
                    <li> Phone: +88 02 8831188</li>
                    <li> Fax: +88 02 8832446</li>
                    <li>Email: hrod.aamra@aamra.com.bd</li>
                </ul>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12" style="border-top: 5px solid #484848;padding-top: 30px;"><p>Powered by <img src="image/poweredby-aamra-white.png"> | infotainment ltd.</p> </div>

        </div>

    </div>



</footer>


<a href="#" id="totop">TOP</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type='text/javascript' src='{{route('/')}}/front-end/superfish_responsive/superfish_menu.js'></script>
<script type="text/javascript" src="{{route('/')}}/front-end/js/jquery.js"></script>
<script type="text/javascript" src="{{route('/')}}/front-end/iosslider/plugins.js"></script>
<script type='text/javascript' src='{{route('/')}}/front-end/iosslider/jquery.iosslider.min.js'></script>
<script type='text/javascript' src='{{route('/')}}/front-end/iosslider/jquery.iosslider.aamra.js'></script>
<script type="text/javascript" src="{{route('/')}}/front-end/js/custom.js"></script>


</body>
</html>
