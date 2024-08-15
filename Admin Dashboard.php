<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&family=Source+Sans+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d92464b5e7.js" crossorigin="anonymous"></script>
    <link href="popper.min.js" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Exam Suite</title>
</head>

<body>

    <style>
        body {
            background-color: #FF416C;
            position: relative;

        }

        .menu {
            position: absolute;
            background-color: #ffffff;
            top: 75px;
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


    
        .material-icons {
            font-size: 35px;
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

        .logout2 {
            position: absolute;
            top: -150px;
            left: 1050px;
            background-color: #FF416C;
            height: 40px;
            width: 125px;
            border-radius: 10px;
            border: none;
            color: white;
            font-weight: bold;
            box-shadow: 0px 0px 5px black;
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
            top: 125px;
            width: 275px;
            height: 45px;
            left: 500px;
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
            top: 225px;
            width: 275px;
            height: 100px;
            left: 500px;
            background-color: transparent;
            color: black;
            font-size: 16px;
            border: none;
            box-shadow: inset 8px 8px 15px #ca3a5c, inset -8px -8px 15px #e7365f;
            text-align: center;
            border-radius: 25px;
            outline: none;
        }

        .send {
            position: relative;
            margin-top: 50px;
            top: 325px;
            width: 200px;
            height: 45px;
            left: 260px;
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
            top: 135px;
            left: 165px;
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

        .table-responsive {
            position: absolute;
            left: 500px;
            top: 150px;
            color: black;
            background-color: white;
            border-radius: 15px;
            width: 650px;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);
        }

        .split {
            position: absolute;
            top: -150px;
        }

        @media print {
            body {
                visibility: hidden;
            }

            #report1 {
                visibility: visible;
                position: absolute;
                left: -450px;
            }

            #report2 {
                visibility: visible;
                position: absolute;
                left: -450px;
            }
        }

        .report2 {
            display: none;
        }

        .login {
            position: absolute;
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
            top: -100px;
            transition: 0.5s;

        }

        .username {
            position: absolute;
            margin-top: 50px;
            top: 150px;
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

        .password {
            position: absolute;
            margin-top: 50px;
            top: 250px;
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

        .password1 {
            position: absolute;
            margin-top: 50px;
            top: 350px;
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
            position: absolute;
            margin-top: 50px;
            top: 425px;
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

        .password1::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }


        .reg {
            position: absolute;
            color: white;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            top: 60px;
        }
    </style>

    <div class="menu" id="menu">
        <ul class="ul">
            <!--<<li>
               <a href="#"><i class="material-icons">
                        account_box
                    </i>Account</a>
            </li>-->
            <li>
                <a href="#" id="dashboard"><i class="material-icons"></i></a>
            </li>
            <li>
                <a href="#" id="help2"><i class="material-icons">help_center</i>Add Test</a>
            </li>
            <li>
                <a href="#" id="forum"><i class="material-icons">forum</i>Faculty</a>
            </li>

            <div class="active"></div>
            <button class="logout2" onclick="myFunction()">Time Table</button>
            <button class="logout1"><a href="Home Page.php">Logout<i class="material-icons" id="logout">logout</i></a></button>
        </ul>

        <div class="dashboard" id="dashboard1">

            <button type="button" id="student" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Student" style="background-color: #0275d8;position:absolute;left:
            500px;border:2px solid white;">
                Student
            </button>
            <button type="button" id="faculty" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Faculty" style="background-color: #0275d8;position:absolute;left:
            650px;outline:none;border:2px solid white;">
                Faculty
            </button>



            <div class="report1" id="report1">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color:white ;color:black;">
                                <th scope="col">Sl no.</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                            $sl = 0;
                            $query1 = mysqli_query($conn, "select *from student");
                            while ($row = mysqli_fetch_array($query1)) {
                                $sl++;

                            ?>

                                <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><i class="fa fa-pencil-square-o"></i></td>
                                    <td><i class="fa-solid fa-trash"></i></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
           <!-- <button class="btn btn-primary" type="submit" id="print1" style="position:absolute;left:800px;top:0px;width:75px;" onclick="window.print()" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">Print</button>-->
            <div class="report2" id="report2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color:#FF416C ;color:black;">
                                <th scope="col">Sl no.</th>
                                <th scope="col">name</th>
                                <th scope="col">username</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                            $sl = 0;
                            $query1 = mysqli_query($conn, "select *from users");
                            while ($row = mysqli_fetch_array($query1)) {
                                $sl++;

                            ?>

                                <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><i class="fa fa-pencil-square-o"></i></td>
                                    <td><i class="fa-solid fa-trash"></i></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <div class="help" id="help1">
        <h3 style="position: absolute;left:750px;color:white;font-size:25px;font-family:Roboto;text-decoration:underline;">Subjects</h3>
        <h4 style="position: absolute;left:500px;text-align: center;padding: 135px 0;color:white;font-size:25px;font-family:Roboto;">Category</h4>
        <div class="help1">
            <form action="" method="POST">

                <input type="text" name="cat_name" class="to" required />
                <input type="submit" name="submit" class="send" />

            </form>
            <center>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "exam_suite");
                $msg = "";
                if (isset($_POST['submit'])) {
                    $cat_name = $_POST['cat_name'];

                    $sql = "INSERT INTO category (cat_name)VALUES ('$cat_name')";
                    if (mysqli_query($conn, $sql)) {
                        $msg = "New record created successfully !";
                    } else {
                        echo "Error: " . $sql . "
" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                }
                ?>

            </center>

        </div>
    </div>
    <div class="Forum" id="forum1">
        <h3 style="position: absolute;left:750px;color:white;font-size:25px;font-family:Roboto;text-decoration:underline;">Faculty</h3>

        <form method="POST">
            <div class="login" id="login">

                <div class="registerpage" id="2nd">
                    <h2 class="reg" id="reg">Registration</h2>
                    <input type="text" name="name" id="name" class="username" placeholder="Name" required />
                    <input type="text" name="username" id="email" class="password" placeholder="UserName" required />
                    <input type="password" name="password" id="password" class="password1" placeholder="Password" required />
                    <button type="submit" class="submit" name="submit1">Register</button>

                </div>
            </div>
    </div>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "exam_suite");
    $msg = "";
    if (isset($_POST['submit1'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name,username,password)
	 VALUES ('$name','$username','$password')";
        if (mysqli_query($conn, $sql)) {
            $msg = "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>

    </form>

    </div>


    <script src="jquery.min.js"></script>

    <script>
        function myFunction() {
            window.location.replace('Timetable.php');
        }

        $('.print1').click(function() {
            var printime = document.getElementById('report1');
            var wme = window.open("", "", "width=900,height=700");
            wme.document.write(printime.outerHTML);
            wme.document.close();
            wme.focus();
            wme.print();
            wme.close();
        })

        $('.print2').click(function() {
            var printime = document.getElementById('report2');
            var wme = window.open("", "", "width=900,height=700");
            wme.document.write(printime.outerHTML);
            wme.document.close();
            wme.focus();
            wme.print();
            wme.close();
        })

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

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
            var box2 = document.getElementById("dashboard1");
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
            var box1 = document.getElementById("dashboard1");
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
            var box2 = document.getElementById("dashboard1");
            var box3 = document.getElementById("forum1");
            if (box1.style.display == "block") {
                  box2.style.display = "none";
                box2.style.display = "none";
                box3.style.display = "none";

            } else {
                box1.style.display = "block";
                box2.style.display = "none";
                box3.style.display = "none";
            }
        })

        document.getElementById("student").addEventListener("click", function() {
            var box1 = document.getElementById("report1");
            var box2 = document.getElementById("report2");
            if (box1.style.display == "block") {
                //   box2.style.display = "none";
                box2.style.display = "none";

            } else {
                box1.style.display = "block";
                box2.style.display = "none";
            }
        })

        document.getElementById("faculty").addEventListener("click", function() {
            var box1 = document.getElementById("report2");
            var box2 = document.getElementById("report1");
            if (box1.style.display == "block") {
                //   box2.style.display = "none";
                box2.style.display = "none";

            } else {
                box1.style.display = "block";
                box2.style.display = "none";
            }
        })


        document.getElementById("icon2").addEventListener("click", function() {
        var mail = document.getElementById("content1");
          if (mail.style.display = "none") {
             mail.style.display = "block";

           } else {
              mail.style.display = "none";
         }
          });
    </script>

    <?php

    ?>


</body>

</html>