<?php include 'php/sendmail.php';?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
    <meta name="description" content="Contact us with your interior design needs so we can breath new life to your home setup! We provide consultations to implement a design that is uniquely yours.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="mobile.css">
	<title>Contact | Schedule Your Consultation | Lets Work Together!</title>
</head>
<body>
    <?php echo $alert; ?>
	<?php include 'navbar.php'?>
    <div class="content-section-wrapper">
    <div class="contact-section">
        <div class="contact-form-container">
            <h2>Get In Touch</h2>
            <form action='' method='POST' enctype='multipart/form-data'>
                <input type="text" required name="full-name" placeholder="Full Name"></input>
                <input type="email" required name="email" placeholder="Email"></input>
                <input type="text" required name="phone" placeholder="Phone #"></input>
                <textarea maxlength="1500" name='message' placeholder="How can we help you?"></textarea>
                <input type='submit' name='submit' value='Submit'/>
            </form>
        </div> 
    </div>
</div>
    <?php include 'footer.php'?>
    <script type='text/javascript' src='utils/nav.js'></script>
    <script src="https://use.fontawesome.com/1ffea26fd3.js"></script>
    <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>