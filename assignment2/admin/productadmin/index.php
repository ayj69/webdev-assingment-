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
    $product_desc = "Enter product description here...";
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
		$statement = db()->query("SELECT * FROM products");
		$results =  $statement->fetchall(PDO::FETCH_ASSOC);	
	?>
    <div class="admin-table">
    <h1 class="page-title">Manage Product</h1>
    <table >
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Img Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php foreach ($results as $row) { ?>
            <tr>
                <td><?php echo $row['product_code']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_img_name']; ?></td>
                <td><?php echo ellipsify($row['product_desc']); ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="../../src/productserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
    <div class="input-group">
    <h1 class="page-title">Create User</h1>
	<form method="post" action="../../src/productserver.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">

             <div class="input-field">
                 <label>Product Code</label>
                 <input type="text" name="product_code" value="<?php echo $product_code; ?>">
             </div>
             <div class="input-field">
                <label>Product Name</label>
                <input type="text" name="product_name" value="<?php echo $product_name; ?>">
            </div>
            <div class="input-field">
                 <label>Product Img Name</label>
                 <input type="text" name="product_img_name" value="<?php echo $product_img_name; ?>">
             </div>
             <div class="input-field">
                 <label>Product Price</label>
                 <input type="text" name="price" value="<?php echo $price; ?>">
             </div>
             <div class="input-field">
                 <label>Product Description</label>
                 <textarea name="product_desc" rows="5" cols="70" style="margin-left:300px;margin-right:300px;align-items: center;
"><?php echo $product_desc; ?></textarea><br>
             </div>
             <div class="input-field">
             <?php if ($update == true): ?>
            	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
            <?php else: ?>
            	<button class="btn" type="submit" name="save" >Save</button>
             <?php endif ?>          
               </div>
         </form>
        </div>










</body>
</html>


<?php view('footer') ?>