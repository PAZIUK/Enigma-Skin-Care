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
                                <div class="price_row">
                                    <div class="name">Basic Enigma Facial</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Junior Facial</div>
                                    <div class="price"><span>$89</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Mini Facial + IPL Photofacial with Spectrum Mask</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Man`s Facial</div>
                                    <div class="price"><span>$109</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Ultrasound</div>
                                    <div class="price"><span>$99</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Deluxe Facial</div>
                                    <div class="price"><span>$249</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">LPG Face Massage</div>
                                    <div class="price"><span>$75/30min.</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">ENVY Medical Dermalinfusion</div>
                                    <div class="price"><span>$149</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                        <h3 class="service_title">Laser Hair Removal</h3>
                    <?php
                        }
                        if(!isset($_GET["view"])||$_GET["view"]=="laser-hair-removal"){ 
                        ?>
                        <div class="services <?php if(isset($_GET["view"])&&$_GET['view']=='laser-hair-removal'){ echo 'mt';}?>">
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Forehead</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Between Eyebrows</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Cheek</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Ear</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Lip</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Chin</div>
                                    <div class="price"><span>$45</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Sideburns</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Face</div>
                                    <div class="price"><span>$200</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Front Of The Neck</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Back Of The Neck</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Shoulder</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Between Breast</div>
                                    <div class="price"><span>$60</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Areola</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Front</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                                <div class="price_row">
                                    <div class="name">Hair Removal Upper Back</div>
                                    <div class="price"><span>$175</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Back</div>
                                    <div class="price"><span>$175</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Patch</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Abdomen</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Bikini Line</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                                <div class="price_row">
                                    <div class="name">Hair Removal Inner Thigh</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal 1/3 Buttocks</div>
                                    <div class="price"><span>$65</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal 1/2 Buttocks</div>
                                    <div class="price"><span>$85</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Full Buttocks</div>
                                    <div class="price"><span>$150</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                                <div class="price_row">
                                    <div class="name">Hair Removal Lower Leg</div>
                                    <div class="price"><span>$100</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Hair Removal Feet</div>
                                    <div class="price"><span>$75</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                                <div class="price_row">
                                    <div class="name">BBL Forever Clear Acne Treatment Face</div>
                                    <div class="price"><span>$350</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BBL Forever Clear Acne Treatment Back</div>
                                    <div class="price"><span>$400</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BBL Pigmentation Treatment Single Area</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BBL Pigmentation Treatment Category</div>
                                    <div class="price"><span>$300</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BBL Vascular Treatment</div>
                                    <div class="price"><span>$300</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">BBL Single Vascular Treatment</div>
                                    <div class="price"><span>$50</span></div>
                                </div>
                            </div>
                            <div class="service">
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
                                <div class="price_row">
                                    <div class="name">Deep Tissue Massage</div>
                                    <div class="price">
                                        <span>60min/$95</span>
                                        <span>90min/$125</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Calming Hot Stone Massage</div>
                                    <div class="price"><span>60min/$125</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Cupping Massage / Fire Cupping</div>
                                    <div class="price"><span>60min/$125</span></div>
                                </div>
                            </div>
                            <div class="service">
                                <div class="price_row">
                                    <div class="name">Swedish Massage</div>
                                    <div class="price">
                                        <span>60min/$80</span>
                                        <span>90min/$125</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service">
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