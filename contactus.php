<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/21c1597b6d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    

</head>
<body>
    <section class="header">
        <nav>
            <a href="contactus.html"><img src="images\logo.png"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="new.php">REGISTER</a></li>
                    <li><a href="membership.html">MEMBERSHIP</a></li>
                </ul>
            </div>
        </nav>
  

            <!------Alert messages start
            <div class="alert-success">
                  <span>Message sent. ThankYou for Contacting us!!!</span>
              </div>
            <div class="alert-error">
                <span>Something went wrong. Please try again.</span>
            </div>
                alert messages end--->
            <!--contact section starts-->
            <div class="contact-section">
                <div class="contact-info">
                    <div><i class="fa-solid fa-location-dot"></i>
                        <b>ADDRESS: Shrine Plaza, 1st Floor, Above Shree Ambika Restaurant, Tamtalav, Vasai 401201</b></div>
                    <div><i class="fa-solid fa-envelope"></i><b>GMAIL: rockthegymvasaii@gmail.com</b></div>
                    <div><i class="fa-solid fa-phone"></i><b>CONTACT: +91 9096801605</b></div>
                    <div><i class="fa-solid fa-clock"></i><b>TIMING: Mon - Fri-8:00AM to 5:00PM </b></div>
                </div>
                


                

                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form class="contact" action="save.php" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required />
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required />
                        <textarea name="message" rows="5" placeholder="Your message" required></textarea>
                        <input type="submit" name="submit" class="send-btn" value="Send" />
                    </form>
                </div>
                <div class="container">
                    <h1>LOCATION</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15057.982703930307!2d72.80096212222148!3d19.34767859092011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ae795c0ae8c9%3A0x9a1b91a42767fac3!2sRock%20The%20Gym!5e0!3m2!1sen!2sin!4v1661327794800!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>      <br><br><br><br>
            <div class="copyright">
                <h1>© ROCK THE GYM | Designed by Abhishek</h1><br>
            </div>
            </section>
</body>
</html>