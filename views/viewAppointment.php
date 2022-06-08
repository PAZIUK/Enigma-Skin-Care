<?php
    if (isset($_SESSION["isAdmin"])&&$_SESSION["isAdmin"]==true){
        if(!empty($_POST)){
            if(isset($_POST["action"])){
                if($_POST["action"]=="appointments"){
                    if(isset($_POST["isCheck"])&&$_POST["isCheck"]=="true"){
                        ADMIN::CheckAppointmentById($_POST["check"]);
                    }
                }
            }
        }
        ?>
        <main id="admin">
            <div class="container">
                <aside>
                    <a href="index.php" class="logo">
                    <img src="img/Enigma_Logo.png" alt="Logo">
                    </a>
                    <ul class="actions">
                        <li><a class="buttn" href="index.php?action=admin&view=appointments"><img src="img/assets/left-arrow.png" alt="Arrow"> Go Back</a></li>
                    </ul>
                </aside>
                <section class="content">
                    <?php
                    if(!empty($_POST)){
                        if(isset($_POST["action"])){
                            if($_POST["action"]=="appointments"){
                                if(isset($_POST["isCheck"])&&$_POST["isCheck"]=="true"){
                                    ADMIN::CheckAppointmentById($_POST["check"]);
                                }
                            }
                        }
                    }
                    if(isset($_GET["id"])){
                        $ID = $_GET["id"];
                    }
                    ?>
                    <div class="content__block active" id="appointments">
                        <?php $application = ADMIN::getAppointmentById($ID);
                            if($application!=null){
                                $application = $application[0];
                        ?>
                        <h2 class="title">APPLICATION №<?php echo $ID?></h2>
                        <div class="applicationAbout">
                            <div class="applicationAbout__row">
                                <p>№</p>
                                <p><?php echo $application["App_ID"]?></p>
                            </div>
                            <div class="applicationAbout__row">
                                <p>Name</p>
                                <p><?php echo $application["App_Name"]?></p>
                            </div>
                            <div class="applicationAbout__row">
                                <p>Email</p>
                                <a href="mailto:<?php echo $application["App_Mail"]?>"><?php echo $application["App_Mail"]?></a>
                            </div>
                            <div class="applicationAbout__row">
                                <p>Phone</p>
                                <a href="tel:<?php echo $application["App_Phone"]?>"><?php echo $application["App_Phone"]?></a>
                            </div>
                            <div class="applicationAbout__row">
                                <p>Comments</p>
                                <p><?php if(strlen($application["App_Comments"])>0){echo $application["App_Comments"];} else {echo "Doesn`t Exist";}?></p>
                            </div>
                            <div class="applicationAbout__row">
                                <p>Time</p>
                                <p>
                                <?php 
                                    $date = date_create($application["App_DateTime"]);
                                    echo date_format($date, 'm-d-Y  h:i:s A')
                                ?>
                                </p>
                            </div>
                            <div class="applicationAbout__row submit">
                                <?php if($application["App_Checked"]==1){?>
                                    <img src="img/assets/check-box.png" alt="Checked">
                                <?php } else { ?>
                                    <form action="" method="post" class="appointmentCheckedForm">
                                        <input type="hidden" name="action" value="appointments">
                                        <input type="hidden" name="check" value="<?php echo $application["App_ID"]?>">
                                        <input type="hidden" name="isCheck" value="true">
                                        <button type="submit">CHECK</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        } else{
                            ?>
                                <script>window.location.href = "index.php?action=admin"</script> 
                            <?php
                        } 
                        ?>
                    </div>
                </section>
            </div>
            <script src="js/admin.js"></script>
        </main>
        <?php        
    } else { 
?>
    <script>window.location.href = "index.php"</script> 
<?php
    }
?>