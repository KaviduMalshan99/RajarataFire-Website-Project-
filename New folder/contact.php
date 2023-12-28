<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="shortcut icon" type="image/png" href="../Rajarata fire/images/Logo Transparent.png">
    
    <style>
        .mainheding{
            margin-top: 200px;
            text-align: center;
            font-size: 35px;
            color: rgba(230, 29, 37, 255);
        }

        .maindiv{
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-left: 150px;
            margin-right: 150px;
            margin-top: 50px;
            margin-bottom: 50px;

        }

        .maindiv div{
            background: url("../Rajarata fire/images/details.jpg");
            padding: 25px;
            border-radius: 15px;
            width: 300px;
            font-size: 20px;
        }

        .maindiv i{
            font-size: 35px;
            padding: 10px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .maindiv div .title{
            color: black;
            font-size: 25px;
        }

        .maindiv div p{
            margin-top: 15px;
            font-weight: bolder;
            line-height: 30px;
            color: white;
            
        }

        .seconddiv{
            display: flex;
            justify-content: space-between;
            margin-left: 150px;
            margin-right: 100px;
            margin-bottom: 50px;
            margin-top: 100px;
        }

        .seconddiv .form{
            background:url("../Rajarata fire/images/redd.jpg");
            background-size: cover;
            padding: 25px;
            font-size: 23px;
            line-height: 50px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .seconddiv h1{
            font-size: 28px;
            text-align: center;
            margin-bottom: 15px;
        }

        .seconddiv input{
            height: 40px;
            width: 300px;
            border-radius: 10px;
            padding-left: 15px;
        }

        .seconddiv .name{
            margin-left: 103px;
        }

        .seconddiv .email{
            margin-left: 97px;
        }

        .seconddiv .address{
            margin-left: 170px;
            border-radius: 10px;
            padding: 10px;
        }

        .seconddiv .submit{
            margin-left: 230px;
            font-size: 20px;
            font-weight: bold;
            background-color: rgba(230, 29, 37, 255);
            color: white;
            width: 150px;
        }

        .seconddiv .submit:hover{
            background-color: gray;
        }

        .mapp{
            height: 400px;
            width: 500px;
        }

        @media screen and (max-width: 768px) {


        .mainheding{
            margin-top: 150px;
        }

        .maindiv {
            flex-direction: column;
            align-items: center;
            margin-left: 80px;
            margin-right: 80px;
        }

        .maindiv div {
            width: 100%;
            margin-bottom: 30px;
            margin-left: 50px;
            margin-right: 50px;
            height: 250px;
        }

        .seconddiv {
            flex-direction: column;
            align-items: center;
            margin-left: 20px;
            margin-right: 20px;
        }

        .seconddiv .form {
            width: 100%;
            margin-bottom: 30px;
        }

        .seconddiv input,
        .seconddiv textarea {
            width: 100%;
        }

        .seconddiv .submit{
            margin-left: 100px;
        }

        .seconddiv .name,
        .seconddiv .email,
        .seconddiv .address{
            margin-left: 0;
        }

        .mapp{
            width: 350px;
        }

}

        

    
    </style>
</head>
<body>
  
    <?php
        include "head.php";
    ?>
    
    <h1 class="mainheding">Contact Us</h1>

    <div class="maindiv">
        <div class="div1">
        <i><a href="" class="fa-solid fa-phone"  style="color: white; border:2px solid white; padding:15px; border-radius: 90px;"></a></i><br>
       <p class="title">Call Us Directly :</p>  <p class="pp2"> +94 252 223 436  <br> +94 777 404 097</p><br><br>

        </div>

        <div class="div2">
        <i><a href="" class="fa-solid fa-location-dot" style="color: white; border:2px solid white; padding:15px; border-radius: 90px;"></a></i><br>
           <p class="title">Address :</p>  <p class="pp2">K 11, Airport Road, Anuradhapura</p><br><br>
        </div>
           

        <div class="div3">
            <i><a href="" class="fa-solid fa-envelope" style="color: white; border:2px solid white; padding:15px; border-radius: 90px;"></a></i><br>
           <p class="title"> Email :</p>  <p class="pp2">rajaratafire@gmail.com</p><br><br>
        </div>
            
    </div>

    <div class="seconddiv">

        <div class="form">
            <h1>Send Us a Message</h1>
            <form action="">
                Name: <input type="text" class="name"> <br>
                Email : <input type="email" class="email"> <br>
                Contact Number : <input type="number" name="" id=""><br>
                Address : <br> <textarea name="address" class="address" cols="35" rows="4"></textarea><br>
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>

        <div class="map">
            <h1>Our Location</h1>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.91655257681!2d80.41644837396029!3d8.311091491724332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf4eced939ca9%3A0xcad130dee0f1c77!2sRajarata%20Fire%20Service%20(PVT)%20Ltd!5e0!3m2!1sen!2slk!4v1688349785132!5m2!1sen!2slk"  style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapp"></iframe>
        </div>
    </div>

     <?php
        include "footer.php";
     ?>

</body>
</html>