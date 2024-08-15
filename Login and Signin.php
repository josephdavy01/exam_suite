<?php
require ('config.php');

    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 
    //Load Composer's autoloader
    require 'vendor/autoload.php';
 

          

    if (isset($_POST["register"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $verification_code="1234";

        
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student WHERE email='{$email}'")) > 0) {
        echo "email is already registered";
    } else {
  
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
 
        try {
            //Enable verbose debug output
            //$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
 
            //Send using SMTP
            //$mail->isSMTP();
 
            //Set the SMTP server to send through
            //$mail->Host = 'smtp.gmail.com';
 
            //Enable SMTP authentication
            //$mail->SMTPAuth = true;
 
            //SMTP username
            //$mail->Username = 'examsuiteproject@gmail.com';
 
            //SMTP password
            //$mail->Password = 'project2021project2021';
 
            //Enable TLS encryption;
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //$mail->Port = 587;
 
            //Recipients
            //$mail->setFrom('examsuiteproject@gmail.com', 'Exam Suite');
 
            //Add a recipient
            //$mail->addAddress($email, $name);
 
            //Set email format to HTML
            //$mail->isHTML(true);
 
            //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
 
            //$mail->Subject = 'Email verification';
            //$mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
 
            //$mail->send();
            // echo 'Message has been sent';
 
            //$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
 
            // connect with database
            $conn = mysqli_connect("localhost","root","","exam_suite");
 
            // insert in users table
            $sql = "INSERT INTO student(fname, email, password) VALUES ('" . $name . "', '" . $email . "', '" . $password . "')";
            mysqli_query($conn, $sql);
 
            header("Location: Login regular.php");
            exit();
        } catch (Exception $e) {
            echo "Only @kristujayanti.com Mail id will be Validated : {$mail->ErrorInfo}";
        }
        }
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #FF416C;
            position: relative;


        }


        .login {
            position: fixed;
            height: 580px;
            width: 450px;
            left: 550px;
            top: 60px;
            background-color: #FF416C;
            box-shadow: 13px 13px 20px #b33250, -13px -13px 20px #e7365f;
            border-radius: 50px;
            transition: 0.5s;
            display: block;
        }

        .registerpage {
            position: relative;
            left: 20px;
            top: 50px;
            transition: 0.5s;
            padding: 10px;
        }

        #exampleInputEmail1,#exampleInputEmail2,
        #exampleInputPassword1 {
            position: relative;
            margin-top: 25px;
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

        #submit{
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

        #submit:hover {
            transform: scale(1.05);
        }

        #exampleInputEmail1::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }

        #exampleInputEmail2::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }

        #exampleInputPassword1::-webkit-input-placeholder {
            color: #ffffff;
            opacity: 65%;
        }


        #reg{
            position: relative;
            left: 115px;
        }

    </style>

</head>

<body>
    <form method="POST" action="">
        <div class="login">
            <div class="registerpage" id="2nd">
                <h2 class="reg" id="reg" style="color: white;">Registration</h2>
                <div class="mb-3">

                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="name" autocomplete="off" />

                    <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Email address" name="email" autocomplete="off" />
                    <span id="emailMsg"></span>
                </div>
                <div class="mb-3">

                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" />
                    <span id="passMsg"></span>
                </div>
                <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary" id="submit" name="register">Register</button>
            </div>
        </div>
    </form>


    <script>
        $(document).ready(function(){
		// set initially button state hidden
		$("#submit").hide();
		// use keyup event on email field
		$("#exampleInputEmail2").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#exampleInputEmail2").css("border","2px solid green");
				// and set label 
				$("#emailMsg").html("<span class='material-icons'>check_circle</span>");  
			}else{
				// if the email is not validated
				// set border red
				$("#exampleInputEmail2").css("border","2px solid red");
				$("#emailMsg").html("<span class='material-icons'>highlight_off</span>");
			}
			buttonState();
		});

    $("#exampleInputPassword1").keyup(function(){
			// check
			if(validatePassword()){
				// set input password border green
				$("#exampleInputPassword1").css("border","2px solid green");
				//set passMsg 
				$("#passMsg").html("<span class='material-icons'>check_circle</span>");
			}else{
					// set input password border red
				$("#pass").css("border","2px solid red");
				//set passMsg 
				$("#passMsg").html("<span class='material-icons'>highlight_off</span>");
			}
			buttonState();
		});
	});

	function buttonState(){
		if(validateEmail() && validatePassword()){
			// if the both email and password are validate
			// then button should show visible
			$("#submit").show();
		}else{
			// if both email and pasword are not validated
			// button state should hidden
			$("#submit").hide();
		}
	}
	function validateEmail(){
		// get value of input email
		var email=$("#exampleInputEmail2").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

	}

    function validatePassword(){
		//get input password value
		var pass=$("#exampleInputPassword1").val();
		// check it s length
		if(pass.length > 7){
			return true;
		}else{
			return false;
		}

	}

    </script>

</body>

</html>

