<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Suite</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&family=Source+Sans+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d92464b5e7.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FF416C;
            position: relative;

        }

        .h2 {
            position: relative;
            top: 10px;
            color: white;
            text-align: center;
            font-family: 'Roboto', sans-serif;

        }

        #menu {
            position: relative;
            color: white;
            font-size: 50px;
            top: -51px;
            cursor: pointer;
        }



        .layout {
            position: relative;
            background-color: white;
            top: 300px;
            left: 0px;
            z-index: -1;
            height: 250px;
            width: 1000px;
            display: none;
        }

        #vector1 {
            position: absolute;
            left: -7px;
            top: 425px;
            width: 100.9%;
        }

        .menunav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(255, 255, 255);
            overflow-x: hidden;
            transition: 0.5s ease-in-out;
            padding-top: 60px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .menunav a {
            padding: 5px 50px;
            margin: 25px;
            position: relative;
            text-decoration: none;
            font-size: 25px;
            font-family: 'Roboto', sans-serif;
            color: #000000;
            display: block;
            transition: 0.3s ease-in-out;
            text-align: center;
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .menunav a:hover {
            color: #f1f1f1;
        }

        .menunav #closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 25px;
            margin-left: 50px;
        }

        .btn1 {
            position: absolute;
            background-color: #ffffff;
            color: #FF416C;
            border-radius: 35px;
            border: 2px solid #ff416d67;
            height: 55px;
            width: 200px;
            right: 0PX;
            left: 650px;
            top: 600px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 2px 2px 8px #d8d5d6, -2px -2px 8px #f5e8ec;
            cursor: pointer;
            transition: 1s;
            align-items: center;
        }

        .btn1:hover {
            background-color: #FF416C;
            border: 2px solid white;
            color: white;

        }

        .btn2 {
            position: absolute;
            display: flex;
            background-color: #ffffff;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
            height: 60px;
            width: 60px;
            top: 85px;
            right: 50px;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.726);
            cursor: pointer;
        }

        .btn3 {
            position: absolute;
            display: flex;
            background-color: #ffffff;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
            height: 60px;
            width: 60px;
            top: 215px;
            right: 50px;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.726);
            cursor: pointer;

        }

        #email {
            position: relative;
            color: #FF416C;
            font-size: 30px;
            left: 16px;
            top: 15px;
            animation: email 2s ease-in-out infinite;
        }

        @keyframes email {
            0% {
                transform: rotatey(0);
            }

            50% {
                transform: rotatey(180deg);
            }

            100% {
                transform: rotatey(0);
            }
        }

        #info {
            position: relative;
            color: #FF416C;
            font-size: 30px;
            left: 16px;
            top: 15px;
            animation: info 2.2s ease-in-out infinite;
        }

        @keyframes info {
            0% {
                transform: rotatey(0);
            }

            50% {
                transform: rotatey(180deg);
            }

            100% {
                transform: rotatey(0);
            }
        }

        #closebtn {
            position: relative;
            cursor: pointer;
        }

        .vector2 {
            position: absolute;
            height: 300px;
            width: 350px;
            top: 150px;
            left: 670px;
            animation: vector 3s;
            -webkit-animation: vector 3s;
        }

        @-webkit-keyframes vector {
            form {
                opacity: 0;
            }

            to {
                opacity: 100%;
            }
        }

        @keyframes vector {
            from {
                opacity: 0;
            }

            to {
                opacity: 100%;
            }
        }

        .dot {
            position: relative;
            top: 400px;
            height: 10px;
            width: 10px;
            margin: 0 2px;
            background-color: rgba(255, 255, 255, 0);
            border: 3px solid rgb(255, 255, 255);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #0099ff;
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
            top: 0px;
            left: 685px;

        }

        .hide {
            display: none;
        }

        .slide {
            position: absolute;
            left: -90px;
            top: 0;
        }

        .content1 {
            position: absolute;
            background-color: white;
            height: 300px;
            width: 350px;
            border-radius: 15px;
            left: 585px;
            top: 150px;
            z-index: 1;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
            animation: content1 0.4s;
            display: none;

        }

        @keyframes content1 {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        #close {
            color: black;
            position: relative;
            left: 300px;
            top: 10px;
        }

        #done {
            position: absolute;
            color:#FF416C ;
            left: 743px;
            top: 615px;
            font-weight: bold;
            animation: done 3s;
            animation: done1 1s;
            display: none;
        }

        .btn1:hover ~ #done{
            color: white;
        }

        @keyframes done {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes done1 {
            from {
                top: 630px;
            }

            to {
                top: 615px;
            }
        }
    </style>
</head>

<body>
    <img src="logo.svg" style="position: absolute;height: 50px;width: 75px;left: 100px;">
    <h2 class="h2">Education Welcomes You</h2>
    <span class="material-icons" id="menu" onclick="openNav()">menu</span>


    <div class="layout">
    </div>

    <svg id="vector1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,133.3C320,139,400,181,480,170.7C560,160,640,96,720,101.3C800,107,880,181,960,181.3C1040,181,1120,107,1200,80C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <div onclick="button()">
        <button class="btn1" id="btn1" onclick="timedRedirect()">Crack it</button>
        <span class="material-icons" id="done">
            verified
        </span>
    </div>
    <div id="menu1" class="menunav">
        <span class="material-icons" id="closebtn" onclick="closeNav()">clear</span>
        <!-- <a href="#">About</a> -->
        <a href="Login regular.php">Student Login</a>
        <a href="Admin.php">Admin Login</a>
        <a href="Faculty Login.php">Faculty Login</a>
        <!--<a href="#">Contact</a>-->
        <!--<a href="Feedback.php">FeedBack</a>-->
        <div class="content1" id="content1">
        <!--<span class="material-icons" id="close" onclick="Restart()">clear</span>
        <p style="position:absolute;width:250px;left:50px;">The main objective of the project is nothing but the problem of current students (end-users)
facing will be solved. The students suffered a lot due to the current changes in students
education and the project that we are developing will surely solve the issue of the students
struggling for writing</p>-->
    </div>
    </div>

    <div class="btn">
        <div class="btn2" id="btn2">
            <span class="material-icons" id="email">email</span>
            
        </div>
        <div class="btn3" id="btn3">
            <span class="material-icons" id="info">
            info </span>
            
        </div>
    </div>
        
    <div class="content1" id="content1">
        <span class="material-icons" id="close" onclick="Restart()">clear</span>
        <p style="position:absolute;width:250px;left:50px;">The main objective of the project is nothing but the problem of current students (end-users)
facing will be solved. The students suffered a lot due to the current changes in students
education and the project that we are developing will surely solve the issue of the students
struggling for writing</p>
    </div>

    <div class="slide">
        <div class="slideshow">
            <div class="first">
                <img src="vector 2.svg" class="vector2">
            </div>
        </div>
        <div class="slideshow">
            <div class="first">
                <img src="vector 5.svg" class="vector2">
            </div>
        </div>
        <div class="slideshow">
            <div class="first">
                <img src="vector 4.svg" class="vector2">
            </div>
        </div>
    </div>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

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

    </div>

    <script>

        function Restart(){
            location.reload();
        }

         redirectTime="2000";
         redirectURL="http://localhost/Exam%20suite/Login%20and%20Signin.php";
         function timedRedirect(){
             setTimeout("location.href=redirectURL;",redirectTime);
         }

        function openNav() {
            document.getElementById("menu1").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("menu1").style.width = "0";
        }

        function button() {
            document.getElementById("btn1").style.width = "60px";
            document.getElementById("btn1").style.left = "725px";
            document.getElementById("btn1").style.color = "transparent";
            document.getElementById("done").style.display = "block";
        }
       
  // Function to display text in an alert for button 2
  function displayAlertt() {
    alert("Email:Examsuite@gmail.com, ContactNo:8075461505");
  }

  // Event listener for the button click
  document.getElementById("btn2").addEventListener("click", displayAlertt);

          // Function to display text in an alert for button3
  function displayAlert() {
    alert("The main objective of the project is nothing but the problem of current students (end-users) facing will be solved. The students suffered a lot due to the current changes in students education and the project that we are developing will surely solve the issue of the students struggling for writing");
  }

  // Event listener for the button click
  document.getElementById("btn3").addEventListener("click", displayAlert);

        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slideshow");
            var dot = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dot.length; i++) {
                dot[i].className = dot[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dot[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000);
        }

        var overlay = document.getElementById("overlay");

        window.addEventListener('load', function() {
            overlay.style.display = 'none';
        })

        document.getElementById("btn3").addEventListener("click", function() {
            var btn3 = document.getElementById("content1");
            if (btn3.style.display == "block") {
                btn3.style.display = "none";
            } else {
                btn3.style.display = "block";
            }
            
        })
        
    </script>

</body>

</html>