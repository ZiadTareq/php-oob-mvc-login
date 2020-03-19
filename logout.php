<?php session_start(); ?>
<?php include 'includes/includes.php'; ?>
<body>
	<div class="center">
		<?php
			$logout = new controller();
			$logout->deleteSessions();
			$logout = new views();
			$logout->deleteSessionMsg();
		?>
	</div>
</body>

</html>
