<?php

require __DIR__ . '/../../src/bootstrap.php';

?>

<?php view('header', ['title' => 'Home']) ?>
<?php view('nav') ?>
<?php 
    //initialize
    $product_code = "";
	$product_name = "";
    $product_img_name = "";
    $product_desc = "";
    $price = "";
	$id = 0;
	$update = false;


	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$statement = db()->query("SELECT * FROM products WHERE id=$id");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);

		if (count($results) == 1 ) {
            //because it will return 2d array for some reason
			$product_code = $results[0]['product_code'];
			$product_name = $results[0]['product_name'];
            $product_img_name = $results[0]['product_img_name'];
            $product_desc =  $results[0]['product_desc'];
            $price =  $results[0]['price'];
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
		$statement = db()->query("SELECT * FROM products");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);	
	?>
    
    <h1 class="page-title">Manage Product</h1>
    <table>
        <thead>
            <tr>
                <th>product name</th>
                <th>product code</th>
                <th>product img name</th>
                <th>product description</th>
                <th>product price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php foreach ($results as $row) { ?>
            <tr>
                <td><?php echo $row['product_code']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_img_name']; ?></td>
                <td><?php echo $row['product_desc']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a href="productadmin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="productserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

	<form method="post" action="productserver.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">

             <div class="input-group">
                 <label>product code</label>
                 <input type="text" name="product_code" value="<?php echo $product_code; ?>">
             </div>
             <div class="input-group">
                <label>product name</label>
                <input type="text" name="product_name" value="<?php echo $product_name; ?>">
            </div>
            <div class="input-group">
                 <label>product img name</label>
                 <input type="text" name="product_img_name" value="<?php echo $product_img_name; ?>">
             </div>
             <div class="input-group">
                 <label>product price</label>
                 <input type="text" name="price" value="<?php echo $price; ?>">
             </div>
             <div class="input-group">
                 <label>product description</label>
                 <textarea name="product_desc">Enter product description here...</textarea><br>
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