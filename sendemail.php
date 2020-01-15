<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@sbmozmedia.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Google verification - Indixing website-->
    <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
    <title>Contact us | SB-MOZMEDIA, Your Digital Agency</title>
    <meta name="description"
        content="SBmozmedia is a Web Development Agency based in Mozambique. We make affordable websites. We provide custom designs, development, maintenance and more. Call +258 321 2622">
    <meta name="keywords"
        content="Web Development Mozambique, Digital Marketing Mozambique, Affordable Websites Mozambique, Virtual Shop Mozambique, Domain Registration Mozambique, IT Consulting Mozambique, Website Quotes Mozambique, Development Agency Mozambique">
    <meta name="twitter:description" content="Digital Agency in Mozambique, Flexible and Affordable for Every Business">
    <meta name="twitter:title" content="SB-MOZMEDIA Digital Agency in Mozambique">
    <meta name="twitter:description" content="Digital Agency in Mozambique, Flexible and Affordable for Every Business">
    <link rel="canonical" href="https://www.sbmozmedia.com/">
    <meta property="og:title" content="SB-MOZMEDIA Digital Agency">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sbmozmedia.com/">
    <meta property="og:site_name" content="SB-MOZMEDIA">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122993878-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-122993878-1');
    </script>
    <!-- Bootstrap CSS and other links-->
    <link rel="shortcut icon" type="image/png" href="img/assets/sb_favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/fa-light.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
</head>
  <body id="home">
    <header>
        <div class=top-menu>
            <div class="container-fluid wild">
                <div class=row>
                    <div class=col-md-6>
                        <span class="contacts_email_cell mobile_hide"><span class="bold">Have Questions?</span> Contact
                            us: +258 84 321 2622 | info@sbmozmedia.com</span>
                    </div>
                    <div class="col-md-6 text-right log_in_register">
                        <a href="mailto:support@sbmozmedia.com"><span
                                class="contacts_email_cell mobile_hide span_move_right"><i class="fas fa-envelope"></i>
                                Support</span></a>
                        <a href="#"><span class="contacts_email_cell mobile_hide"><i class="fas fa-users"></i> Log
                                in</span>
                            <span class="contacts_email_cell mobile_hide">|</span>
                            <span class="contacts_email_cell mobile_hide">Register</span></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar fixed-top navbar-expand-md navbar-light" data-toggle="sticky-onscroll">
            <div class="container-fluid wild">
                <a class="navbar-brand" href="index.html"><img src="img/assets/sb_logo.jpg" alt=""></a>
                <button class="navbar-toggler compressed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">about us</a>
                        </li>
                        <li class=" nav-item dropdown dropbtn"><a class="nav-link" href="#">Services <span
                                    class="nav_arrow_down"><i class="far fa-chevron-down"></i></span></a>
                            <div class="dropdown-content">
                                <a href="des_dev.html">Web Design &amp; Development</a>
                                <a href="ecommerce.html">E-commerce Development</a>
                                <a href="digital.html">Digital Marketing</a>
                                <a href="domain_hosting.html">Domain &amp; Web Hosting</a>
                                <a href="email.html">Professional Emails</a>
                                <a href="maintenance.html">Website Maintenance</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">our work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">buy template</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="sendemail.php">contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">eng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">por</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="contact_hero">
            <div class="container-fluid wild">
                <div class="serv_dev_hero_content">
                    <div class="row align-items-center"></div>
                </div>
            </div>
        </div>
    </header>
      <!--contact form-->
      <section class="contactForm section-space justify-content-center">
        <div class="container-fluid wild">
          <div class="row align-items-center">
            
            <div class="col-lg-7 col-md-12">
              <div class="about_content">
                <span class="short_title">let's work together!</span>
                    <h2 class="section_title mb-1">contact us</h2>
                    <p class="about_p">It would be great to hear from you!</p>
              </div>
                      <?php if ($msg != "") echo "$msg<br><br>"; ?>

              <div class="contact_form mt-5">
                <form method="post" action="sendemail.php" enctype="multipart/form-data">
                <input class="form-control" name="name" placeholder="Full Name..."><br>
                <input class="form-control" name="subject" placeholder="Subject..."><br>
                <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                <input id="sendBtn" class="btn contact-btn" name="submit" type="submit" value="Enviar Email">
              </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-12">
              
            </div>
          </div>
            </div>
        </div>
      </section>
       <section class="footer section-space">
        <div class="container-fluid wild">
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <img class="mr-3" src="img/assets/map.png" alt="Physical Address">
                        <div class="media-body">
                            <span class="mt-0 footer_h5">Malhangalene "B",Rua Reinata Sadimba</span>
                            <span class="footer_p">número 96, 2o Andar, Quarteirão 42</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <img class="mr-3" src="img/assets/phone-contact.png" alt="Physical Address">
                        <div class="media-body">
                            <span class="mt-0 footer_h5">+258 84 321 2622 / +258 87 990 3476</span>
                            <span class="footer_p">Mon-Fri 8:30am to 6:30pm</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <img class="mr-3" src="img/assets/e-mail-envelope.png" alt="Physical Address">
                        <div class="media-body">
                            <span class="mt-0 footer_h5">info@sbmozmedia.com</span>
                            <span class="footer_p">Connect with us anytime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_last section-space">
        <div class="mail_chimp_promotions m-4">
            <div class="container-fluid wild">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="sub_promotions">Sign up today and get up to <span class="twenty_off">15% OFF</span>
                            on all our
                            Products
                            and Services!</h4>
                        <div class="sign_up_form pt-3">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mailchimp">
                                <form id="mc-embedded-subscribe-form" class="validate"
                                    action="https://sbmozmedia.us4.list-manage.com/subscribe/post?u=94596a46a11ea88474943128f&amp;id=705cd2acdc"
                                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                    class="validate" target="_blank" novalidate>
                                    <input id="mce-FNAME" class="name" name="FNAME" size="30" type="text" value=""
                                        placeholder="Enter your name" />
                                    <input id="mce-EMAIL" class="required email" name="EMAIL" size="30" type="email"
                                        value="" placeholder="Enter your email" />
                                    <input id="mc-embedded-subscribe" class="button contact-btn" name="subscribe"
                                        type="submit" value="sign up!" />
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wild">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="footer_title">our services</h3>
                    <ul class="list-unstyled list_serv">
                        <li>web design &amp; development</li>
                        <li>digital marketing</li>
                        <li>e-comemerce development</li>
                        <li>domain &amp; web hosting</li>
                        <li>professional email</li>
                        <li>website maintenance</li>
                    </ul>

                </div>
                <div class="col-md-4">
                    <h3 class="footer_title">about company</h3>
                    <ul class="list-unstyled list_serv">
                        <li><a href="#">about us</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">client login</a></li>
                        <li><a href="#">support request</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="footer_title">contact us</h3>
                    <ul class="list-unstyled list_serv">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> Bairro da Malhangalene "B", Rua Reinata Sadimba,
                            número 96, 2o Andar, Quarteirão
                            42</li>
                        <li><i class="fas fa-mobile-alt"></i> +258 84 321 2622 / +258 87 990 3476</li>
                        <li><i class="far fa-envelope"></i> info@sbmozmedia.com</li>
                        <li><i class="far fa-envelope"></i> support@sbmozmedia.com</li>
                    </ul>
                    <ul class="list-unstyled social_media">
                        <li><a href="#"><img src="img/assets/facebook.png" alt="Facebook"><img></a></li>
                        <li><a href="#">
                        <li><img src="img/assets/linkedin.png" alt="Linkedin"></a></li>
                        <li><a href="#">
                        <li><img src="img/assets/instagram.png" alt="Instagram"></a></li>
                        <li><a href="#">
                        <li><img src="img/assets/twitter.png" alt="Twitter"></a></li>
                    </ul>
                    <div class="copyright">
                        <p>Copyright &copy; 2020. All rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
