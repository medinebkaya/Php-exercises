<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/67a3ecdc41.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <section id="menu">
        <div id="logo">Medine Burunkaya</div>
        <nav>
            <a href="homepage"><i class="fa-solid fa-house icon"></i>Home</a>
            <a href="about"><i class="fa-solid fa-circle-info icon" ></i>About</a>
            <a href="contact"><i class="fa-solid fa-phone icon"></i>Contact</a>
            <a href="project"><i class="fa-solid fa-list icon"></i>Projects</a>
        </nav>
    </section>

    <section id="homepage">
        <div id="black"></div>
        <div id="content">
            <h2>Medine Burunkaya</h2>
            <hr width="300">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores provident quasi eveniet atque architecto veritatis, hic facere, inventore expedita repudiandae dolore dolor. Deleniti at esse, ut autem ipsa eos nisi!</p>
        
        </div>

    </section>

    <section id="about">
        <h3>About Us</h3>
    
        <div class="container">
            <div id="left">
                <h5 id="h5left"> Lorem ipsum dolor sit Tempora corporis dolorum unde omnis iure dignissimos dicta ratione non.</h5>
            </div>

            <div id="right">
                <span>L</span>
                <p id="pright">
                    orem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsam accusamus, soluta velit architecto aut quia aliquam nesciunt hic voluptatem excepturi in vitae similique laborum omnis obcaecati inventore suscipit doloremque!
                </p>
            </div>
        </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pend">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat tempora rem inventore temporibus nihil expedita molestiae fugit minima eos animi, quisquam ea aut. Fugit maxime assumenda enim, incidunt expedita quam.</p>
        
    </section>

    <section id="projects">
        <div class="container">
            <h3>Projects</h3>

            <div class="owl-carousel owl-theme">

                <div class="card item" data-merge=1.5>
                    <img  class="img-fluid" src="img/r2.jpg" alt="">
                    <h5 class="headercard">project 1</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, natus.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img  class="img-fluid" src="img/r2.jpg" alt="">
                    <h5 class="headercard">project 1</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, natus.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img  class="img-fluid" src="img/r2.jpg" alt="">
                    <h5 class="headercard">project 1</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, natus.</p>
                </div>

            
            </div>

            
        </div>
        

    </section>

    <section id="contact">
        <div class="container">
            <h3 id="h3contact">Contact</h3>
            <form action="index.php" method="post">
            <div id="contactopaque">
                <div id="formgroup">
                    <div id="formleft">
                        <input type="text" name="name" placeholder="Name Surname" required class="form-control" autocomplete="on">
                        <input type="text" name="tel" placeholder="Telephone Number" required class="form-control" autocomplete="on">
                    </div>
                    <div id="formright">
                        <input type="email" name="email" placeholder="Email" required class="form-control" autocomplete="on">
                        <input type="text" name="headline" placeholder="Headline" required class="form-control" autocomplete="on">
                    </div>
                    <textarea name="message" placeholder="Message" id="" cols="30" rows="10" required class="form-control"></textarea>
                    <input type="submit" value="Send">
                </div>
                <div id="address">
                    <h4 id="addressheader">Address : </h4>
                    <p class="addressp">Isparta/Turkey</p>
                    <p class="addressp"> 0212 111 22 33</p>
                    <p class="addressp"> Email: Medineburunkaya032@gmail.com</p>
                </div>
            </div>
            </form>

            <footer>
                <div id="copyright">2024 | All rights reserved.</div>
                <div id="socialfooter">
                    <i class="fab fa-instagram social"></i>
                    <i class="fab fa-facebook social"></i>
                    <i class="fab fa-twitter social"></i>
                </div>

                <a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>
            </footer>
    <script src="owl/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
</body>
</html>

<?php 
    include 'connect.php';
    if(isset($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['headline'], $_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $headline = $_POST['headline'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, tel, headline, message) VALUES ('".$name."', '".$email."', '".$tel."', '".$headline."', '".$message."')";
        if($conn->query($sql) === TRUE){
            echo "<script>alert('Message sent successfully');</script>";
        }
        else{
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }}

?>