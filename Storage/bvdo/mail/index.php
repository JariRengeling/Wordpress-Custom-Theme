<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SoftAOX - Send an Email via Gmail SMTP Server in PHP using PHPMailer</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <br />
    <div class="inner contact">
        <!-- Form Area -->
        <div class="contact-form">
            <h1 align="center">SoftAOX</h1>
            <h2 align="center">Send an Email via Gmail SMTP Server in PHP using PHPMailer</h2>
            <hr>
            <!-- Form -->
            <form action="mail.php" method="post">
                <!-- Left Inputs -->
            
                <!-- End Left Inputs -->

                <!-- Right Inputs -->
                <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">

                    <h3>To Address</h3>

                    <input type="email" name="toid" required class="form" placeholder="To : Email Id " />

                    <input type="text" name="subject" required class="form" placeholder="Subject" />

                    <textarea name="message" class="form textarea" placeholder="Message"></textarea>
                </div>
                <!-- End Right Inputs -->

                <!--  Submit -->
                    <button type="submit" id="submit" name="send" class="form-btn semibold">Send Message</button>
                <!-- End Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>

        </div>
        <!-- End Contact Form Area -->
    </div>
</body>

</html>