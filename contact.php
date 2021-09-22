<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="mobile.css">
	<title>C. May Interiors - Contact</title>
</head>
<body>
	<?php include 'navbar.php'?>
    <div class="content-section-wrapper">
    <div class="contact-section">
        <div>
            <h2>Get In Touch</h2>
            <form action='' method='POST' enctype='multipart/form-data'>
                <input type="text" required name="full-name" placeholder="Full Name"></input>
                <input type="email" required name="email" placeholder="Email"></input>
                <input type="text" required name="phone" placeholder="Phone #"></input>
                <textarea maxlength="1500" name='description' placeholder="How can we help you?"></textarea>
                <input type='submit' name='send' value='Submit'/>
            </form>
        </div> 
    </div>
</div>
    <?php include 'footer.php'?>
    <script type='text/javascript' src='utils/nav.js'></script>
    <script src="https://use.fontawesome.com/1ffea26fd3.js"></script>
</body>
</html>