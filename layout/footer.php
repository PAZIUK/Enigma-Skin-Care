    
    <footer id="footer">
        <div class="container">
            <div class="info">
                <div class="logo">
                    <img src="img/Enigma_logo1.png" alt="TOP Masonry&amp;Tuckpointing">
                </div>
                <div class="text"><?php echo CONFIG::getDescription()?></div>
            </div>
            <div class="contact">
                <h1 class="head">CONTACTS</h1>
                <ul class="body">
                    <li>
                        <img src="img/assets/phone.png" alt="Phone">
                        <a href="tel:<?php echo CONFIG::getPhone()?>"><?php echo CONFIG::getFormatPhone(CONFIG::getPhone())?></a>
                    </li>
                    <li>
                        <img src="img/assets/gmail.png" alt="Mail">
                        <a href="mailto:<?php echo CONFIG::getMail()?>"><?php echo CONFIG::getMail()?></a>
                    </li>
                    <li>
                        <img src="img/assets/location.png" alt="Location">
                        <p><?php echo CONFIG::getLocation()?></p>
                    </li>
                </ul>
            </div>
            <div class="work">
                <h3 class="head">OFFICE HOURS</h3>
                <ul class="body">
                    <li>Mon-Sat:  9am - 6pm</li>
                    <li>Sunday:  Closed</li>
                </ul>
            </div>
            <div class="menu">
                <h3 class="head">MENU</h3>
                <ul class="body">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About Us</a></li>
                    <li><a href="index.php?action=our-team">Our Team</a></li>
                    <li><a href="index.php?action=services">Services</a></li>
                    <li><a href="index.php#contacts">Locations</a></li>
                    <li><a href="index.php#contacts">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
    </body>
</html>