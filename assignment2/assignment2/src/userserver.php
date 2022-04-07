<?php

require __DIR__ . '/../src/bootstrap.php';

?>

<?php 
	
	// initialize variables
	$username = "";
	$email = "";
	$id = 0;
	$update = false;

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
	
		$sql = 'DELETE FROM users WHERE id=:id';
	
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
	
	
		$statement->execute();
		$_SESSION['message'] = "Account deleted!"; 
	
		redirect_to('useradmin.php');
	}
	
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
	
		$sql = 'UPDATE users SET username = :username ,email =:email WHERE id=:id';
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':username', $username, PDO::PARAM_STR);
		$statement->bindValue(':email', $email, PDO::PARAM_STR);
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
	
		$statement->execute();
	
	
	
		$_SESSION['message'] = "Account updated!"; 
		redirect_to('useradmin.php');
	}
	if (isset($_POST['save'])) {
	
		$username = $_POST['username'];
		$email = $_POST['email'];
	
		register_user($email, $username, $username, false);
	
		$_SESSION['message'] = "Account created"; 
		redirect_to('useradmin.php');
	}
	
// ...