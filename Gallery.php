<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary Section</title>
    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">


    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .container .heading{
            width: 50%;
            padding-bottom: 50px;
        }

        .container .heading h1{
            font-size: 30px;
            font-weight: bold;
            margin-top: 200px;
            color: rgba(230, 29, 37, 255);
            padding-bottom: 10px;
        }

        .container .box{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container .box .dream{
            display: flex;
            flex-direction: column;
            width: 32.5%;
        }

        .container .box .dream img{
            width: 100%;
            padding-bottom: 15px;
            border-radius: 5px;
        }

        @media only screen and (max-width:769px){

            .container .box{
                flex-direction: column;
            
            }

            .container .box .dream{
                width: 100%;
            }

        }

        @media only screen and (max-width:643px){
            .container .heading{
            width: 100%;
            
        }

        .container .heading h1{
            font-size: 20px;
            font-weight: bold;
            margin-top: 150px;
            
        }
            

        }
    </style>
</head>
<body>
    
    <?php
     include"head.php";
    ?>

    <div class="container">
        <div class="heading">
            <h1>Photo Gallery</h1>
        </div>

        <div class="box">

            <div class="dream">
                <img src="../Rajarata fire/images/LR EDIT/1 (1).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (2).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (3).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (4).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (5).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (6).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (7).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (8).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (9).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (10).jpg" alt="">
            </div>

            <div class="dream">
            <img src="../Rajarata fire/images/LR EDIT/1 (30).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (11).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (12).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (13).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (14).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (15).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (16).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (17).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (18).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (19).jpg" alt="">
            </div>

            <div class="dream">
            <img src="../Rajarata fire/images/LR EDIT/1 (20).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (21).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (22).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (23).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (24).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (25).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (26).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (27).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (28).jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/1 (29).jpg" alt="">
            </div>
        </div>
    </div>



    <?php
    include"footer.php";
    ?>
</body>
</html>