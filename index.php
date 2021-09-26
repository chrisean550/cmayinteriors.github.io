<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
    <meta name="description" content="We will implement a flexible design to cater to your individual style and budget. Every project is a result of collaboration, quality design, and skilled workmanship.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="mobile.css">
	<title>C. May Interiors | Interior Design | Canonsburg & Peters Township</title>
</head>
<body>
	<?php include 'navbar.php'?>
    <div id="landing" class="landing">
        <h1>Artfully blending <br> interior design & style</h1>
        <div class="landing-buttons">
            <button id="scroll-button" type="button" class="button-style-1">Learn More</button>
            <button type="button" class="button-style-2"
            onclick="window.location.href='contact.php'">Lets Work</button>
        </div>
    </div>

    <div id="about" class="about-section">
        <img class="headshot" src="imgs/headshot.jpg" alt="Founder and owner Christine May of C. May Interiors"></img>
        <div class="about-content">
            <h2>About</h2>
            <br>
            <p>Since 2005 Christine May has been bringing design visions to life.</p>
            <br>
            <p>We are dedicated to creating the best version of your home by providing assistance with paint selection, window treatments, accessory and furniture selection and placement, space planning, and much more!</p>
            <br>
            <p>By consulting with you we will implement a flexible design to cater to your individual style and budget. We believe that every project is a result of collaboration, quality design, and skilled workmanship.</p>
            <br>
            <p>Let us take your home from ordinary to extraordinary!</p>
        </div>
    </div>

    <div class="studio-section">
        <div class="studio-content">
            <h2>The Studio</h2>
            <br>
            <p>Our studio, located at 137 West Pike St, Canonsburg, PA, is a direct reflection of the quality work we bring to every home.</p>
            <br>
            <p>With a modern and sophisticated design the studio serves as a catalyst for creativity to help inspire your personalized interior design.</p>
            <br>
            <p>Note: Hours are by appointment or open house from 10-2pm the 2nd and 4th Saturday every month.</p>
            <br>
            <button type="button" class="button-style-3"
            onclick="window.location.href='contact.php'">Lets Work</button>
        </div>
    </div>

    <div class="featured-section">
        <h2><span>Featured Work</h2></span>
        <div class="featured-images">
            <img class="featured-image" src="imgs/feature1.jpg" alt="">
            <img class="featured-image" src="imgs/feature2.png" alt="">
            <img class="featured-image" src="imgs/feature3.jpg" alt="">
        </div>
        <button type="button" class="button-style-4"
        onclick="window.location.href='projects.php'">See More</button>
    </div>
    <?php include 'footer.php'?>

    <script type='text/javascript' src='utils/nav.js'></script>
    <script type='text/javascript' src='utils/scroll.js'></script>
    <script src="https://use.fontawesome.com/1ffea26fd3.js"></script>
    <?php
        if(isset($_GET['scroll']))
        {
            if($_GET['scroll'] == 'about')
                echo "<script type='text/javascript'>scroll()</script>";
        }
    ?>
</body>
</html>