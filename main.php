<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">

    <style>
        .slider {
        position: relative;
        }

        .slides {
            margin-top: 50px;
        display: flex;
        overflow: hidden;
        }

        .slides img {
        width: 100%;
        height: 650px;
        }

        .prev,
        .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px;
        background: transparent;
        border: none;
        color: white;
        font-size: 18px;
        }

        .prev {
        left: 10px;
        }

        .next {
        right: 10px;
        }

        /* description*/

        .description{
            background-color:rgba(230, 29, 37, 255); 
            height: 350px;
        }

        .description h1{
            text-align: center;
            font-size: 45px;
            color: #f4f4f4;
            padding-top: 35px;
        }

        .description p{
            font-size: 25px;
            color: #f4f4f4;
            margin-right: 100px;
            margin-left: 100px;
            margin-top: 25px;
            text-align: center;
        }

        .description .desImages{
            display: flex;
            justify-content: center;

        }

        .desImages img{
            height: 100px;
            margin-top: 25px;
            padding-left: 15px;

        }

        /*services section*/


        .Services .maintitle{
            font-size: 45px;
            margin-left: 100px;
            color: rgba(230, 29, 37, 255);
        }

        .maintitle{
            padding-top: 50px;
        }

        .secdetails{
            display: flex;
            justify-content: space-between;
            margin-right: 80px;
            margin-left: 100px;
            margin-top: 25px;
            font-size: 21px;
            margin-bottom: 30px;
        }


        .secdetails img{
            height: 500px;
            border-radius: 5px;
        }

        .secdetails .list{
            margin-left: 65px;
            margin-top: 25px;
            line-height: 37px;
        }

        .secdetails h3{
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 15px;

        }

        .secdetails .btnseemore{
            margin-top: 25px;
            height: 70px;
            background-color: rgba(230, 29, 37, 255);
            text-align: center;
            width: 180px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
            color: #f4f4f4;
            margin-bottom: 35px;

        }

        .secdetails .btnseemore:hover{
            transform: scale(1.05);
        }


        /*products section*/

        .products{
            background-color: #CBC4C5;
        }

        .products .maintitle{
            font-size: 45px;
            margin-left: 100px;
            color: rgba(230, 29, 37, 255);
        }
        
        .maindiv{
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            margin-left: 120px;
            margin-right: 80px;

        }

        .maindiv h1{
            text-align: center;
            font-size: 30px;
            margin-bottom: 25px;
        }

        .maindiv p{
            font-size: 20px;
            text-align: justify;
        }

        .maindiv .div1{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
        }

        .maindiv .div2{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
            margin-left: 15px;
        }

        .maindiv img{
            height: 400px;
            padding: 20px;
            border-radius: 15px;
        }

        .btnseemore{
            margin-top: 25px;
            height: 50px;
            background-color: rgba(230, 29, 37, 255);
            text-align: center;
            width: 160px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
            color: #f4f4f4;
            margin-bottom: 35px;

        }

        .btnseemore:hover{
            transform: scale(1.05);
        }


        /*brands section */

        .brands .maintitle{
            font-size: 45px;
            margin-left: 100px;
            color: rgba(230, 29, 37, 255);
            margin-top: 10px;
        }

        .brands{
            
            margin-bottom: 50px;
            

        }

        .brands .bimgs{
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            margin-right: 100px;
            margin-left: 100px;
            background-color: #f4f4f4;
            height: 200px;
            padding: 0 20px 0 20px;

        }

        .bimgs img{
            height: 80px;
            margin-top: 70px;
        }




        @media (max-width: 768px) {
            .slides img {
                height: 400px;
                max-height: 500px; /* Set a maximum height for smaller screens */
            }

            .prev,
            .next {
                font-size: 14px; /* Adjust the font size for smaller screens */
                padding: 5px; /* Adjust the padding for smaller screens */
            }

            .description{
                height: 400px;
            }

            .description h1 {
                font-size: 30px; /* Adjust the font size for smaller screens */
                margin-left: 10px;
                margin-right: 10px;
            }   

            .description p {
                font-size: 20px; /* Adjust the font size for smaller screens */
                margin-right: 50px;
                margin-left: 50px;
            }

            .description .desImages {
                display: none;
            }

            .desImages img {
                display: none; /* Adjust the spacing between the images for smaller screens */
            }

            .Services .maintitle{
            font-size: 40px;
            margin-left: 80px;
            color: rgba(230, 29, 37, 255);
            }

            .products .maintitle{
            font-size: 40px;
            margin-left: 80px;
            color: rgba(230, 29, 37, 255);
            }


            .secdetails {
                flex-direction: column;
                align-items: center;
                margin-right: 50px;
                margin-left: 50px;
            }

            .secdetails img {
                height: auto;
                width: 100%;
                margin-bottom: 25px;
            }

            .secdetails .list {
                margin-left: 0;
                text-align: left;
            }

            .secdetails .btnseemore {
                margin-top: 25px;
                margin-bottom: 25px;
                width: 150px;
            }

            .maindiv {
                flex-direction: column;
                margin-left: 50px;
                margin-right: 50px;
                
            }

            .maindiv .div1,
            .maindiv .div2 {
                width: 100%;
                margin-bottom: 30px;
                display: block;
                
            }

            

            .maindiv img {
                height: 300px;
                border-radius: 10px;
            }

            .brands .bimgs {
                flex-wrap: wrap;
                justify-content: center;
                height: auto;
                padding: 20px;
            }

            .bimgs img {
                height: 60px;
                margin: 10px;
            }
        }

    </style>
</head>
<body>
    
    <?php
        include "head.php";
    ?>

   
    <div class="slides">
        <img src="../Rajarata fire/images/2.1.jpg" alt="Image 1">
        <img src="../Rajarata fire/images/For Web/banner3.png" alt="Image 2">
        <img src="../Rajarata fire/images/For Web/2.jpg" alt="Image 3">
    </div>
    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <script>
        var slideIndex = 0;
        var slides = document.getElementsByClassName("slides")[0].getElementsByTagName("img");
        var totalSlides = slides.length;

        function showSlide(n) {
        slideIndex += n;
        
        if (slideIndex < 0) {
            slideIndex = totalSlides - 1;
        } else if (slideIndex >= totalSlides) {
            slideIndex = 0;
        }
        
        for (var i = 0; i < totalSlides; i++) {
            slides[i].style.display = "none";
        }
        
        slides[slideIndex].style.display = "block";
        }

        function changeSlide(n) {
        showSlide(n);
        }

        setInterval(function() {
        showSlide(1);
        }, 5000); // Change slide every 3 seconds

    </script>


        <!-- description section -->

        <div class="description">
            <h1>Rajarata Fire Service (PVT) Ltd.</h1>
            <p>Rajarata Fire Service is the leading fire company in Sri Lanka since 2015, We are in top tier with CIDA EM1 (ICTAD) status and ISO 9001:2015 certification. Also Rajarata Fire Services is a proud member of National Fire Protection Authority - USA (NFPA)</p>

            <div class="desImages">
                <div class="centeredImages">
                <img src="../Rajarata fire/images/For Web/iso.png" alt="" class="ima1">
                <img src="../Rajarata fire/images/For Web/nfpa.png" alt="" class="ima2">
                </div>
            </div>
        </div>

        




        <!-- Services section -->


        <div class="Services">
            <h1 class="maintitle">Our Services</h1>

            <div class="secdetails">

                <div>
                    <img src="../Rajarata fire/images/LR EDIT/1 (24).jpg" alt="">
                </div>

                <div class="list">
                    <h3>Our Main Services</h3>
                    <ul>
                        <li>All types of Fire Extinguishers (Portable and Mobile) of Dry Chemical Powder, Carbon Dioxide, Foam, Water.</li>
                        <li>Fire Hose Reels and Cabinets.</li>
                        <li>A Fire Hydrants.</li>
                        <li>Sprinkler System.</li>
                        <li>Fire Alarm System.</li>
                        <li>Fire Detection System.</li>
                        <li>Foam Flooding System.</li>
                        <li>Co2 Fire Extinguisher (FLOODING) System.</li>
                        <li>Fire Doors</li>
                        <li>Fire Traning Programmes</li>
                    </ul>
                </div>

            </div>
            <center><a href="../Rajarata fire/services.php"><input type="button" value="See More" class="btnseemore"></a></center>
        </div>



        <!-- Products section -->


        <div class="products">
            <h1 class="maintitle">Our Products</h1>

            
        <div class="maindiv">
            <div class="div1" style="background-color: #f4f4f4;">

                <div class="sub1">
                    <img src="../Rajarata fire/images/firealarm.jpg" alt="">
                </div>

                <div class="sub2">
                <h1>Fire Alarm Systems</h1>
                <p>Our fire alarm systems ensure greater safety and protection working together to detect and activate automatic warning through visual and audio appliances when smoke, fire, carbon monoxide, or other emergencies are present. Following stringent quality standards, our systems are UL, FM, and LPCB certified.</p>
                </div>

                

            </div>

            <div class="div2" style="background-color: #dce1de;">

                <div class="sub1">
                        <img src="../Rajarata fire/images/firepump.jpg" alt="">
                </div>

                <div class="sub2">
                    <h1>Fire Pump Systems</h1>
                    <p>Our diesel engine-driven and electric motor-driven high-quality pumps are fully competent to NFPA 0 or UL/FM standards. NFPA 20 system comes in a skid-mounted single plug & play unit while UL/FM pump arrangement is to be designed as per the specific location spacing.</p>
                    </div>
                </div>
        </div>

        <div class="maindiv">
            <div class="div1" style="background-color: #dce1de;">

                <div class="sub1">
                    <img src="../Rajarata fire/images/hosereel.jpg" alt="">
                </div>

                <div class="sub2">
                <h1>Fire Hose Reel Systems</h1>
                <p>Our service helps you place Fire hose reels in strategic places in buildings to provide a reasonably accessible and controlled supply of water for fire extinguishing. Our fire hose reels come with a unique ball valve shut-off device, plastic or solid brass hose reel nozzle, and mounting bracket.</p>
                </div>

                

            </div>

            <div class="div2" style="background-color: #f4f4f4;">

                <div class="sub1">
                        <img src="../Rajarata fire/images/fireextinguishers.jpg" alt="">
                </div>

                <div class="sub2">
                    <h1>Fire Extinguishers</h1>
                    <p>Our professional technicians are here to ensure you have the right type of extinguishers installed in the right places and in proper working order able to display threats from ordinary combustibles, flammable liquids, flammable gases, and electrical fires to cooking oils and fats.</p>
                    </div>
                </div>
        </div>

        <center><a href="../Rajarata fire/products.php"><input type="button" value="See More" class="btnseemore"></a></center>

        </div>





        <!-- Brands section -->


        <div class="brands">
            <h1 class="maintitle">Brands</h1>

            <div class="bimgs">
                <img src="../Rajarata fire/images/brands/Advanced-2019-logo.gif" alt="">
                <img src="../Rajarata fire/images/brands/download (1).png" alt="">
                <img src="../Rajarata fire/images/brands/download.jpeg" alt="">
                <img src="../Rajarata fire/images/brands/download.png" alt="">
                <img src="../Rajarata fire/images/brands/Kolling-Logo_Hi-Res-01-2021.png" alt="">
                <img src="../Rajarata fire/images/brands/pngwing.com (5).png" alt="">
                <img src="../Rajarata fire/images/brands/Viking-Digital-Solutions-Logo.png" alt="">
            </div>
            
        </div>


        <?php
        include "footer.php"; 
        ?>

</body>
</html>