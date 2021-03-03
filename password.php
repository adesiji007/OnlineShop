>?php
session_start();
if (isset($_SESSION['loggedin']){
					//user is logged in. SHow a message on the screen
					echo "I can see that you are logged in<hr />";
	}
		else {
				//redirect the user to the loging form.
				session_destroy();
				header('Location: login.php');
	} ?>