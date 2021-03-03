<?php
session_start();
if	(!empty($_POST)) {
	$password = $_POST['password'];
		if ($password == 'admin') {
			$_SESSION['loggedin'] = '1';
			header('Location: product.php');
			
		} esle {
			echo "sorry, wrong password";
			echo"<hr /><a href= \"login.php\">try again</a>";
		}
		} else {
		
			?>
			
			<h1> log-in</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input name="password" type="password" id="password" />
			<input type="submit" name="submit" value="log-in" />
			</form>
			
			<?php
			}
			?>
