<?php
//If the form is submitted
if(isset($_POST['submit'])) {

    //Check to make sure that the name field is not empty
    if(trim($_POST['contactname']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['contactname']);
    }

    //Check to make sure that the subject field is not empty
    if(trim($_POST['subject']) == '') {
        $hasError = true;
    } else {
        $subject = trim($_POST['subject']);
    }

    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['email']) == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    //Check to make sure comments were entered
    if(trim($_POST['message']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    //If there is no error, send the email
    if(!isset($hasError)) {
        $emailTo = 'dabar1@gmail.com'; //Put your own email address here
        $body = "Ime i prezime: $name \n\nEmail: $email \n\nBroj telefona: $subject \n\nPoruka:\n $comments";
        $headers = 'Upit sa stranice <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>     <html class="ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>LT | Lukenda Transport</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand col-sm-6" href="#home">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="top-nav">
                <li>
                    <a href="#home">POČETNA</a>
                </li>
                <li >
                    <a href="#onama">O NAMA</a>
                </li>
                <li>
                    <a href="#voznipark">VOZNI PARK</a>
                </li>
                <li>
                    <a href="#pracenjeposiljke">PRAĆENJE POŠILJKE</a>
                </li>
                <li>
                    <a href="#kontakt">KONTAKT</a>
                </li>
                <li>
                    <a href="#lokacija">LOKACIJA</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<div id="home"></div>

<!-- Carousel================================================== -->
<div id="myCarousel" class="carousel fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="item bg bg1 active">
            <div class="overlay"></div>
            <div class="container">
                <div class="carousel-caption">
                    <div class="row"><h2 class="caption">Više od</h2></div>
                    <div class="row"><h1 class="caption">5.000.000</h1></div>
                    <div class="row"><h2 class="caption">kilometara godišnje</h2></div>
                </div>
            </div>
        </div>
        <div class="item bg bg2">
            <div class="overlay"></div>
            <div class="container">
                <div class="carousel-caption">
                    <div class="carousel-tekst fadeIn ">
                        <h2 class="caption">24 satni</h2><h1 class="caption"> GPS nadzor</h1> <h2 class="caption">pošiljke i vozila</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg bg4">
            <div class="overlay"></div>
            <div class="container">
                <div class="carousel-caption">
                    <h2 class="caption">Iskusni vozači s</h2> <h1 class="caption dugacko">višegodišnjim</h1> <h2 class="caption">iskustvom</h2>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>


<div class="block" id="onama">
    <div class="container">
        <h1 class="naslov">
            LUKENDA TRANSPORT
        </h1>
        <blockquote class="blockquote-reverse">
            <i>gdje i kada treba već 20 godina</i>
        </blockquote>



        <p class="tekst">Poštovanje prema nekome ponajviše se očituje kroz odnos prema njemu bitnim vrijednostima. Stoga svakodnevno od 1993. godine, vodeći računa o potrebama naših klijenata, gradimo platformu bolje i pouzdanije usluge jer nama najdraža referenca je dugogodišnje povjerenje tvrtki koje se u svom poslovanju oslanjaju na nas, a za koje godišnje prevalimo više od 5.000.000 kilometara.

            Sve veća složenost današnjeg tržišta od svih sudionika zahtjeva iznimnu sinhronizaciju i pravovremenost reakcije - to je ono što našu djelatnost čini jedinstvenom, a ulogu u poslovnim procesima posebno bitnom.

            Stoga, svih 35 zaposlenih imaju zadatak tu ulogu odigrati za najvišoj razini s ciljem pravovremenosti isporuke i sigurnosti roba naših klijenata. Svoj posao shvaćamo vrlo ozbiljno.</p>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="okvir">
                    <div class="ikona">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <span class="broj">1993.</span>
                    <p class="tekst-broj">godina osnutka</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="okvir">
                    <div class="ikona">
                        <i class="fa fa-users"></i>
                    </div>

                    <span class="broj">35</span>
                    <p class="tekst-broj">zaposlenih</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="okvir">
                    <div class="ikona">
                        <i class="fa fa-road"></i>
                    </div>

                    <span class="broj">5.000.000</span>
                    <p class="tekst-broj">kilometara godišnje</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="okvir">
                    <div class="ikona">
                        <i class="fa fa-truck"></i>
                    </div>

                    <span class="broj">20</span>
                    <p class="tekst-broj">teretnih vozila</p>
                </div>
            </div>

        </div> <!-- end of row -->
    </div>
</div> <!-- end block -->



<div class="block" id="voznipark">
    <div class="voznipark"></div>

    <div class="container">
        <h1 class="naslov bijeli">
            VOZNI PARK
        </h1>
        <blockquote class="blockquote-reverse bijeli">
            <i>pouzdan, kvalitetan i održavan</i>
        </blockquote>
        <p class="tekst bijeli">

            Vozni park naše tvrtke broji 20 kamiona za prijevoz različitih vrsta tereta. Od prijevoza ceradne robe do tri metra visine (mega kamioni), preko frigo kamiona (hladni lanac) i Doppel stock prijevoza robe na dvije etaže za robe s temperaturnim režimom od -30° do +25° C.

            Za sve transporte unutar EU možemo osigurati isporuke unutar 24 sata.

            Putem donjih fotografija možete vidjeti naš vozni park u akciji.
        </p>

            <div id="links">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
                    <a href="img/galerija/slika1.jpg" title="Lukenda Transport" data-gallery>
                        <img class="img-responsive galerija efekt" src="img/galerija/thumb/thumb1.jpg" alt="Lukenda Transport" >
                    </a></div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
                    <a href="img/galerija/slika2.jpg" title="Lukenda Transport" data-gallery>
                        <img src="img/galerija/thumb/thumb2.jpg" alt="Lukenda Transport" class="img-responsive galerija efekt">
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
                    <a href="img/galerija/slika3.jpg" title="Lukenda Transport" data-gallery>
                        <img src="img/galerija/thumb/thumb3.jpg" alt="Lukenda Transport" class="img-responsive efekt">
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
                    <a href="img/galerija/slika4.jpg" title="Lukenda Transport" data-gallery>
                        <img src="img/galerija/thumb/thumb4.jpg" alt="Lukenda Transport" class="img-responsive efekt">
                    </a></div>
            </div>


    </div> <!-- end of container -->
</div>

<div class="block" id="pracenjeposiljke">
    <div class="container">
        <h1 class="naslov bijeli">
            PRAĆENJE POŠILJKE
        </h1>
        <blockquote class="blockquote-reverse bijeli">
            <i>transparentnost isporuke</i>
        </blockquote>

        <div class="row pracenje-container">
            <div class="col-lg-6 col-md-6 col-sm-6"><div class="mapa"><img class="img-responsive" alt="ilustracija" src="img/pracenje.png"></div></div>
            <div class="col-lg-6 col-md-6 col-sm-6"><p class="bijeli mapa-tekst">
                    Uz našu uslugu online praćenja pošiljke u svakom trenutku možete znati gdje se nalazi Vaša roba. Ukoliko želite koristiti ovu uslugu slobodno nas kontaktirajte putem email adrese ili telefona:</p>
                <div class="bijeli kontakt-podaci">
                    <div class="mail"><div class="row"><i class="fa fa-envelope"></i> <a class="mail-bijelo" href="mailto:#">info@lukenda-transport.hr</a></div></div>
                    <div class="telefon"><div class="row"><i class="fa fa-phone"></i> +385 (0) 99 263 53 78</div></div>
                </div>
                <p class="bijeli mapa-tekst">Aktivacijom ove besplatne usluge dobiti ćete na Vašu email adresu poveznicu putem koje pristupate servisu za nadzor.
                    Potpuna transparentnost isporuka dio je naše visoke razine usluge koju želimo osigurati svakom klijentu.</p>
            </div>
        </div>
    </div>
</div>

<div class="block" id="kontakt">
    <div class="container">
        <h1 class="naslov">
            KONTAKT
        </h1>
        <blockquote class="blockquote-reverse">
            <i>slobodno pitajte što Vas zanima</i>
        </blockquote>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row">
                <div id="contactWrapper" class="clearfix" role="form">
                    <div id="status">
                        <?php if(isset($hasError)) { //If errors are found ?>
                            <p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                        <?php } ?>

                        <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                            <div class="success">
                                <p><strong>Email uspješno poslan!</strong></p>
                                <p>Hvala Vam na poruci <strong><?php echo $name;?></strong>!</p>
                            </div>
                        <?php } ?>
                    </div>
                    <form class="kontakt-forma" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#kontakt" id="contactform">
                        <div class="form-group">
                            <input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" placeholder="Ime i prezime"/>
                            <i class="fa fa-user"></i>
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" placeholder="Email" />
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" placeholder="Broj telefona"/>
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="form-group">
                            <textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true" placeholder="Poruka"></textarea>
                        </div>

                        <button class="btn btn-primary pull-right posalji efekt" type="submit" name="submit" id="submitButton" title="Pošaljite nam poruku!"><i class="fa fa-share"></i> Pošalji</button>

                    </form>

                </div> <!-- end of contact wrapper -->
            </div>
        </div>

        <div class="djelatnici">
            <h1 class="podnaslov">KONTAKT OSOBE</h1>
            <div class="col-lg-3 col-md-3 col-sm-3">

                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <h2>JOSIP LUKENDA</h2>
                    <p class="pozicija">DIREKTOR</p>
                    <p><i class="fa fa-phone"></i> +385(0)98 467 244</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <h2>IVAN AMBREUŠ</h2>
                    <p class="pozicija">ADMINISTRACIJA</p>
                    <p><i class="fa fa-phone"></i> +385(0)99 263 5378</p>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <h2>JOSIP SALOPEK</h2>
                    <p class="pozicija">VODITELJ TRANSPORTA</p>
                    <p><i class="fa fa-phone"></i> +385(0)91 467 2440</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <h2>Hrvoje Marušić</h2>
                    <p class="pozicija">VODITELJ VOZNOG PARKA</p>
                    <p><i class="fa fa-phone"></i> +385(0)99 270 6284</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="block" id="lokacija">
    <div class="container">
        <h1 class="naslov bijeli">
            LOKACIJA
        </h1>
        <blockquote class="blockquote-reverse bijeli">
            <i>kako do nas?</i>
        </blockquote>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2793.7450511563243!2d18.737808999999995!3d45.55545399999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce873b055917f%3A0x39f2d2aa3430d1e7!2sLUKENDA+TRANSPORT!5e0!3m2!1sen!2sus!4v1401643043745" width="600" height="450" frameborder="0"></iframe>
            </div>
        </div>
<div class="lokacija-podaci">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="adresa">
                    <i class="fa fa-map-marker"></i>
                    <h4>Šumska ulica 12</h4>
                    <p class="bijeli">31000 Osijek</p>
                    <p class="bijeli">Hrvatska</p>

                </div>
            </div> <!--- end of col -->
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="adresa">
            <i class="fa fa-phone"></i>
            <h4>tel: +385(0)31 501 182</h4>
            <p class="bijeli">fax: +385(0)31 530 942 </p>

        </div>
    </div> <!--- end of col -->
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="adresa">
            <i class="fa fa-envelope"></i>
            <h4>info@lukenda-transport.hr</h4>
        </div>
    </div> <!--- end of col -->
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="adresa">
            <a href="download/Izvadak-iz-obrtnog-registra.pdf"><i class="fa fa-file-pdf-o "></i>
            <h4>Izvadak iz obrtnog registra</h4></a>
        </div>
    </div> <!--- end of col -->
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
        <div class="pull-left"><p class="copyright">© 2014 Lukenda Transport</p></div>
            <div class="pull-right"><div class="jezici"><a href="index_de.php"><img src="img/Germany.png" alt="njemacki"></a>  <a href="index_en.php"><img src="img/en.png" alt="engleski"></a></div></div>
        </div>
    </div>
</footer>


<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
</script>


<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.blueimp-gallery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script>
    $('.navbar-collapse ul li a').click(function(){
        $('.navbar-toggle:visible').click();
    });
</script>
</body>
</html>
