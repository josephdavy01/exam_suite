<?php

if (isset($_POST["verify_email"])) {
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "exam_suite");
    // mark email as verified
    $sql = "UPDATE student SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0) {
        die("Verification code failed.");
    }

    echo "<script>alert('You can login now.');
    window.location.replace('Dashboard.php');</script>";
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    body {
        background-color: #FF416C;
        position: relative;


    }


    #submit {
        position: relative;
        margin-top: 50px;
        top: 15px;
        width: 200px;
        height: 45px;
        left: 115px;
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

    #username {
        position: relative;
        margin-top: 25px;
        top: 25px;
        width: 275px;
        height: 45px;
        left: 85px;
        background-color: transparent;
        color: white;
        font-size: 16px;
        border: none;
        box-shadow: inset 8px 8px 15px #ca3a5c, inset -8px -8px 15px #e7365f;
        text-align: center;
        border-radius: 25px;
        outline: none;

    }

    #username::-webkit-input-placeholder {
        color: #ffffff;
        opacity: 65%;
    }


    .login {
        position: relative;
        height: 250px;
        width: 450px;
        left: 550px;
        top: 100px;
        background-color: #FF416C;
        box-shadow: 13px 13px 20px #b33250, -13px -13px 20px #e7365f;
        border-radius: 50px;
        transition: 0.5s;
        display: block;
    }

    .login h3 {
        position: relative;
        left: 115px;
        top: 10px;
        color: white;

    }
</style>
<body>
<form method="POST">
    <div class="login">
        <h3>Verify Your OTP</h3>
       
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required />
        <input type="password" name="verification_code" id="username" class="form-control" placeholder="Enter verification code" required />

        <input type="submit" id="submit" name="verify_email" value="Verify Email">
     
    </div>
</form>

</body>

</html>