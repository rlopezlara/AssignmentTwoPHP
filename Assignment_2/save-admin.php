<?php
//Saving data once you sign up
require './content/database.php';

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];


	$ok = true;
	require './content/header.php';
	if(empty($first_name)){
		echo '<p>First name is needed</p>';
		$ok = false;
	}
	if(empty($last_name)){
	echo '<p>Last name is needed</p>';
	$ok = false;
	}
	if(empty($username)){
	echo '<p>Username is needed</p>';
	$ok = false;
	}
	if(empty($age)){
		echo '<p>Age is needed</p>';
		$ok = false;
	}
	if(empty($email)){
		echo '<p>Email is needed</p>';
		$ok = false;
	}
	if((empty($password)) || ($password != $confirm)){
		echo '<p>Password is invalid</p>';
	}
//	saving in the SQL
	if($ok){
		$password = hash('sha512', $password);
		
		$sql = "INSERT INTO userprofile (first_name, last_name, age, email, username, password) VALUES ('$first_name','$last_name','$age',
		'$email','$username','$password');";
		$conn->exec($sql);
		echo '<section class="success-row text-center"';
		echo '<div>';
		echo '<h3>New Member registrated</h3>';
		echo '</div>';
		echo '</section>';
	
		$conn = null;
	}   

	?>
	<section class="row success-back-row">
		<div class="text-center">
			<p>Thanks to join us, please click the button below to see our teams!</p>
			<a href="signin.php" class="btn btn-primary">Sign In</a>
		</div>
	</section>
<?php require './content/footer.php'; ?>
