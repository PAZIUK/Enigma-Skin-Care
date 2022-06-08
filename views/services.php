<main>
    <section class="moreServices">
    <?php 
        if(!empty($_GET)){
            ?>
            <div class="topic">
                <div class="container">
                    <h2 class="title">
                    <?php 
                        if(!isset($_GET["view"])){ echo "All Services";}
                        else if($_GET["view"]=="skin-care-services"){ echo "Skin Care Services";}
                        else if($_GET["view"]=="laser-hair-removal"){ echo "Laser Hair Removal";}
                        else if($_GET["view"]=="bbl-treatment"){ echo "BBL Treatment";}
                        else if($_GET["view"]=="massage-therapy"){ echo "Massage Therapy";}
                    ?>
                    </h2>
                </div>
            </div>
            <div class="container">

                <div class="service_row">
                    <?php 
                        if(!isset($_GET["view"])){ 
                    ?>
                        <h3 class="service_title">Skin Care Services</h3>
                    <?php
                        } 
                        if(!isset($_GET["view"])||$_GET["view"]=="skin-care-services"){ 
                        ?>
                        <div class="services <?php if(isset($_GET["view"])&&$_GET['view']=='skin-care-services'){ echo 'mt';}?>">
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Skin Care Services/Basic Enigma Facial.jpg" alt="Basic Enigma Facial">
                                </div>
                                <div class="price_row">
                                    <div class="name">Basic Enigma Facial</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Skin Care Services/Junior Facial.jpg" alt="Junior Facial">
                                </div>
                                <div class="price_row">
                                    <div class="name">Junior Facial</div>
                                    <div class="price"><span>$89</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-1.5rem;" src="img/services/Skin Care Services/Mini Facial.jpg" alt="Mini Facial + IPL Photofacial with Spectrum Mask">
                                </div>
                                <div class="price_row">
                                    <div class="name">Mini Facial + IPL Photofacial with Spectrum Mask</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Skin Care Services/Man`s Facial.jpg" alt="Man`s Facial">
                                </div>
                                <div class="price_row">
                                    <div class="name">Man`s Facial</div>
                                    <div class="price"><span>$109</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Skin Care Services/Ultrasound.jpg" alt="Ultrasound">
                                </div>
                                <div class="price_row">
                                    <div class="name">Ultrasound</div>
                                    <div class="price"><span>$99</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Skin Care Services/Deluxe Facial.jpg" alt="Deluxe Facial">
                                </div>
                                <div class="price_row">
                                    <div class="name">Deluxe Facial</div>
                                    <div class="price"><span>$249</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-10.5rem;" src="img/services/Skin Care Services/LPG Face Massage.jpg" alt="LPG Face Massage">
                                </div>
                                <div class="price_row">
                                    <div class="name">LPG Face Massage</div>
                                    <div class="price"><span>$75/30min.</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3.5rem;" src="img/services/Skin Care Services/ENVY Medical Dermalinfusion.jpg" alt="ENVY Medical Dermalinfusion">
                                </div>
                                <div class="price_row">
                                    <div class="name">ENVY Medical Dermalinfusion</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <!-- <div class="service">
                                <div class="price_row">
                                    <div class="name">PRX T-33 Peel</div>
                                    <div class="price"><span>$199</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">DNA Recovery Peel</div>
                                    <div class="price"><span>$109</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Rejuvenize Peel</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Phytogen Peel</div>
                                    <div class="price"><span>$119</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Lifting Peel + LPG</div>
                                    <div class="price"><span>$199</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BioRePeelCI3</div>
                                    <div class="price"><span>$199</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Green Peel</div>
                                    <div class="price"><span>$89</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hyalual Peel</div>
                                    <div class="price"><span>$99</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Mediderma Salipeel</div>
                                    <div class="price"><span>$129</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Vitamin C Glow Peel</div>
                                    <div class="price"><span>$89</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Yellow Peel</div>
                                    <div class="price"><span>$99</span></div>
                                </div>
                            </div> -->
                        </div>
                    <?php
                        }
                    ?>
                </div>

                <div class="service_row">
                    <?php 
                        if(!isset($_GET["view"])){ 
                    ?>
                        <h3 class="service_title">Laser Hair Removal</h3>
                    <?php
                        }
                        if(!isset($_GET["view"])||$_GET["view"]=="laser-hair-removal"){ 
                        ?>
                        <div class="services <?php if(isset($_GET["view"])&&$_GET['view']=='laser-hair-removal'){ echo 'mt';}?>">
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Forehead.png" alt="Hair Removal Forehead">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Forehead</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Between Eyebrows.jpg" alt="Hair Removal Between Eyebrows">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Between Eyebrows</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Cheek.jpg" alt="Hair Removal Cheek">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Cheek</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Ear.jpg" alt="Hair Removal Ear">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Ear</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Upper Lip.jpg" alt="Hair Removal Upper Lip">
                                </div>  
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Lip</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Chin.jpg" alt="Hair Removal Chin">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Chin</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-7.5rem" src="img/services/Laser Hair Removal/Hair Removal Sideburns.jpg" alt="Hair Removal Sideburns">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Sideburns</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Full Face.jpg" alt="Hair Removal Full Face">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Face</div>
                                    <div class="price"><span>$200</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-5.5rem" src="img/services/Laser Hair Removal/Hair Removal Front Of The Neck.jpg" alt="Hair Removal Front Of The Neck">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Front Of The Neck</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-9rem" src="img/services/Laser Hair Removal/Hair Removal Back Of The Neck.jpg" alt="Hair Removal Back Of The Neck">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Back Of The Neck</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem" src="img/services/Laser Hair Removal/Hair Removal Shoulder.jpg" alt="Hair Removal Shoulder">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Shoulder</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Between Breast.jpg" alt="Hair Removal Between Breast">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Between Breast</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Areola.jpg" alt="Hair Removal Areola">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Areola</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-12rem" src="img/services/Laser Hair Removal/Hair Removal Upper Front.png" alt="Hair Removal Upper Front">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Front</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem" src="img/services/Laser Hair Removal/Hair Removal Underarm.jpg" alt="Hair Removal Underarm">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Underarm</div>
                                    <div class="price"><span>$85</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$360</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-2rem" src="img/services/Laser Hair Removal/Hair Removal Upper Arm.jpg" alt="Hair Removal Upper Arm">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Arm</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$450</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-8rem" src="img/services/Laser Hair Removal/Hair Removal Lower Arm.jpg" alt="Hair Removal Lower Arm">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Arm</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$450</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem;" src="img/services/Laser Hair Removal/Hair Removal Full Arm.jpg" alt="Hair Removal Full Arm">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Arm</div>
                                    <div class="price"><span>$175</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$750</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Upper Back.jpg" alt="Hair Removal Upper Back">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Back</div>
                                    <div class="price"><span>$175</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-7rem" src="img/services/Laser Hair Removal/Hair Removal Lower Back.jpg" alt="Hair Removal Lower Back">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Back</div>
                                    <div class="price"><span>$175</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Lower Patch.jpg" alt="Hair Removal Lower Patch">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Patch</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Lower Abdomen.png" alt="Hair Removal Lower Abdomen">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Abdomen</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Bikini Line.jpg" alt="Hair Removal Bikini Line">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Bikini Line</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Brazilian.jpg" alt="Hair Removal Brazilian">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Brazilian</div>
                                    <div class="price"><span>$150</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$600</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Inner Thigh.jpg" alt="Hair Removal Inner Thigh">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Inner Thigh</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem" src="img/services/Laser Hair Removal/Hair Removal 13 Buttocks.png" alt="Hair Removal 1/3 Buttocks">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal 1/3 Buttocks</div>
                                    <div class="price"><span>$65</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-4rem" src="img/services/Laser Hair Removal/Hair Removal 12 Buttocks.jpg" alt="Hair Removal 1/2 Buttocks">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal 1/2 Buttocks</div>
                                    <div class="price"><span>$85</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-2rem" src="img/services/Laser Hair Removal/Hair Removal Full Buttocks.jpg" alt="Hair Removal Full Buttocks">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Buttocks</div>
                                    <div class="price"><span>$150</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Upper Leg.jpg" alt="Hair Removal Upper Leg">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Leg</div>
                                    <div class="price"><span>$150</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$600</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-7rem" src="img/services/Laser Hair Removal/Hair Removal Lower Leg.jpg" alt="Hair Removal Lower Leg">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Leg</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-8rem" src="img/services/Laser Hair Removal/Hair Removal Feet.jpg" alt="Hair Removal Feet">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Feet</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Laser Hair Removal/Hair Removal Full Leg.jpg" alt="Hair Removal Full Leg">
                                </div>
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Leg</div>
                                    <div class="price"><span>$250</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price"><span>$1200</span></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                
                <div class="service_row">
                    <?php 
                        if(!isset($_GET["view"])){ 
                    ?>
                        <h3 class="service_title">BBL Treatment</h3>
                    <?php
                        } 
                        if(!isset($_GET["view"])||$_GET["view"]=="bbl-treatment"){ 
                        ?>
                        <div class="services <?php if(isset($_GET["view"])&&$_GET['view']=='bbl-treatment'){ echo 'mt';}?>">
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/BBL Treatment/BBL Forever Clear Acne Treatment Face.jpg" alt="BBL Forever Clear Acne Treatment Face">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Forever Clear Acne Treatment Face</div>
                                    <div class="price"><span>$350</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/BBL Treatment/BBL Forever Clear Acne Treatment Back.jpg" alt="BBL Forever Clear Acne Treatment Back">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Forever Clear Acne Treatment Back</div>
                                    <div class="price"><span>$400</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/BBL Treatment/BBL Pigmentation Treatment Single Area.png" alt="BBL Pigmentation Treatment Single Area">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Pigmentation Treatment Single Area</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem" src="img/services/BBL Treatment/BBL Pigmentation Treatment Category.jpg" alt="BBL Pigmentation Treatment Category">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Pigmentation Treatment Category</div>
                                    <div class="price"><span>$300</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/BBL Treatment/BBL Vascular Treatment.webp" alt="BBL Vascular Treatment">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Vascular Treatment</div>
                                    <div class="price"><span>$300</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-3rem" src="img/services/BBL Treatment/BBL Single Vascular Treatment.jpg" alt="BBL Single Vascular Treatment">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Single Vascular Treatment</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-5rem" src="img/services/BBL Treatment/BBL Photo-Facial.jpg" alt="BBL Photo-Facial">
                                </div>
                                <div class="price_row">
                                    <div class="name">BBL Photo-Facial</div>
                                    <div class="price"><span>$400</span></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>

                <div class="service_row">
                    <?php 
                        if(!isset($_GET["view"])){ 
                    ?>
                        <h3 class="service_title">Massage Therapy</h3>
                    <?php
                        } 
                        if(!isset($_GET["view"])||$_GET["view"]=="massage-therapy"){ 
                        ?>
                        <div class="services <?php if(isset($_GET["view"])&&$_GET['view']=='massage-therapy'){ echo 'mt';}?>">
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Massage Therapy/Deep Tissue Massage.jpg" alt="Deep Tissue Massage">
                                </div>
                                <div class="price_row">
                                    <div class="name">Deep Tissue Massage</div>
                                    <div class="price">
                                        <span>60min/$95</span>
                                        <span>90min/$125</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Massage Therapy/Calming Hot Stone Massage.jpg" alt="Calming Hot Stone Massage">
                                </div>
                                <div class="price_row">
                                    <div class="name">Calming Hot Stone Massage</div>
                                    <div class="price"><span>60min/$125</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Massage Therapy/Cupping Massage  Fire Cupping.jpg" alt="Cupping Massage / Fire Cupping">
                                </div>
                                <div class="price_row">
                                    <div class="name">Cupping Massage / Fire Cupping</div>
                                    <div class="price"><span>60min/$125</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img style="top:-5rem" src="img/services/Massage Therapy/Swedish Massage.png" alt="Swedish Massage">
                                </div>
                                <div class="price_row">
                                    <div class="name">Swedish Massage</div>
                                    <div class="price">
                                        <span>60min/$80</span>
                                        <span>90min/$125</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="photo_row">
                                    <img src="img/services/Massage Therapy/Anti-Cellulite Massage.jpg" alt="Anti-Cellulite Massage">
                                </div>
                                <div class="price_row">
                                    <div class="name">Anti-Cellulite Massage</div>
                                    <div class="price"><span>45min/$90</span></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <?php
        }
    ?>
    </section>
</main>