<?php
include 'includes/includes.php';
?>
<body>
<?php include 'includes/formValidation.php';?>
<h2>registration page</h2>
<div class="container">
	<p><span class="error">* required fields</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Name: <input class="input" type="text" name="name" placeholder="Ex: Ali ...">
		<span class="error">
			<p>* <?php echo $nameErr; ?></p>
		</span>
		E-mail: <input class="input" type="text" name="email" placeholder="Ex: Ali@gmail.com ...">
		<span class="error">
			<p>* <?php echo $emailErr; ?></p>
		</span>
		Password: <input class="input" type="password" name="password" placeholder="password">
		<span class="error">
			<p> * <?php echo $passwordErr; ?></p>
		</span>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<span class="error">
			<p> * <?php echo $genderErr; ?></p>
		</span>
		<input class="button" type="submit" name="submit" value="Submit">
		<input type="button" onclick="window.location.href = '/login/login.php';" value="already have account" />
	</form>

	<?php
		if ($name === -1 || $password === -1 || $email === -1 || $gender === -1) {
			echo "<p>please insert right information</p>";
		} else {
			$alreadyExists = new views();
			if ($alreadyExists->alreadyExists($email) === -1) {
				$newUser = new controller();
				$newUser->createUser($name, $email, $password, $gender);
				header("Location: login.php");
			}
		}
	?>

</div>
</body>
</html>
