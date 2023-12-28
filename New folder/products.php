<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">

    <style>

        .mainTitle{
            margin-top: 200px;
            font-size: 35px;
            text-align: center;
            color: rgba(230, 29, 37, 255);
        }

       .description{
        font-size: 20px;
        margin: 25px 100px 50px 100px;
        text-align: center;
       }

        .maindiv{
            display: flex;
            justify-content: space-between;
            margin: 50px 80px 50px 80px;

        }

        .maindiv h1{
            text-align: center;
            font-size: 30px;
            margin-top: 25px;
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
            margin-left: 30px;
            border-radius: 5px;
        }

        .maindiv img{
            height: 400px;
            padding: 20px;
            width: 300px;
        }

        @media screen and (max-width: 768px) {
  .maindiv {
    flex-direction: column;
    align-items: center;
    margin-left: 50px;
    margin-right: 50px;
  }

  .maindiv .div1,
  .maindiv .div2 {
    flex-direction: column;
    width: 100%;
  }

  .maindiv img {
    height: auto;
    width: 100%;
    margin-bottom: 20px;
  }

  .mainTitle {
    margin-top: 100px;
    font-size: 25px;
  }

  .description {
    font-size: 16px;
    margin: 10px 50px 30px 50px;
  }
}

/* Default Styles */

.mainTitle {
  margin-top: 200px;
  font-size: 35px;
  text-align: center;
  color: rgba(230, 29, 37, 255);
}
        
    </style>
</head>
<body>

        <?php
            include "head.php";
        ?>

    <h1 class="mainTitle">Our Products</h1>

    <p class="description">As the leading provider of fire protection in the country we offer an extensive range of solutions are maintenance services committed to serving our customers in a wide variety of environments</p>

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

    <div class="maindiv">
        <div class="div1" style="background-color: #f4f4f4;">

            <div class="sub1">
                <img src="../Rajarata fire/images/firehydrant.jpg" alt="">
            </div>

            <div class="sub2">
            <h1>Fire Hydrant Systems</h1>
            <p>Our fully compact fire hydrant system is designed to fight fire of high proportions, in every class of risks. Fitted with system components such as fire-fighting pumps and accessories, fire panels, valves, hoses, branch pipes and nozzles, fire bridge connections, etc., it is able to provide quick access to water through the ultra-high pressure water pump available adding to the force of water flow as well as increasing the firefighting ability.</p>
            </div>

            

        </div>

        <div class="div2" style="background-color: #dce1de;">

            <div class="sub1">
                    <img src="../Rajarata fire/images/firedoors.jpg" alt="">
            </div>

            <div class="sub2">
                <h1>Fire Doors & Frames</h1>
                <p>The fire doors provide fire resistance for your safety and peace of mind. We offer cold rolled galvanized steel or stainless steel doors and steel and wooden doors designed for strength, stability, and durability. Depending on client requirements we also offer customized steel doors.</p>
                </div>
            </div>
    </div>

    <div class="maindiv">
        <div class="div1" style="background-color: #dce1de;">

            <div class="sub1">
                <img src="../Rajarata fire/images/firesprinklers.jpg" alt="">
            </div>

            <div class="sub2">
            <h1>Sprinkler System</h1>
            <p>A fire sprinkler system is an effective fire protection method. The water supply system provides adequate pressure and flow rate to a water distribution piping system, onto which fire sprinklers are connected to quickly suppress fires in buildings.</p>
            </div>

            

        </div>

        <div class="div2" style="background-color: #f4f4f4;">

            <div class="sub1">
                    <img src="../Rajarata fire/images/blanket.jpg" alt="">
            </div>

            <div class="sub2" >
                <h1>Fire Blankets</h1>
                <p>Fire Blankets are ideal to extinguish small fires. They can also be used on someone whose clothing has caught fire. Our fire blankets withstand temperatures up to 500 Celsius and work by smothering the fire, stopping access to the oxygen fuelling it, and extinguishing it. Compact and easily stored, the blanket is packaged in convenient quick-release PVC containers.</p>
                </div>
            </div>
    </div>

    <?php
    include "footer.php";
    ?>
    
</body>
</html>