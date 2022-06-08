<?php
    if(isset($_POST)&&isset($_POST["appointment"])){
        USER::sendAppointment($_POST);
        ?>
        <script>
            let appointmentEndTime = new Date();
            appointmentEndTime.setHours(appointmentEndTime.getHours() + 24)
            localStorage.setItem('appointmentEndTime',appointmentEndTime)
            window.location.href = "index.php?action=appointmentSuccess"
        </script> 
        <?php
    }
?>
<main>
    <div class="container">
        <section class="appointment">
            <h1 class="title">Book an Appointment</h1>
            <div class="appointment__block">
                <div class="info">
                    <a class="logo" href="index.php">
                        <img src="img/Enigma_logo.png" alt="Logo" >
                    </a>
                    <div class="photo">
                        <img src="img/appointmentWoman.jpg" alt="Woman">
                    </div>
                </div>
                <div class="appointmentForm">
                    <h2>
                        Please call our office or fill out the form below, and we will reach out to confirm your appointment as soon as possible. We look forward to hearing from you! <br> 
                        Attention! You can send only 1 appointment in 24 hours.
                    </h2>
                    <form action="" method="POST" onsubmit="formAppointmentSubmit(event)">
                        <input type="hidden" name="appointment" id="appointment">
                        <div class="formRow">
                            <div class="inputBlock">
                                <label for="firstName">First name</label>
                                <input type="text" maxlength="32" placeholder="First name" name="first_name" pattern="[A-Za-z]{1,32}" required id="firstName">
                            </div>
                            <div class="inputBlock">
                                <label for="lastName">Last name</label>
                                <input type="text" maxlength="32" placeholder="Last name" name="last_name" pattern="[A-Za-z]{1,32}" required id="lastName">
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="inputBlock">
                                <label for="phone">Phone number</label>
                                <input type="text" minlength="10" placeholder="Phone Number , ex. +12345678900" required name="phone" pattern="+1[0-9]{10}">
                            </div>
                            <div class="inputBlock">
                                <label for="mail">Email Address</label>
                                <input type="email" placeholder="Email Address" placeholder="Email Address" required name="mail" id="mail">
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="inputBlock">
                                <label for="comments">Comments</label>
                                <textarea name="comments" id="comments" placeholder="Some Comments" maxlength="500"></textarea>
                            </div>
                        </div>
                        <button type="submit">SUBMIT</button>
                    </form>
                    <p id="wait"><img src="img/assets/warning.png" alt="Warning">You can send 1 appointment in 24 hours!<img src="img/assets/warning.png" alt="Warning"></p>
                </div>
            </div>
        </section>
    </div>
</main>