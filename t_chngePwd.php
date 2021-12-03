<?php

session_start();

if (isset($_SESSION['tname']))
{

}
else
{
	header('location: ../login.php');
}

include('dbcon.php');
$tname = $_SESSION['tname'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
		.main {
			padding-bottom: 10px;
			border-radius: 15px;
			margin-top: 50px;
			opacity: 0.9;
			width: 700px;
		}
	</style>
</head>

<body>

	<section class="colored-section" id="title">

		<div class="container-fluid">

			<!-- Nav Bar -->

			<nav class="navbar navbar-expand-lg navbar-dark">

				<a class="navbar-brand" href="team_account.php?tname=<?php echo $tname ?>">Ego Chal</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="teams.php?tname=<?php echo $tname ?>">Teams</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="games.php?tname=<?php echo $tname ?>">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="events.php?tname=<?php echo $tname ?>">Events</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="t_account.php?tname=<?php echo $tname ?>">View Account</a>
								<a class="dropdown-item" href="about.php">About</a>
								<a class="dropdown-item" href="contact.php">Contact Us</a>
								<a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
							</div>
						</li>
					</ul>


				</div>


		</div>

		<h1 class="text-center text-light">ACCOUNT INFORMATION</h1>
		<a href="t_account.php?tname=<?php echo $tname ?>"><button type="button" class="btn btn-danger ml-3" style="float:left;">BACK</button></a>






		</nav>


	</section>



	<div class="container bg-dark text-light text-center main">
		<h1 class="pt-4">CHANGE PASSWORD</h1>
		<table align="center" class="mt-5 text-right">
			<form action="t_chngePwd.php?tname=<?php echo $tname ?>" method="post">
				<tr>
					<td>Old Password</td>
					<td><input type="text" name="oldpwd" placeholder="Old Password" required></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="password" name="pwd" placeholder="Password" required></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="cpwd" placeholder="Confirm Password" required></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" name="submit" value="Change Password" class="btn btn-primary"></td>
					</t>
			</form>
		</table>
	</div>


	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>

</html>

<?php

	if (isset($_POST['submit']))
	{


	 	$oldpwd = $_POST['oldpwd'];
		$pwd = $_POST['pwd'];
		$cpwd = $_POST['cpwd'];

		$sql = "SELECT `password` FROM `team` WHERE `team_name` = '$tname'";
		$run = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($run);

		$oldpwdDb = $data['password'];

		if ($oldpwd == $oldpwdDb)
		{
			if ($pwd == $cpwd)
			{
				$usql = "UPDATE `team` SET `password` = '$pwd', `cpassword` =  '$cpwd' WHERE `team_name` = '$tname'";
				$run = mysqli_query($conn, $usql);
				?>
<script type="text/javascript">
	alert("Password Changed Successfully! Login Again!!");
	window.open('login.php', '_self');
</script>
<?php
				session_destroy();
			}
			else
			{
				?>
<script type="text/javascript">
	alert("Password and Confirm Password not match!");
</script>
<?php
			}
		}
		else
		{
			?>
<script type="text/javascript">
	alert("Incorrect Current Password!");
</script>
<?php
		}
	}
?>
