<main>
    <section class="hello">
        <div class="container">
            <div class="infoBlock">
                <h2 class="slogan">We Are The Best Medical Spa in Chicago</h2>
                <a href="index.php?action=appointment">Get Started!</a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <h2 class="title">- About Us -</h2>
            <div class="info">
                <div class="photo">
                    <img src="img/gallery/1.jpg" alt="Woman">
                </div>
                <div class="info__text">
                    <h2 class="info__title">Dr Diana</h2>
                    <p class="text">Dr. Michelle Lee is a Harvard trained and board-certified plastic surgeon with expertise in nonsurgical and surgical aesthetic procedures for the face and breast. Her path to plastic surgery began with art. As a concert pianist, Dr. Lee’s decade-long performance career refined her artistic approach to aesthetics.</p>
                    <p class="text">Dr. Lee obtained her medical degree from the University of Pennsylvania on a merit scholarship. She pursued a rigorous six-year residency in plastic surgery at Case Western Reserve University and a dedicated fellowship in aesthetic and reconstructive breast surgery at Harvard.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <div class="goal">
                <h3>1000+</h3>
                <p>years of service</p> 
            </div>
            <div class="goal">
                <h3>1000+</h3>
                <p>lives changed</p> 
            </div>
            <div class="goal">
                <h3>99%</h3>
                <p>satisfaction</p> 
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <h2 class="title">- OUR SERVICES -</h2>
            <h3 class="desc"><?php echo CONFIG::getDescription()?></h3>
            <div class="myServices">
                <div class="mainService">
                    <div class="service">
                        <img src="img/services/all.jpg" alt="All Services">
                        <div class="name"><p>All Services</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services&view=anti-aging">Skin Care Services</a>
                            <a href="index.php?action=services&view=brightening">Laser hair removal</a>
                            <a href="index.php?action=services&view=acne">BBL Treatment</a>
                            <a href="index.php?action=services&view=hair-solutions">Massage Therapy</a>
                            <a href="index.php?action=services" class="main">All Services</a>
                        </div>
                    </div>
                </div>
                <div class="otherServices">
                    <div class="service">
                        <img src="img/services/1.jpeg" alt="Service" style="top:-35%;">
                        <div class="name"><p>Skin Care Services</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Laser hair removal</a>
                            <a href="index.php?action=services&view=acne">BBL Treatment</a>
                            <a href="index.php?action=services&view=hair-solutions">Massage Therapy</a>
                            <a href="index.php?action=services&view=anti-aging" class="main">Skin Care Services</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/2.png" alt="Service" style="top:-5%;">
                        <div class="name"><p>Laser hair removal</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=anti-aging">Skin Care Services</a>
                            <a href="index.php?action=services&view=acne">BBL Treatment</a>
                            <a href="index.php?action=services&view=hair-solutions">Massage Therapy</a>
                            <a href="index.php?action=services&view=brightening" class="main">Laser hair removal</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/3.jpg" alt="Service">
                        <div class="name"><p>BBL Treatment</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Laser hair removal</a>
                            <a href="index.php?action=services&view=anti-aging">Skin Care Services</a>
                            <a href="index.php?action=services&view=hair-solutions">Massage Therapy</a>
                            <a href="index.php?action=services&view=acne" class="main">BBL Treatment</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/4.jpg" alt="Service" style="top:-35%;">
                        <div class="name"><p>Massage Therapy</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Laser hair removal</a>
                            <a href="index.php?action=services&view=acne">BBL Treatment</a>
                            <a href="index.php?action=services&view=anti-aging">Massage Therapy</a>
                            <a href="index.php?action=services&view=hair-solutions" class="main">Massage Therapy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mainGallery">
        <div class="container">
            <h2 class="title">- OUR GALLERY -</h2>
            <div class="gallerySliderBlock">
                <div class="slide" slide="1">
                    <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="slide" slide="2">
                    <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="slide active" slide="3">
                    <img src="img/gallery/2.jpg" alt="">
                </div>
                <div class="slide active" slide="4">
                    <img src="img/gallery/3.jpg" alt="">
                </div>
                <div class="slide" slide="5">
                    <img src="img/gallery/4.jpg" alt="">
                </div>
                <div class="slide" slide="6">
                    <img src="img/gallery/5.jpg" alt="">
                </div>
                <div class="slide" slide="7">
                    <img src="img/gallery/5.jpg" alt="">
                </div>
            </div>
            <a href="<?php echo CONFIG::getInstagram()?>" class="viewMore" target="_blank">See All</a>
            <div class="btns">
                <button class="prev">‹</button>
                <button class="next">›</button>
            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="info">
                <div class="name">Contacts</div>
                <ul class="contacts">
                    <li>
                        <img src="img/assets/location.png" alt="Location">
                        <p><?php echo CONFIG::getLocation()?></p>
                    </li>
                    <li>
                        <img src="img/assets/phone.png" alt="Phone">
                        <a href="tel:<?php echo CONFIG::getPhone()?>"><?php echo CONFIG::getFormatPhone(CONFIG::getPhone())?></a>
                    </li>
                    <li>
                        <img src="img/assets/gmail.png" alt="Mail">
                        <a href="mailto:<?php echo CONFIG::getMail()?>"><?php echo CONFIG::getMail()?></a>
                    </li>
                    <li>
                        <img src="img/assets/facebook.png" alt="Facebook">
                        <a href="<?php echo CONFIG::getFacebook()?>" target="_blank">Enigma Skin Care</a>
                    </li>
                    <li>
                        <img src="img/assets/instagram.png" alt="Mail">
                        <a href="<?php echo CONFIG::getInstagram()?>" target="_blank">Enigma Skin Care</a>
                    </li>
                </ul>
                <ul class="hours">
                    <li><img src="img/assets/hours.png" alt="Location">Office Hours:</li>
                    <li><img src="img/assets/hours.png" alt="Location">Mon-Sat: &nbsp;9am - 6pm</li>
                    <li><img src="img/assets/hours.png" alt="Location">Sunday: &nbsp;Closed</li>
                </ul>
            </div>
            <div class="map">
                <div class="name">Our Location</div>
                <div class="map__block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2960.024169337911!2d-87.7344177846863!3d42.10695317920465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc4f733aec39d%3A0xce61b8040507f4f4!2s575%20Lincoln%20Ave%2C%20Winnetka%2C%20IL%2060093%2C%20USA!5e0!3m2!1sen!2sua!4v1653835270535!5m2!1sen!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>