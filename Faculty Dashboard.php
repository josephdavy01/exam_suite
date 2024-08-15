<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Suite</title>
</head>

<body>
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

        .menu {
            position: absolute;
            background-color: #ffffff;
            top: 50px;
            left: 75px;
            height: 600px;
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.658), 0 6px 20px 0 rgba(0, 0, 0, 0);
            border-radius: 25px;
            z-index: -1;
        }

        .ul {
            position: relative;
            top: 100px;
            display: block;
            list-style: none;
            left: -35px;

        }

        .ul li {
            position: relative;
            padding: 25px;
        }

        .ul li a {
            text-decoration: none;
            font-family: 'Roboto';
            font-size: 20px;
            font-weight: 1000;
            color: #FF416C;
            display: flex;
            align-items: center;
        }

        .ul li a i {
            margin-right: 25px;
        }

        .ul li:hover a {
            color: black;
            transition: 0.2s;
        }

         /* ul li:hover~.active {
         display: block;
         } */


        ul li:nth-child(1):hover~.active {
            top: 20px;
        }

        .logout1 {
            position: relative;
            top: 85px;
            left: 25px;
            background-color: #FF416C;
            height: 40px;
            width: 125px;
            border-radius: 20px;
            border: none;
            color: white;
            font-weight: bold;
            box-shadow: 2px 2px 5px #aaaaaa;
        }

        #logout {
            position: relative;
            font-size: 15px;
            display: flex;
            margin-top: -12px;
            margin-left: 10px;
        }

        .active {
            position: absolute;
            background-color: #FF416C;
            width: 200px;
            height: 47px;
            left: 50px;
            top: 15px;
            z-index: 1;
            border-radius: 25px;
            display: none;
            z-index: -1;
        }

        .frame1 {
            position: absolute;
            height: 250px;
            width: 350px;
            background-color: white;
            border-radius: 15px;
            top: 150px;
            left: 350px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.658), 0 6px 20px 0 rgba(0, 0, 0, 0);
        }

        .frame2 {
            position: absolute;
            height: 250px;
            width: 350px;
            background-color: white;
            border-radius: 15px;
            top: 150px;
            left: 750px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.658), 0 6px 20px 0 rgba(0, 0, 0, 0);
        }

        .start {
            position: absolute;
            bottom: 0px;
            left: 0px;
            background-color: #FF416C;
            height: 65px;
            width: 350px;
            border-radius: 0px;
            border: none;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            color: white;
            font-weight: bold;
            transition: 0.4s ease-in-out;
            opacity: 100%;
        }

        .start:hover {
            position: absolute;
            height: 250px;
            transition: 0.4s ease-in-out;
            color: #FF416C;
        }

        .dashboard {
            position: absolute;
            top: 0;
            left: 250px;

        }

        #dashboard1 {
            display: none;
        }

        #ques1 {
            position: initial;
            background-color: white;
            height: 50px;
            width: 550px;
            top: 110px;
            left: 950px;
            margin-left: 650px;
            border-radius: 25px;
            margin-top: 2px;
        }


        .dropbtn {
            position: absolute;
            height: 50px;
            width: 450px;
            top: 125px;
            left: 500px;
            transition: 0.2s ease-in-out;
            background-color: white;
            border-radius: 10px;
        }

        .dropbtn p {
            position: relative;
            left: 15px;
        }

        .content {
            position: absolute;
            background-color: #ffffff;
            height: 60px;
            width: 450px;
            top: 200px;
            left: 500px;
            font-family: 'Roboto';
            font-weight: bold;
            border-radius: 10px;
            display: none;
        }

        .content p {
            position: relative;
            left: 10px;
        }

        #forum1 {
            display: none;
        }

        .to {
            position: relative;
            margin-top: 50px;
            top: 25px;
            width: 275px;
            height: 45px;
            left: 65px;
            background-color: transparent;
            color: white;
            font-size: 16px;
            border: none;
            box-shadow: inset 8px 8px 15px #ca3a5c, inset -8px -8px 15px #e7365f;
            text-align: center;
            border-radius: 25px;
            outline: none;
        }

        .to::-webkit-input-placeholder,
        .body::-webkit-input-placeholder {
            color: white;
        }

        .body {
            position: absolute;
            margin-top: 50px;
            top: 325px;
            width: 275px;
            height: 100px;
            left: 65px;
            background-color: transparent;
            color: white;
            font-size: 16px;
            border: none;
            box-shadow: inset 8px 8px 15px #ca3a5c, inset -8px -8px 15px #e7365f;
            text-align: center;
            border-radius: 25px;
            outline: none;
        }

        .send {
            position: absolute;
            margin-top: 50px;
            top: 455px;
            width: 200px;
            height: 45px;
            left: 100px;
            background-color: #FF416C;
            color: white;
            font-size: 16px;
            border: none;
            box-shadow: 5px 5px 10px #ca3a5c, -5px -5px 10px #e7365f;
            text-align: center;
            border-radius: 15px;
            outline: none;
            transition: 0.5s ease-in-out;
            transform: scale(1);
        }

        .send:hover {
            transform: scale(1.05);
        }


        .help1 {
            cursor: pointer;
        }

        .help {

            height: 100%;
            width: 100%;
            place-items: center;
            display: none;
        }

        .tooltip1 {
            position: absolute;
            background-color: white;
            place-items: center;
            font-family: 'Roboto';
            font-weight: bolder;
            color: #FF416C;
            top: 150px;
            left: 490px;
            height: 25px;
            width: 85px;
            border: none;
            border-radius: 20px;
            transition: 0.4s;
            animation: tooltip1 0.4s;
        }

        @keyframes tooltip1 {
            from {
                top: 265px;
                opacity: 0;
            }

            to {
                top: 150px;
                opacity: 1;
            }
        }

        .tooltip2 {
            position: absolute;
            background-color: white;
            place-items: center;
            font-family: 'Roboto';
            color: #FF416C;
            font-weight: bolder;
            top: 150px;
            left: 650px;
            height: 25px;
            width: 85px;
            border: none;
            border-radius: 20px;
            transition: 0.4s;
            animation: tooltip2 0.4s;
            display: none;
        }

        @keyframes tooltip2 {
            from {
                top: 265px;
                opacity: 0;
            }

            to {
                top: 150px;
                opacity: 1;
            }
        }

        #mail {
            position: absolute;
            color: #FF416C;
            top: 215px;
            left: 514px;
            z-index: 1;
        }

        #phone {
            position: absolute;
            color: #FF416C;
            top: 215px;
            left: 675px;

        }


        .icon1 {
            position: absolute;
            display: flex;
            background-color: #ffffff;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
            height: 60px;
            width: 60px;
            top: 200px;
            left: 500px;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.726);


        }

        .icon2 {
            position: absolute;
            display: flex;
            background-color: #ffffff;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
            height: 60px;
            width: 60px;
            top: 200px;
            left: 660px;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.726);


        }

        @media screen and (max-width: 800px) {

            .menu {
                width: 85px;
            }

            .logout1 {
                width: 35px;
                color: transparent;
            }

            #logout {
                color: white;
                left: -2px;
            }

            .vector6 {
                left: -150px;

            }

            .start {
                left: 0px;
                width: 250px;

            }

            .frame1 {
                top: 25px;
                width: 250px;
                left: 125px;
            }

            .vector7 {
                left: -150px;

            }

            .start {
                left: 0px;
                width: 250px;

            }

            .frame2 {
                top: 350px;
                width: 250px;
                left: 125px;
            }

        }

        #content1 {
            position: absolute;
            top: 100px;
            left: 650px;
            animation: content1 1s;
        }

        @keyframes content1 {
            from {
                opacity: 0;

            }

            to {
                opacity: 1;

            }
        }

        #content2 {
            position: absolute;
            top: 300px;
            left: 700px;
            font-family: 'Roboto';
            color: white;
            display: none;
            animation: content1 1s;
        }

        .login {
            position: absolute;
            height: 565px;
            width: 400px;
            left: 675px;
            top: 100px;
            background-color: #FF416C;
            box-shadow: 13px 13px 20px #b33250, -13px -13px 20px #e7365f;
            border-radius: 50px;
            transition: 0.5s;
            display: block;
        }

        .registerpage {
            position: relative;
            left: 20px;
            top: -25px;
            transition: 0.5s;
        }
    </style>

    <div class="menu" id="menu">
        <ul class="ul">
            <li>
                <!--<a href="#"><i class="material-icons">
                        account_box
                    </i>Account</a>-->
            </li>
            <li>
                <a href="admin/add_quiz.php" id="dashboard"><i class="material-icons">dashboard</i>Dashboard</a>
            </li>
            <li>
                <a href="#" id="help2"><i class="material-icons">help_center</i>Help</a>
            </li>
            <li>
                <a href="#" id="forum"><i class="material-icons">forum</i>Forum</a>
            </li>
            <div class="active"></div>
            <button class="logout1" onclick="logout()">Logout<i class="material-icons" id="logout">logout</i></button>
        </ul>
    </div>
    <div class="dashboard" id="manage-quiz">

    </div>



    <div class="help" id="help1">
        <h3 style="position: absolute;left:750px;color:white;font-size:25px;font-family:Roboto;text-decoration:underline;">Help</h3>

        <div class="help1">

            <div id="maincontent1" style="position: absolute;left:-50px">
                <div class="icon1"> </div>
                <button class="tooltip1" id="tooltip1">Mail</button>
                <span class="material-icons" id="mail">email</span>
            </div>
            <div id="content1" class="login">
                <form action="javascript:sendmail()" method="post">

                    <div id="registerpage">
                        <input type="text" name="name" class="to" id="Name" placeholder="Name" required autocomplete="off" />
                        <input type="email" class="to" name="Sender" id="Sender" placeholder="Email" required autocomplete="off" />
                        <input type="text" name="email" class="to" id="Subject" placeholder="Subject" required autocomplete="off" />
                        <textarea class="body" name="message" id="Message" placeholder="Enter your Message" required autocomplete="off"></textarea>
                        <button type="submit" class="send" onclick="sendmail();">send</button>
                    </div>

                </form>
            </div>

            <div id="maincontent2" style="position: absolute;left:-210px;top:150px;">

                <div class="icon2" id="icon2"> </div>

                <span class="material-icons" id="phone">
                    call
                </span>

                <button class="tooltip2" id="tooltip2">Phone</button>
            </div>
            <div id="content2">
                <p><strong>
                        <center>call us on : </center><br>
                    </strong>+91 7845951236</p>
            </div>

        </div>
    </div>
    <div class="Forum" id="forum1">
        <h3 style="position: absolute;left:750px;color:white;font-size:25px;font-family:Roboto;text-decoration:underline;">Forum</h3>
        <div class="dropdown" onclick="closefunction()">
            <div onclick="myfunction()" class="dropbtn" id="dropbtn">
                <p>1. Will I be able to upload or change my profile pic ?</p>
            </div>
            <div class="content" id="content">
                <p>=> Yes, You will be able change your profile pic at any time you want</p>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
        function sendmail() {

            var name = $('#Name').val();
            var email = $('#Sender').val();
            var subject = $('#Subject').val();
            var message = $('#Message').val();

            // var body = $('#body').val();

            var Body = 'Name: ' + name + '<br>Email: ' + email + '<br>Subject: ' + subject + '<br>Message: ' + message;
            //console.log(name, phone, email, message);

            Email.send({
                SecureToken: "dcd31f4a-e5f4-4410-a0f4-450d1bb92b78",
                To: 'thelogomaker2k1@gmail.com',
                From: "examsuiteproject@gmail.com",
                Subject: "New message on contact from " + name,
                Body: Body
            }).then(
                message => {
                    //console.log (message);
                    if (message == 'OK') {
                        alert('Your mail has been send. Thank you for connecting.');
                    } else {
                        console.error(message);
                        alert('There is error at sending message. ')

                    }

                }
            );



        }

        function logout() {
            location.replace("http://localhost/Exam%20suite/Home%20Page.php")
        }

        var header = document.getElementById("menu");
        var btns = header.getElementsByClassName("icon1");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }




        document.getElementById("dashboard").addEventListener("click", function() {
            var box2 = document.getElementById("manage-quiz");
            var box1 = document.getElementById("forum1");
            var box3 = document.getElementById("help1");
            if (box2.style.display == "block") {
                // box2.style.display = "none";
                box1.style.display = "none";
                box3.style.display = "none";

            } else {
                box2.style.display = "block";
                box1.style.display = "none";
                box3.style.display = "none";
            }
        })


        document.getElementById("forum").addEventListener("click", function() {
            var box1 = document.getElementById("manage-quiz");
            var box2 = document.getElementById("forum1");
            var box3 = document.getElementById("help1");
            if (box2.style.display == "block") {
                //   box2.style.display = "none";
                box1.style.display = "none";
                box3.style.display = "none";

            } else {
                box2.style.display = "block";
                box1.style.display = "none";
                box3.style.display = "none";
            }
        })

        document.getElementById("help2").addEventListener("click", function() {
            var box1 = document.getElementById("help1");
            var box2 = document.getElementById("manage-quiz");
            var box3 = document.getElementById("forum1");
            if (box1.style.display == "block") {
                //   box2.style.display = "none";
                box2.style.display = "none";
                box3.style.display = "none";

            } else {
                box1.style.display = "block";
                box2.style.display = "none";
                box3.style.display = "none";
            }
        })

        document.getElementById("dropbtn").addEventListener("click", function() {
            var box1 = document.getElementById("content");
            if (box1.style.display = "none") {
                box1.style.display = "block";
            } else {
                box1.style.display = "none";
            }
        });

        document.getElementById("maincontent2").addEventListener("click", function() {
            var phone = document.getElementById("tooltip2");
            var mail = document.getElementById("tooltip1");
            var content1 = document.getElementById("content1");
            var content2 = document.getElementById("content2");
            if (phone.style.display = "none") {
                phone.style.display = "block";
                mail.style.display = "none";
                content1.style.display = "none"
                content2.style.display = "block"

            } else {
                phone.style.display = "none";
            }
        });

        document.getElementById("maincontent1").addEventListener("click", function() {
            var mail = document.getElementById("tooltip1");
            var phone = document.getElementById("tooltip2");
            var content1 = document.getElementById("content1");
            var content2 = document.getElementById("content2");
            if (mail.style.display = "none") {
                mail.style.display = "block";
                phone.style.display = "none";
                content1.style.display = "block"
                content2.style.display = "none"

            } else {
                mail.style.display = "none";
            }
        });


        // document.getElementById("icon2").addEventListener("click", function() {
        //    var mail = document.getElementById("content1");
        //   if (mail.style.display = "none") {
        //      mail.style.display = "block";

        //   } else {
        //      mail.style.display = "none";
        //  }
        //  });
    </script>

</body>

</html>