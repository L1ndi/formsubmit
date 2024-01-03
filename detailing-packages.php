<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpg" href="img/foto-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Auto Detailing</title>
</head>
<body>
    <section class="header">
        <nav>
        <div class="header-content">
            <div class="logo"> 
                <a href="index.html">
                    <h3>AutoDetailing</h3>
                </a>
            </div>
            <div class="nav-items">
                <ul>
                    <li> <a href="index.html">Home</a></li>
                    <li> <a class="active" href="detailing-packages.php">Detailing Packages</a></li>
                    <li> <a href="warranty.html">Warranty</a></li>
                    <li> <a href="our-work.html">Our Work</a></li>
                    <li> <a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        </nav>
    </section>
    
    <div class="img-container">
        <img src="img/mustangg.jpg">
        <div class="textin">Our services and prices below, are good for <br>any size passenger car,
             van, suv or pickup.
        </div>
    </div>

    <div class="terminet">
        click here to go directly to appointment request
        <a href="#data">
            <span class="link"></span>
        </a>
    </div>

    <section class="services">
        <h4>Best Value Services</h4>
    </section>

    <main class="main-text">
        <div class="st-service">
            <h3>Ultimate Interior Only Package 150€</h3>
            <p>This Package Includes:</p>
            <ul>
                <li>Interior vacuuming</li>
                <li>Interior cleaning of all plastic surfaces, cup holders, storage compartments and cracks</li>
                <li>Interior cleaning of all leather and vinyl if applicable</li>
                <li>Interior shampooing and stain removal of all seats, carpets, and floor mats</li>
                <li>Leather/Vinyl/Plastic conditioning and protection</li>
                <li>Interior and exterior glass cleaning</li>
            </ul>
            <p class="down-txt">Please allow 4 hours for this service</p>
        </div>

        <div class="nd-service">
            <h3>Platinum Detailing Package - 200€</h3>
            <p>This Package Includes:</p>
            <ul>
                <li>Hand wash</li>
                <li>Wheel clean</li>
                <li>Tire shine</li>
                <li>Exterior quick spray wax</li>
                <li>Interior vacuuming</li>
                <li>Interior cleaning of all plastic surfaces, cup holders, storage compartments and cracks</li>
                <li>Interior cleaning of all leather and vinyl if applicable</li>
                <li>Interior shampooing and stain removal of all seats, carpets, and floor mats</li>
                <li>Leather/Vinyl/Plastic conditioning and protection</li>
                <li>Interior and exterior glass cleaning</li>
            </ul>
            <p class="down-txt">Please allow 5 hours for this service</p>
        </div>

        <div class="rd-service">
            <h3>Diamond Detailing Package - 275€</h3>
            <p>This Package Includes:</p>
            <ul>
                <li>Exterior paint decontamination</li>
                <li>Exterior single stage paint correction/gloss enhancement</li>
                <li>Exterior application of a 6 month clear coat sealant</li>
                <li>Interior fine detail</li>
                <li>Interior headliner cleaning</li>
            </ul>
            <p class="down-txt">Please allow 6 hours for this service</p>
        </div>

        <div class="th4-service">
            <h3>Royalty Detail Package - 550€</h3>
            <p>This package provides a very thorough interior and exterior detail. Your vehicle will receive:</p>
            <ul>
                <li>Hand wash</li>
                <li>Wheel well cleaning</li>
                <li>Wheel face and barrel cleaning</li>
                <li>Undercarriage rinse</li>
                <li>Exterior clay bar treatment to remove sap, rust blooms, tar, and any other paint contaminants</li>
                <li>A thorough exterior machine polish (50% improvement of mild scratches and swirls)</li>
                <li>Clear coat sealant/wax</li>
                <li>A fine interior detail which includes a thorough vacuum, cleaning of all vents, cup holders,
                    cracks/crevices, carpet shampoo/stain removal, leather cleaning and treatment if applicable,
                    and all other surfaces throughout. </li>
                <li>Floor mat cleaning</li>
                <li>Headliner cleaning</li>
                <li>Vacuuming of trunk and cargo areas</li>
            </ul>
            <p class="down-txt">Please allow 8 hours for this service</p>
        </div>

        <div class="wax">
            <h3>Exterior Wash and Wax - 40€</h3>
            <ul>
                <li>Exterior hand wash, wheel clean, tire shine</li>
                <li>Hand application of carnauba based paste wax</li>
                <li>Exterior Glass cleaning</li>
            </ul>
            <p class="down-txt">It only takes 1 hour for this service!</p>
        </div>
    </main>

    <section class="bookings">
        <h4>Bookings</h4>
    </section>

    <section class="orari">
        <h4>Hours</h4>
        <p>
            <span>Monday - Friday: 9am - 5pm</span>
        </p>
        <p>
            <span>Saturday: Closed</span>
        </p> 
        <p>
            <span>Sunday: Closed</span>
        </p>
    </section>

    <form id="data" action="https://formsubmit.co/erolindtopojani@gmail.com" method="POST">
        <h4>Appointment request form.</h4>
    <div class="data-forma">
    <div class="data-st">
        <textarea name="nrtel" rows="" placeholder="Name*" style="width: 320px; height: 50px;"></textarea>
        <textarea class="email" name="email" rows="2" placeholder="Email*" style="width: 320px; "></textarea>
        <select name="packages" class="select-package">
            <option value="" disable selected hidden>Choose wanted detailing package</option>
            <option value="Ultimate Package">Ultimate Interior Only Package 150€</option>
            <option value="Platinum Package">Platinum Detailing Package - 200€</option>
            <option value="Diamond Package">Diamond Detailing Package - 275€</option>
            <option value="Royalty Package">Royalty Detail Package - 550€</option>
            <option value="Wash and Wax">Exterior Wash and Wax - 40€</option>
        </select>
        <textarea name="modeli" rows="6" placeholder="Are there any specific concerns you'd like us to address while the vehicle is being detailed?*" style="width: 320px; height: 224px;"></textarea>
    </div>
    <div class="data-nd">
        <textarea name="nrtel" rows="2" placeholder="Phone number*" style="width: 320px; height: 50px;"></textarea>
        <textarea name="modeli" rows="6" placeholder="Make and model of your vehicle?*" style="width: 320px; height: 224px;"></textarea>
    </div>
    </div>
    <input type="submit" value="Submit">
    </form>

    <secction class="map">
        <h4>Directions:</h4>
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16712.421761105856!2d21.256672686955767!3d42.227978455532416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547a9e71226915%3A0x5c7d4224c8cdc228!2sKacanik!5e0!3m2!1sen!2s!4v1703281665491!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </secction>


    <section class="bottom">
        <div class="bottom-txt">
            Hot cars cleaned and rolled out daily!
        </div>
        <img src="img/1969-Dodge-Charger-Ringbrothers-CATPIV-36.jpg">
    </section>

    <div class="bottom-link">
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0&list=LL&index=34" target="_blank">
            Click here to get you rolled on...
        </a>
    </div>

    <section class="social">
        <h4>Social</h4>
    </section>

    <footer class="main-footer">
        <div class="main-klasa">
               
            <div class="social">
                <div>
                  <a href="#">
                    <i class="fa fa-facebook-square"  style="font-size:36px"></i>
                  </a>
                </div>
                <div>
                    <a href="#">
                    <i class="fa fa-instagram"  style="font-size:36px"></i>
                    </a>
                </div>
            </div>
                
            <div>
                <p>2023 AutoDetailing - All Rights Reserved.</p>
            </div>
    </div>
</body>
</html>