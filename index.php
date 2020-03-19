<?php session_start(); ?>
<?php include 'includes/includes.php'; ?>
<body>
	<div class="center">
		<?php
			$getSession = new views();
			$getSession->getSessions();
		?>
		<a class="logout" href='logout.php'>Click here to log out</a>
	</div>
</body>

</html>
