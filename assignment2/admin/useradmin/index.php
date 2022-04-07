<?php

require __DIR__ . '/../../src/bootstrap.php';

?>
<?php view('header', ['title' => 'Home']) ?>
<?php view('nav') ?>

<?php 
    //initialize
    $username = "";
	$email = "";
	$id = 0;
	$update = false;

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$statement = db()->query("SELECT * FROM users WHERE id=$id");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);

		if (count($results) == 1 ) {

			$username = $results[0]['username'];
			$email = $results[0]['email'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>

</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php 
		$statement = db()->query("SELECT * FROM users");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);	
	?>
    <div class="admin-table">
    <h1 class="page-title">Manage User</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php foreach ($results as $row) { ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="../../src/userserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
    <div class="input-group">
    <h1 class="page-title">Create User</h1>
	<form method="post" action="../../src/userserver.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">

             <div class="input-field">
                 <label>Username</label>
                 <input type="text" name="username" value="<?php echo $username; ?>">

             </div>
             <div class="input-field">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">

            </div>
             <div class="input-field">
             <?php if ($update == true): ?>
            	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
            <?php else: ?>
            	<button class="btn" type="submit" name="save" >Save</button>
             <?php endif ?>          
               </div>
         </form>












</body>
</html>


<?php view('footer') ?>