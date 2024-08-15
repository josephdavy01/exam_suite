<?php
     require ('config.php');
    if (isset($_POST["login"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
 
 
        // check if credentials are okay, and email is verified
        $sql = "SELECT * FROM student WHERE email = '" . $email . "'";
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) == 0)
        {
            die("Email not found.");
        }
 
        $user = mysqli_fetch_object($result);
 
        if ($password !=$user->password)
        {
            die("Password is not correct");
        }
 
        //if ($user->email_verified_at == null)
        //{
        //    die("Please verify your email <a href='email-verification.php?email=" . $email . "'>from here</a>");
        //}
 
        echo "<script>window.location.replace('Dashboard.php');</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("vector\ 3.svg");
            background-repeat: no-repeat;
            position: relative;
            background-size: 100%;

        }

        .login {
            position: relative;
            height: 450px;
            width: 450px;
            left: 550px;
            top: 150px;
            background-color: #FF416C;
            box-shadow: 13px 13px 20px #b33250, -13px -13px 20px #e7365f;
            border-radius: 50px;
            transition: 0.5s;
            display: block;
        }

        .registerpage {
            position: absolute;
            left: 20px;
            top: -50px;
            transition: 0.5s;

        }

        .Forgot {
            position: absolute;
            left: 500px;
            top: -50px;
            transition: 0.5s;
            opacity: 0;

        }

        .username,
        .password {
            position: relative;
            margin-top: 50px;
            top: 40px;
            width: 275px;
            height: 45px;
            left: 70px;
            background-color: transparent;
            color: white;
            font-size: 16px;
            border: none;
            box-shadow: inset 8px 8px 15px #ca3a5c, inset -8px -8px 15px #e7365f;
            text-align: center;
            border-radius: 25px;
            outline: none;

        }

        .submit {
            position: relative;
            margin-top: 50px;
            top: 50px;
            width: 200px;
            height: 45px;
            left: 105px;
            background-color: #FF416C;
            color: white;
            font-size: 16px;
            border: none;
            box-shadow: 8px 8px 15px #ca3a5c, -8px -8px 15px #e7365f;
            text-align: center;
            border-radius: 25px;
            outline: none;
            transition: 0.5s ease-in-out;
            transform: scale(1);
        }

        .submit:hover {
            transform: scale(1.05);
        }

        .username::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }

        .password::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }

        #open {
            position: relative;
            color: #FF416C;
            left: 800px;
            top: 210px;
            cursor: pointer;

        }

        .btn1 {
            position: absolute;
            background-color: white;
            color: #FF416C;
            height: 45px;
            font-weight: 600;
            font-family: sans-serif;
            width: 140px;
            text-align: center;
            border: transparent;
            border-radius: 15px;
            top: 650px;
            left: 615px;

        }

        #close {
            position: relative;
            color: #FF416C;
            left: 915px;
            top: 210px;
            cursor: pointer;

        }

        .btn2 {
            position: absolute;
            background-color: white;
            color: #FF416C;
            height: 45px;
            font-weight: 600;
            font-family: sans-serif;
            width: 140px;
            text-align: center;
            border: transparent;
            border-radius: 15px;
            top: 650px;
            left: 815px;


        }

        .reg {
            position: relative;
            color: white;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            top: 50px;
        }




        .load1 {
            position: absolute;
            background-color: white;
            height: 15px;
            width: 15px;
            top: 350px;
            left: 25px;
            border-radius: 25px;
            animation: load1 0.5s ease-in-out infinite;

        }

        @keyframes load1 {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .load2 {
            position: absolute;
            background-color: white;
            height: 15px;
            width: 15px;
            top: 350px;
            left: 45px;
            border-radius: 25px;
            animation: load2 0.5s ease-in-out infinite;
            animation-delay: 0.2s;
        }

        @keyframes load2 {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .load3 {
            position: absolute;
            background-color: white;
            height: 15px;
            width: 15px;
            top: 350px;
            left: 65px;
            border-radius: 25px;
            animation: load3 0.5s ease-in-out infinite;
            animation-delay: 0.4s;
        }

        @keyframes load3 {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .load4 {
            position: absolute;
            background-color: white;
            height: 15px;
            width: 15px;
            top: 350px;
            left: 85px;
            border-radius: 25px;
            animation: load4 0.5s ease-in-out infinite;
            animation-delay: 0.6s;
        }

        @keyframes load4 {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .load {
            position: fixed;
            background-color: #000000a1;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            filter: blur(5px);
            -webkit-filter: blur(5px);
        }

        #overlay {
            position: absolute;
            top: 15px;
            left: 800px;

        }

        .hide {
            display: none;
        
        }


       

    </style>
</head>

<body>
    <form method="POST">
        <div class="login" id="login">
            <div class="Forgot" id="1st">
                <h2 class="reg" id="reg">FORGOT PASSWORD</h2>
                <input type="text" name="email1" id="email" class="password" placeholder="Email Id" />
                <input type="password" name="email1" id="email" class="password" placeholder="Password" />
                <button type="submit" class="submit" name="submit1" onclick="register_now()">Change</button>

            </div>
            <div class="registerpage" id="2nd">
                <h2 class="reg" id="reg">Student LOGIN</h2>
                <input type="text" name="email" id="name" class="username" placeholder="Email id" required />
                <input type="password" name="password" id="password" class="password" placeholder="Password" required />
                <button type="submit" class="submit" name="login" onclick="passvalues()">Login</button>

            </div>
        </div>
        </div>

   
    </form>

    <button type="button" class="btn1" id="btn1" onclick="openNav()">Login</button>
    <span class="material-icons" id="open">how_to_reg</span>

    <button type="button" class="btn2" id="btn2" onclick="closeNav()">Forgot</button>
    <span class="material-icons" id="close">login</span>


    <div class="loader" id="overlay">
        <div class="load"></div>
        <div class="load1"></div>
        <div class="load2"></div>
        <div class="load3"></div>
        <div class="load4"></div>
        <h3 style="position: absolute;top: 375px;left:32px;font-family: 'Roboto', sans-serif;font-size: 15px;color: white;">
            Loading...</h3>
    </div>

    <div class="hide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hjdMEav789s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2t5OU3VcAIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/t0uRUruq2tk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KcTH8jDIlMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    

    <script>
     

        function openNav() {
            document.getElementById("1st").style.marginLeft = "0px";
            document.getElementById("2nd").style.marginLeft = "0px";
            document.getElementById("1st").style.opacity = "0";
            document.getElementById("2nd").style.opacity = "100%";
        }

        function closeNav() {
            document.getElementById("1st").style.marginLeft = "-480px";
            document.getElementById("2nd").style.marginLeft = "450px";
            document.getElementById("1st").style.opacity = "100%";
            document.getElementById("2nd").style.opacity = "0";
        }

        var overlay = document.getElementById("overlay");

        window.addEventListener('load', function() {
            overlay.style.display = 'none';
        })

        function send_otp() {
            var email = jQuery('#email').val();
            jQuery.ajax({
                url: 'send_otp.php',
                type: 'post',
                data: 'email=' + email,
                success: function(result) {

                }

            })

        }
    </script>



</body>

</html>