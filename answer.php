<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script>
    function redirectToHomePage() {
        // Redirect to the homepage URL
        window.location.href = "http://localhost/Exam%20Suite/Home%20Page.php"; // Replace "/" with your homepage URL
    }
</script>
  
</head>
<style> 
  body {
			background-color: #FF416C;
			position: relative;
		}
    .right{
      position:absolute;
      right: 800px;
      }
    
</style>
<body>
	<center>
  <?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2 style="color: white;">Your Quiz results</h2>
  <table class="table table-bordered" style="color: white;">
    <thead >
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per = round(($answer['right'] * 100) / $total_qus);

		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
    </tbody>
  </table>
  </div>
  <div class="col-sm-2"></div>
  </div>

  <!-- Add the button here -->
  <div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
      <button type="button" class="btn btn-primary" onclick="redirectToHomePage()">Finish</button>
    </div>
  </div>
    <?php

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "exam_suite");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables from POST data
$email = '';// Initialize email variable (assuming there's an email input in the form)
$username = isset($_POST['username']) ? $_POST['username'] : ''; // Username from POST
$password = isset($_POST['password']) ? $_POST['password'] : ''; // Password from POST

// Perform input validation (optional)
if (empty($username) || empty($password)) {
    echo "";
    exit;
}

// Escape special characters to prevent SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Construct the SQL query to insert user data into the 'users' table
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

// Execute the SQL query and handle the result
if (mysqli_query($conn, $sql)) {
    $msg = "User inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

// Output a message to indicate success or failure
echo $msg;
?>

  </table></div>
  <div class="col-sm-2"></div>
</div>

	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
</body>
