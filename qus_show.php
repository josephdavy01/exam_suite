<?php
include("class/users.php");
$qus = new  users;
$cat = $_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat'] = $cat;
/* echo"<pre>";
print_r($qus->qus); */
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function timeout() {
			var hours = Math.floor(timeLeft / 3600);
			var minute = Math.floor((timeLeft - (hours * 60 * 60) - 30) / 60);
			var second = timeLeft % 60;
			var hrs = checktime(hours);
			var mint = checktime(minute);
			var sec = checktime(second);
			if (timeLeft <= 0) {
				clearTimeout(tm);
				document.getElementById("form1").submit();
			} else {

				document.getElementById("time").innerHTML = hrs + ":" + mint + ":" + sec;
			}
			timeLeft--;
			var tm = setTimeout(function() {
				timeout()
			}, 1000);
		}

		function checktime(msg) {
			if (msg < 10) {
				msg = "0" + msg;
			}
			return msg;
		}
	</script>

	<style>
		body {
			background-color: #FF416C;
			position: relative;
		}

		#info{
			display: none;
		}

		#btn{
			position: relative;
            background-color: #ffffff;
            color: #FF416C;
            border-radius: 25px;
            border: 2px solid #ff416d67;
            height: 45px;
            width: 150px;
			top: 15px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.562);            
            cursor: pointer;
            transition: 1s;
            align-items: center;
            outline: none;
		}

	</style>

</head>

<body onload="timeout()">

	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h2 style="color: white;">Onilne quiz in php
				<script type="text/javascript">
					var timeLeft =   60* 10;
				</script>

				<div id="time" style="float:right">timeout</div>
			</h2>
			<?php
			$i = 1;
			foreach ($qus->qus as $qust) { ?>
				<form method="post" id="form1" action="answer.php">
					<table class="table table-bordered">
						<thead>
							<tr class="danger">
								<th style="background-color: white;color:black;"><?php echo $i; ?> <?php echo $qust['qus']; ?> </th>
							</tr>
						</thead>

						<tbody>
							<?php if (isset($qust['option1'])) { ?>
								<tr class="info">
									<td style="background-color:#FF416C;color:white;">&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['cat_id']; ?>" />&nbsp;<?php echo $qust['option1']; ?> </td>
								</tr>
							<?php } ?>
							<?php if (isset($qust['option2'])) { ?>
								<tr class="info">
									<td style="background-color:#FF416C;color:white;">&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['cat_id']; ?>" />&nbsp;<?php echo $qust['option2']; ?></td>
								</tr>
							<?php } ?>
							<?php if (isset($qust['option3'])) { ?>
								<tr class="info">
									<td style="background-color:#FF416C;color:white;">&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['cat_id']; ?>" />&nbsp;<?php echo $qust['option3']; ?></td>
								</tr>
							<?php } ?>
							<?php if (isset($qust['option4'])) { ?>
								<tr class="info">
									<td style="background-color:#FF416C;color:white;">&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['cat_id']; ?>" />&nbsp;<?php echo $qust['option4']; ?></td>
								</tr>
							<?php } ?>
							<tr class="info" id="info">
								<td ><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['cat_id']; ?>" /></td>
							</tr>
						</tbody>

					</table>
				<?php $i++;
				echo(isset($qust['option1']));
			} ?>
				<center><input type="submit" value="submit Quiz" class="btn btn-success" id="btn" /></center>
				
				</form>
		</div>
		<div class="col-sm-2"></div>
	</div>

</body>

</html>