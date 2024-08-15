<?php
require('config.php');

if (isset($_POST["submit"])) {
    #retrieve file title
    $title = $_POST["title"];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'file';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    #sql query to insert into database
    $sql = "INSERT into filedownload(title,image) VALUES('$title','$pname')";

    if (mysqli_query($conn, $sql)) {

        echo "File Sucessfully uploaded";
    } else {
        echo "Error";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
    body {
        background-color: #FF416C;
        position: relative;

    }


    .class {
        position: relative;
        margin-top: 50px;
        top: 35px;
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

    .file {
        position: relative;
        margin-top: 50px;
        top: 35px;
        left: 85px;
        width: 265px;
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


    .submit {
        position: relative;
        margin-top: 50px;
        top: 25px;
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

    .tab {
        position: relative;
        height: 350px;
        width: 450px;
        left: 550px;
        top: 150px;
        background-color: #FF416C;
        box-shadow: 13px 13px 20px #b33250, -13px -13px 20px #e7365f;
        border-radius: 50px;
        transition: 0.5s;
        display: block;
    }

    .tab1 {
        position: relative;
        left: 5px;
        top: 10px;
 
    }

    .class::-webkit-input-placeholder {
        color: white;
        opacity: 75%;
    }
</style>

<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="tab">
            <h3 style="color: white;position:absolute;top:15px;left:110px;">Time Table Upload</h3>
            <div class="tab1">
                <input type="text" name="title" class="class" placeholder="Class Name" required />
                <input type="file" name="file" class="file" required />
                <input type="submit" value="submit" class="submit" name="submit" id="submit" />
            </div>
        </div>
    </form>
</body>

</html>