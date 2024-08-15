<?php

require ('config.php');

	if(isset($_POST['submit']))

	{

		$Adminname=$_POST['Adminname'];

		$Password=$_POST['Password'];

		$query=mysqli_query($conn,"select Adminname, Password from admin where Adminname='$Adminname' and Password='$Password'");

		if($query)

		{

		if(mysqli_num_rows($query)>0)//returns rows of data from table

        echo "<script>window.location.replace('Admin Dashboard.php');</script>";

		else

			echo 'Login failed';

		}

	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            top: 0px;
            transition: 0.5s;

        }

        .Forgot {
            position: absolute;
            left: 500px;
            top: 0px;
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

        .alert {
            position: absolute;
            top: -65px;
            height: 50px;
            width: 250px;
            background-color: #FF416C;
            border-radius: 10px;
            left: 650px;
            animation: alert 5s ease-in-out;
            border: 2px solid white;
            box-shadow: 3px 5px 5px #b33250, -3px -1px 10px #b33250;

        }

        @keyframes alert {
            0% {
                top: -65px;
            }

            10% {
                top: 60px;
            }

            20% {
                top: 60px;
            }

            30% {
                top: 60px;
            }

            40% {
                top: 60px;
            }

            50% {
                top: 60px;
            }

            60% {
                top: 60px;
            }

            70% {
                top: 60px;
            }

            80% {
                top: 60px;
            }

            90% {
                top: 60px;
            }

            200% {
                top: -60px;
            }
        }

        .alert span {
            position: relative;
            top: -8px;
            left: 60px;
            color: white;
            font-family: sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div class="login" id="login">
            <div class="Forgot" id="1st">
                <h3 class="reg" id="reg">Admin Imp Note</h3>
                <p style="position: relative;top:115px;color:white;">* Problem-solving and critical thinking skills are importantfor any administrative position.<br><br>* Administrators are often the go-to person that staff and clients<br>seek out for help with questions or problems.<br><br>* They must be able to hear a variety of problems and solve them using critical thinking.</p>

            </div>
            <div class="registerpage" id="2nd">
                <h2 class="reg" id="reg">Login</h2>
                <input type="text" name="Adminname" id="name" class="username" placeholder="Adminname" required />
                <input type="password" name="Password" id="Password" class="password" placeholder="Password" required/>
                <button class="submit" name="submit" onclick="getinfo()">Login</button>
                
            </div>




        </div>
        </div>
        </div>

        <div class="alert" id="alert">
            <span>Welcome Admin</span>
        </div>

    </form>

    <button type="button" class="btn1" id="btn1" onclick="openNav()">Login</button>
    <span class="material-icons" id="open">how_to_reg</span>

    <button type="button" class="btn2" id="btn2" onclick="closeNav()">Imp Note</button>
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
        var alert = document.getElementById("alert");

        window.addEventListener('load', function() {
            overlay.style.display = 'none';
            alert.style.display = 'block';
        })

        var objPeople = [{
            name: "admin",
            Password: "admin"
        }]

        function getinfo() {
            var name = document.getElementById("name").value
            var Password = document.getElementById("Password").value

            for (i = 0; i < objPeople.length; i++) {
                if (name == objPeople[i].name && Password == objPeople[i].Password) {
                    alert("You have logged in...");
                } else {
                    alert("Incorrect credentials");
                }
            }
        }
    </script>

</body>

</html>