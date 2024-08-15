<?php
include("class/users.php");

$profile = new users;

$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<style>
    body {
        background-color: #FF416C;
        position: relative;
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
        
        #btn1 {
            position: absolute;
            background-color: #ffffff;
            color: #FF416C;
            border-radius: 35px;
            border: 2px solid #ff416d67;
            height: 55px;
            width: 150px;
            right: 0PX;
            left: 690px;
            top: 600px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);            
            cursor: pointer;
            transition: 1s;
            align-items: center;
            outline: none;
        }

        #btn1:hover {
            background-color: #FF416C;
            border: 2px solid white;
            color: white;

        }

        #btn2 {
            position: absolute;
            background-color: #ffffff;
            color: #FF416C;
            border-radius: 25px;
            border: 2px solid #ff416d67;
            height: 45px;
            width: 125px;
            right: 0PX;
            left: 125px;
            top: 100px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);            
            cursor: pointer;
            transition: 1s;
            align-items: center;
            outline: none;
        }

        #btn2:hover {
            background-color: #FF416C;
            border: 2px solid white;
            color: white;

        }

</style>

<body>

    <div class="container">
        <h2>EXAM SUITE</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">QUIZ</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3 style="color: white;position:relative;top:-50px;">
                    <center>All the Best</center>
                </h3>
                <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" id="btn1">Start Quiz</button></center>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"><br>
                    <div id="select" class="tab-pane fade">

                        <form method="post" action="qus_show.php">
                            <select class="form-control" id="" name="cat">
                                <option>select category</option>
                                <?php
                                foreach ($profile->cat as $category) {  ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
                                <?php   } ?>
                            </select><br>
                            <center><input type="submit" value="submit" class="btn btn-primary" id="btn2" /></center>
                        </form>


                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Showing profile</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($profile->data as $prof) { ?>
                            <tr>
                                <td><?php echo $prof['id']; ?></td>
                                <td><?php echo $prof['name']; ?></td>
                                <td><?php echo $prof['email']; ?></td>
                                <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
                            </tr>
                    </tbody>
                <?php     } ?>
                </table>










            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
        var overlay = document.getElementById("overlay");

        window.addEventListener('load', function() {
            overlay.style.display = 'none';
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>