<main>
    <section class="hello">
        <div class="container">
            <div class="infoBlock">
                <h2 class="slogan">We Are The Best Medical Spa in Chicago</h2>
                <a href="index.php?action=appointment">Get Started!</a>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <h2 class="title">OUR SERVICES</h2>
            <h3 class="desc"><?php echo CONFIG::getDescription()?></h3>
            <div class="myServices">
                <div class="mainService">
                    <div class="service">
                        <img src="img/services/main.jpg" alt="All Services">
                        <div class="name"><p>All Services</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services&view=anti-aging">Anti-Aging</a>
                            <a href="index.php?action=services&view=brightening">Brightening</a>
                            <a href="index.php?action=services&view=acne">Acne</a>
                            <a href="index.php?action=services&view=hair-solutions">Hair Solutions</a>
                            <a href="index.php?action=services" class="main">All Services</a>
                        </div>
                    </div>
                </div>
                <div class="otherServices">
                    <div class="service">
                        <img src="img/services/1.webp" alt="Service" style="top:-35%;">
                        <div class="name"><p>Anti-Aging</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Brightening</a>
                            <a href="index.php?action=services&view=acne">Acne</a>
                            <a href="index.php?action=services&view=hair-solutions">Hair Solutions</a>
                            <a href="index.php?action=services&view=anti-aging" class="main">Anti-Aging</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/2.webp" alt="Service" style="top:-5%;">
                        <div class="name"><p>Brightening</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=anti-aging">Anti-Aging</a>
                            <a href="index.php?action=services&view=acne">Acne</a>
                            <a href="index.php?action=services&view=hair-solutions">Hair Solutions</a>
                            <a href="index.php?action=services&view=brightening" class="main">Brightening</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/3.webp" alt="Service">
                        <div class="name"><p>Acne</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Brightening</a>
                            <a href="index.php?action=services&view=anti-aging">Anti-Aging</a>
                            <a href="index.php?action=services&view=hair-solutions">Hair Solutions</a>
                            <a href="index.php?action=services&view=acne" class="main">Acne</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="img/services/4.webp" alt="Service" style="top:-35%;">
                        <div class="name"><p>Hair Solutions</p></div>
                        <div class="service__block">
                            <a href="index.php?action=services">All Services</a>
                            <a href="index.php?action=services&view=brightening">Brightening</a>
                            <a href="index.php?action=services&view=acne">Acne</a>
                            <a href="index.php?action=services&view=anti-aging">Anti-Aging</a>
                            <a href="index.php?action=services&view=hair-solutions" class="main">Hair Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mainGallery">
        <div class="container">
            <h2 class="title">OUR GALLERY</h2>
            <div class="gallerySliderBlock">
                <div class="slide active" slide="1">
                    <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="slide" slide="2">
                    <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="slide" slide="3">
                    <img src="img/gallery/2.jpg" alt="">
                </div>
                <div class="slide" slide="4">
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
</main>