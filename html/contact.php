<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$human = (intval($_POST['human']));
		$from = 'Radabaugh Farms Website';
		$to = 'jeff@radabaughonline.com';
		//$to = 'primogranite@gmail.com';
		$subject = 'Message from Radabaugh Farms Website';

		$body = "From: $name\n E-mail: $email\n Phone: $phone\n Message:\n $message";

		//Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
		
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch regarding your question or comment soon!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Radabaugh Farms - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand"><font color="red">Radabaugh</font> Farms</div>
    <div class="address-bar">1069 Radabaugh Ridge Road | Buckhannon, WV 26201 | 304.613.304</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html"><font color="red">Radabaugh</font> <font color="black">Farms</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="whyus.html">Why Us?</a>
                    </li>
		            < <li>
                        <a href="CurrentProducts.html">Available for Purchase</a>
                    </li>
			        <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Radabaugh Farms</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAfJB9r8kGlxBUmIbbYEc-6xdiOMWJ6zgM&q=1069+Radabaugh+Ridge+Rd,+Buckhannon,+WV+26201" allowfullscreen></iframe>

</div>
                <div class="col-md-4">
                    <p>Email:
                        <strong><a href="mailto:name@example.com">charlie@radabaughfarnms.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>1069 Radabaugh Ridge Road
                            <br>Buckhannon, WV 26201</strong>
                    </p>
		    <p>Phone:
			<strong>304.613.3004</strong>
		    </p>		    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!--<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Form</strong>
                    </h2>
                    <hr>
                    <p>Would you like some more information about the getting a quote or starting a new project? Send us a message with the form below and we'll get back to you soon!</p>
                    <form class="form-horizontal" role="form" method="post" action="contact.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Smith" value="" name="name">
				<?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="example@domain.com" value="" name="email">
				<?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="304-867-5309" value="" name="phone">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message" id="message"></textarea>
				<?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
			    <div class="form-group col-lg-4">
				<label>Are you human? Whats 2+3?:</label>
				<?php echo "<p class='text-danger'>$errHuman</p>";?>
				<input type="text" class="form-control" id="human" placeholder="Your Answer" name="human">
			    </div> 

                            <div class="form-group col-lg-12">
                                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-default">
                            </div>

			    <div class="form-group">
				<div class="col-sm-4">
				<! Will be used to display an alert to the user>
					<?php echo $result;?>
			    	</div>
                            </div>

			    
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Radabaugh Farms 2017 provided by <a href="http://www.radabaughfarms.comn">Radabaugh Farms</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Google Analyitcs -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60978435-1', 'auto');
  ga('send', 'pageview');

</script>


</body>

</html>
