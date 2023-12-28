<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajarata Fire Protection</title>

    <!--css files-->
    <link rel="stylesheet" href="../Rajarata fire/css/hh.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



</head>
<body>
    
    <section class="red-section">
        <p class="name">Rajarata Fire Service (PVT) Ltd.</p>
        <p>Contact Us: <b> +94 252 223 436 | +94 777 404 097 </b></p>
    </section>

    <!--Header Section-->
    <header class="header">

        <div class="header-left">


                <div class="logo">
                    <a href="../Rajarata fire/main.php" class="logo"><img src="../Rajarata fire/images/Logo Transparent.png" alt="logo" class="logo1"></a>
                </div>


                <nav>
                    <ul>
                        <li><a href="../Rajarata fire/main.php">Home</a></li>
                        <li><a href="../Rajarata fire/services.php">Services</a></li>
                        <li><a href="../Rajarata fire/products.php">Products</a></li>
                        <li><a href="../Rajarata fire/Gallery.php">Gallery</a></li>
                        <li><a href="../Rajarata fire/aboutus.php">About Us</a></li>
                        <li><a href="../Rajarata fire/contact.php">Contact Us</a></li>
                    </ul>

                
                </nav>

            </div>
            <div class="header-right">
                <div class="login-signup">
                    <a href="">Login</a> or <a href="">Signup</a>
                </div>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
    </div>


    </header>
    <!--close heder section-->

    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>
    
</body>
</html>