


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="popper.min.js" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
      body {
            background-color: #FF416C;
            position: relative;

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
</style>
<body>
    <form method="post" action="">
        <div class="report1" id="report1">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color:white ;color:black;">
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            require('config.php');
                            $sl = 0;
                            $query1 = mysqli_query($conn, "select *from filedownload");
                            while ($row = mysqli_fetch_array($query1)) {
                                $sl++;

                            ?>

                                <tr>
                                    <td><?php echo $row['Title']; ?></td>
                                    <td><?php echo $row['image']; ?></td>
                                    <td class="text-center"><a href="download.php?Title=<?php echo $row['Title']?>" class="btn btn-primary">Download</a></td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </form>

    

</body>
</html>