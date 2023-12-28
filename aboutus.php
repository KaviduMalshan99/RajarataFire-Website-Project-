<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">

    <style>
        .mainheading{
            font-size: 40px;
            margin-top: 150px;
            text-align: center;
            color: rgba(230,29,37,255);
            margin-left: 100px;
        }

        .maindiv{
            display: flex;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 30px;
        }

        .maindiv img{
            height: 450px;
            border-radius: 10px;
            margin-top: 80px;
        }

        .maindiv p{
            font-size: 22px;
            line-height: 40px;
            text-align: justify;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 70px;
        }


        .vitionMission{
            display: flex;
            font-size: 20px;
            margin: 100px 100px 50px 100px;
            font-weight: bold;
            
            
        }

        .vitionMission h1{
            text-align: center;
            color: rgba(230, 29, 37, 255);
            
        }

        .vitionMission .div1{
            background-image: url("../Rajarata fire/images/vision.jpg");
            background-size: cover;
            text-align: justify;
            padding: 40px;
            line-height: 25px;
            border-radius: 15px;
            width: 80%;
            border: 3px dotted black;
        }

        .vitionMission .div2{
            background-image: url("../Rajarata fire/images/mision.jpg");
            background-size: cover;
            text-align: justify;
            padding: 40px;
            border-radius: 15px;
            line-height: 30px;
            border: 3px dotted black;
        }

        .sec1{
            background:rgba(230,29,37,255);
            border: 2px white dotted;
            border-radius: 15px;
            width: 600px;
            padding: 15px;
        }

        .sec1 p{
            font-size: 18px;
            margin: 10px;
            padding: 0;
            color: whitesmoke;
            line-height: 22px;
        }

        @media screen and (max-width: 768px) {
        .maindiv {
            flex-direction: column;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .maindiv img {
            height: auto;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .maindiv p {
            font-size: 18px;
            padding: 10px;
            line-height: 30px;
        }

        .sec1 {
            margin: 20px;
            width: 100%;
            margin-left: 0;
        }

        .vitionMission {
            flex-direction: column;
            margin: 50px 20px;
        }

        .vitionMission .div1,
        .vitionMission .div2 {
            width: 100%;
            background-size: cover;
            padding: 20px;
            margin-bottom: 30px;
        }

        .vitionMission h1 {
            font-size: 20px;
        }

        .sec1 p {
            font-size: 16px;
            line-height: 24px;
        }

        .mainheading {
            font-size: 30px;
            margin-top: 150px;
            margin-left: 50px;
            margin-right: 50px;
        }
}

    </style>
</head>
<body>

    <?php
        include "head.php";
    ?>



    <h1 class="mainheading">About Us</h1>

    <div class="maindiv">
        <div>
            <img src="../Rajarata fire/images/Owner.jpg" alt="" >
        </div>

        <div>
            <p id="owner">Mr. Ajith Kumara started Rajarata Fire Service as a very small business. Subsequently, he went on to start Rajarata Fire Protection Service in Sri Lanka in the same 2015 year. Today Rajarata Fire Service (PVT) Ltd is an industry leader and the preferred.
            Rajarata Fire Service has a qualified and trained team of engineers and technical staff. The workshop is centrally located and situated in Anuradhapura.
            The state of the art facility is fully equipped to handle large-scale fire protection, detection, and suppression systems.
            Also, Rajarata Fire Service is a member of the National Fire Protection Authority and a CIDA-registered company. </p> <br><br>
            
            <section class="sec1">
                <b><p style="font-size: 23px;">Mr. Ajith Kumara   (Rsp. Usp)  <br>
                <b>Managing Director</b></p>
            <hr>
            <p>
            Retired Air Force Fire (S.P.1) (Member of NIOSH) <br>
            Member In 19, Peace Keeping Battalion <br>
            UN Missing United Nation Completed in HAITI.
            </p>
            </section>
            
           

        </div>

    </div>

    <div class="vitionMission">
        <div class="div1">
            <h1>Our Vision</h1><br>
            <p>To be the customer's first choice of life risk management offering a comprehensive and unique portfolio of products and services, aimed at saving lives and protecting property from fire at all times</p>
        </div>

        <div class="div2">
            <h1>Our Mission</h1><br>
            <p>
                <ul>
                    <li>To constantly upgrade and introduce new innovations, so as to ensure our valued customers can benefit from the latest technologies</li>
                    <li>To contribute to a safer world guided by innovative technology.</li>
                    <li>To create value for our clients, employees, suppliers, and shareholders</li>
                </ul>
            </p>
        </div>
    </div>



    <?php
        include "footer.php";
    ?>
    
</body>
</html>