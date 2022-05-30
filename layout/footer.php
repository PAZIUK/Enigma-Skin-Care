    
    <footer id="footer">
        <div class="container">
            <div class="info">
                <a class="logo" href="index.php">
                    <img src="img/Enigma_logo.png" alt="Enigma Skin Care">
                </a>
                <ul class="contacts">
                    <li>
                        <img src="img/assets/location.png" alt="Location">
                        <p>575 Lincoln Ave, Winnetka, IL 60093, USA</p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2960.024169337911!2d-87.7344177846863!3d42.10695317920465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc4f733aec39d%3A0xce61b8040507f4f4!2s575%20Lincoln%20Ave%2C%20Winnetka%2C%20IL%2060093%2C%20USA!5e0!3m2!1sen!2sua!4v1653835270535!5m2!1sen!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
    </body>
</html>