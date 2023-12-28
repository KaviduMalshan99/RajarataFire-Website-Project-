<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">


    <style>
       .subtitle{
        margin-top: 180px;
        font-size: 35px;
        text-align: center;
        color: rgba(230, 29, 37, 255);
        text-transform: capitalize;
       }

       .maintitle{
        text-align: center;
        font-size: 40px;
        text-transform: capitalize;
        margin: 50px 100px 0 100px;
       }

       .maindiv1{
        display: flex;
        justify-content: space-around;
        margin-left: 100px;
        margin-right: 100px;
        margin-top: 50px;
       }

       .maindiv1 div{
        font-size: 20px;
        text-align: justify;
        line-height: 35px;
        border: 1px solid black;
        border-radius: 15px;
        margin-left: 30px;
        width: 400px;
        background: url("../Rajarata fire/images/details.jpg");
        color: white;
        box-shadow: 0 0 40px rgb(115, 110, 110);
        transition: 1s;
        height: 680px;
        

       }

       .maindiv1 div h1{
        text-align: center;
        height: 100px;
        border-radius: 10px;
        margin-top: 80px;
        text-transform: capitalize;
       }

       .maindiv1 div p{
        background:url("../Rajarata fire/images/red.jpg");
        border-radius: 0 150px 10px 10px;
        height: 498px;
        padding: 50px 35px 10px 20px;
        border: 3px dotted white;
        text-transform:none;
       }

       .maindiv2{
        display: flex;
        justify-content: space-around;
        margin-left: 300px;
        margin-right: 300px;
        margin-top: 50px;
        margin-bottom: 50px;
       }

       
       .maindiv2 div{
        font-size: 20px;
        text-align: justify;
        line-height: 35px;
        border: 1px solid black;
        border-radius: 15px;
        margin-left: 50px;
        width: 500px;
        background: url("../Rajarata fire/images/details.jpg");
        color: white;
        box-shadow: 0 0 40px rgb(115, 110, 110);
        transition: 1s;
        height: 750px;
       }
       

       .maindiv2 div:hover{
        transform: scale(1.05);
       }

       .maindiv1 div:hover{
        transform: scale(1.05);
       }

       .maindiv2 div h1{
        text-align: center;
        height: 100px;
        border-radius: 10px;
        margin-top: 80px;
        text-transform: capitalize;
       }

       .maindiv2 div p{
        background:url("../Rajarata fire/images/red.jpg");
        border-radius: 0 150px 10px 10px;
        height: 570px;
        padding: 50px 35px 10px 20px;
        border: 3px dotted white;

       }

       @media screen and (max-width: 768px) {
        .maintitle {
            margin: 25px;
        }

        .maindiv1,
        .maindiv2 {
            flex-direction: column;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .maindiv1 div{
            width: 100%;
            margin-bottom: 30px;
            height: 870px;
        }


        .maindiv2 div {
            width: 100%;
            margin-bottom: 30px;
            height: 900px;
        }

        .maindiv1 div p{
            height: 690px;
        }

        .maindiv2 div p{
            height: 720px;
        }
        }
      

    </style>
</head>
<body>
    <?php
        include "head.php";
    ?>

    <h1 class="subtitle">Our Services</h1>

    <h1 class="maintitle">Consulting - Designing - Installing - Fire Fighting Training & Demonstrations - Maintenance</h1>

    <div class="maindiv1">
        <div class="div1">
            <h1>Design</h1>
            <p>We design fire protection and  detection, suppression systems, and centralized LP gas systems to meet individual needs, assuring the quality and reliability of our products and services. Proactive action is expected from everybody at Rajarata. Our philosophy is to focus on prevention by "doing the right thing right the first time</p>
        </div>

        <div class="div2">
            <h1>Commission</h1>
            <p>The systems we commission are designed to suit the dimensions of the building. Rajarata is committed to ensuring that all our products and services meet the expectations of our customers.
We are also dedicated to protecting the health and safety of our employees, customers, contractors, and suppliers while safeguarding the environment in which we live and work.</p>
        </div>

        <div class="div3">
            <h1>Installation</h1>
            <p>We design, supply, install, test, and commission total fire safety and security solutions on land, sea, and air. Our solutions range from fire alarm systems to suppression systems, deluge systems sprinkler systems, cooking facility protection, and more.
Maintenance</p>
        </div>
    </div>


    <div class="maindiv2">
        <div class="div1">
            <h1>Maintenance</h1>
            <p>We service and maintain the fire equipment we install on a planned, regular basis. We rei upgrade existing fire systems installed by us and routinely carry out regular inspections of all extinguishers, and spare gas cartridges.</p>
        </div>

        <div class="div2">
            <h1>Training</h1>
            <p>We provide first aid fire & safety training and demonstrations on how to identify and use various types of fire extinguishers. Our training is specially designed to meet clients' operational needs with a flexible timetable. Upon completion, participants are awarded certificates issued by the Institution of Environmental Safety Officers. The certificates are accepted as a first-level qualification in health and safety.</p>
        </div>

    </div>


    <?php
        include "footer.php";
    ?>
</body>
</html>