<?php
session_start();
?>
<?php include 'includes/includes.php'; ?>
<body>
	<h2>login page</h2>
	<div class="container">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			E-mail: <input type="text" name="em" placeholder="type your e-mail">
			Password: <input type="password" name="pw" placeholder="password">
			<input type="submit" name="submit" value="submit">
			<input type="button" onclick="window.location.href = '/login/register.php';" value="register new user" />
		</form>

		<?php
			if (isset($_POST['submit'])) {
				$em = $_POST['em'];
				$pw = $_POST['pw'];
			}
			$login = new controller();
			$loginCheck = new views();
			$process = $login->userLogin($em, $pw);
			if ($process->num_rows > 0) {
				$login->setSessions($process);
				header("Location: index.php");
			} else {
				$loginCheck->incorrectPass($em);
			}
		?>

	</div>
</body>

</html>
