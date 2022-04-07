<?php

require __DIR__ . '/bootstrap.php';

?>

<?php 
	
	// initialize variables
	$username = "";
	$email = "";
	$id = 0;
	$update = false;
	$admin_access = 0;

	if (isset($_GET['admin'])) {
		$id = $_GET['admin'];

		$statement = db()->query("SELECT * FROM users WHERE id=$id");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);
		$results = $results[0];
		$statement->execute();

		var_dump($results['is_admin']);
		$is_admin = $results['is_admin'];

		if($is_admin == 1){
			$admin_access = 0;
		}else{
			$admin_access = 1;
		}


		$sql = 'UPDATE users SET is_admin = :is_admin WHERE id=:id';
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':is_admin', $admin_access, PDO::PARAM_INT);
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
	
		$statement->execute();
	
		if($is_admin == 1){
			$_SESSION['message'] = "Access remove!"; 

		}else{
			$_SESSION['message'] = "Access updated!"; 

		}
	
	
		redirect_to('/assignment2/admin/useradmin/');
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
	
		$sql = 'DELETE FROM users WHERE id=:id';
	
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
	
	
		$statement->execute();
		$_SESSION['message'] = "Account deleted!"; 
	
		redirect_to('/assignment2/admin/useradmin/');
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
		redirect_to('/assignment2/admin/useradmin/');
	}
	if (isset($_POST['save'])) {
	
		$username = $_POST['username'];
		$email = $_POST['email'];
	
		register_user($email, $username, $username, false);
	
		$_SESSION['message'] = "Account created"; 
		redirect_to('/assignment2/admin/useradmin/');
	}
	
// ...