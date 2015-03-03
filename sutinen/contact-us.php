<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Sutinen</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
  <link rel="Shortcut Icon" href="images/ico/icologo.ico">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<!--<link rel="shortcut icon" href="images/ico/icologo.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
</head><!--/head-->

<body>

        <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <?php include 'php/navbar.php'; ?>
        </nav>
    </header><!--/header-->


    <section id="contact-info">
        <div class="center">                
            <h2>Need to Reach Us?</h2>
        <?php include 'php/infoBlurb.php'; ?>
			<!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
        </div>
		
		
		
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe marginwidth="0" marginheight="0" frameborder="0" scrolling="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2764.1956918696596!2d-122.96255160000001!3d46.1468492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54946c57edf01439%3A0x4c57733f02c0d17c!2s2111+30th+Ave%2C+Longview%2C+WA+98632!5e0!3m2!1sen!2sus!4v1421880464022"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Computer Store</h5>
									<p>2111 30th Avenue</p>
									<br>
                                    <p>Longview, WA 98632</p>
                                    <p>Phone:360-578-9144 option <br>
                                    Email Address: webinquiry@sutinen.com</p>
                                </address>
                            </li>
                            <li class="col-sm-6">
                                <address>
                                    <h5>IT support</h5>
									<p>Consulting Office Lower Level<br>1323 - 14th Ave</p>
                                    <p>Longview, WA 98632</p>                                
                                    <p>Phone:360-578-9144 option 2 <br>
                                    Email Address:webinquiry@sutinen.com </p>
                                    <p>Come say hi anytime. We’d love to see you!</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
t       </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Send us an email</h2>
                <!--<p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" placeholder="First and Last name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" placeholder="email@business.com" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" placeholder="360-578-9144" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" id="company" placeholder="Sutinen" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" id="subject" placeholder="What do you need help with?" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" placeholder="Please give some details" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

   <?php include 'php/footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
