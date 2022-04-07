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
    <link rel="stylesheet" type="text/css" href="style.css">

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
                    <a href="useradmin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="userserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

	<form method="post" action="userserver.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">

             <div class="input-group">
                 <label>username</label>
                 <input type="text" name="username" value="<?php echo $username; ?>">

             </div>
             <div class="input-group">
                <label>email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">

            </div>
             <div class="input-group">
             <?php if ($update == true): ?>
            	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
            <?php else: ?>
            	<button class="btn" type="submit" name="save" >Save</button>
             <?php endif ?>          
               </div>
         </form>

         <hr>











</body>
</html>


<?php view('footer') ?>