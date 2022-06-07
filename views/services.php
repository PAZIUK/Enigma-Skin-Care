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
                                    <div class="name">Mini Facial + IPL</div>
                                    <div class="price"><span>$85</span></div>
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
                                    <div class="name">Hair removal underarm</div>
                                    <div class="price"><span>$85</span></div>
                                </div>
                                <div class="price_row">
                                    <div class="name">Package</div>
                                    <div class="price">
                                        <span>60/$360</span>
                                        <span>35/$360</span>
                                    </div>
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
                                    <div class="name">Mini Facial + IPL</div>
                                    <div class="price"><span>$85</span></div>
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
                                    <div class="name">Mini Facial + IPL</div>
                                    <div class="price"><span>$85</span></div>
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