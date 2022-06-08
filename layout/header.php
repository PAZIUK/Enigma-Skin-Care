<body>  
    <header>
        <nav class="container">
            <a class="logo" href="index.php">
                <img src="img/Enigma_logo.png" alt="Logo" >
            </a>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php?action=our-team">Our Team</a></li>
                <li><a href="index.php?action=services">Services</a></li>
                <li><a href="index.php#contacts">Locations</a></li>
                <li><a href="index.php#contacts">Contact Us</a></li>
            </ul>
            <a href="index.php?action=appointment" class="headerBtn">Book an Appointment</a>
            <?php
                if (isset($_SESSION["isAdmin"])&&$_SESSION["isAdmin"]==true) {
                    ?>
                <a href="index.php?action=admin" class="login"><img src="img/assets/user.png" alt="User"></a>
                <?php 
                    if (!empty($_POST)&&isset($_POST["isLogout"])&&$_POST["isLogout"]=="true") {
                        $isLogout = $_POST["isLogout"];
                        session_unset();
                        ?>
                            <script>window.location.href = "index.php"</script>
                        <?php
                    } else {
                        ?>
                        <div class="content">
                            <form action="" method="POST">
                                <input type="hidden" name="isLogout">
                                <button class="logout"><i class='bx bx-log-out'></i></button>
                            </form>	
                        </div>
                        <script>
                            document.querySelector("header nav form button").addEventListener("click",function() {
                                if (window.confirm("Do you really want to log out?")) {
                                    this.parentElement.querySelector("input").setAttribute("value","true")
                                } else {
                                    this.parentElement.querySelector("input").setAttribute("value","false")
                                }
                            })
                        </script>
                        <?php
                    }
                } else { 
            ?>
                <a href="index.php?action=login" class="login"><img src="img/assets/user.png" alt="User"></a>
            <?php
                }
            ?>
        </nav>
    </header>