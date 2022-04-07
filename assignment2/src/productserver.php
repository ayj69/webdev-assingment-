<?php

require __DIR__ . '/bootstrap.php';

?>

<?php 
	
	// initialize variables
    $product_code = "";
	$product_name = "";
    $product_img_name = "";
    $product_desc = "";
    $price = "";
	$id = 0;
	$update = false;

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
	
		$sql = 'DELETE FROM products WHERE id=:id';
	
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
	
	
		$statement->execute();
		$_SESSION['message'] = "Product deleted!"; 
	
		redirect_to('/assignment2/admin/productadmin/');
	}
	
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$product_code = $_POST['product_code'];
		$product_name = $_POST['product_name'];
        $product_img_name = $_POST['product_img_name'];
        $product_desc = $_POST['product_desc'];
        $price = $_POST['price'];

		$sql = 'UPDATE products SET product_code = :product_code ,product_name =:product_name,
        product_img_name =:product_img_name,product_desc =:product_desc ,price =:price  WHERE id=:id';
		$statement = db()->prepare($sql);
	
		$statement->bindValue(':product_code', $product_code, PDO::PARAM_STR);
		$statement->bindValue(':product_name', $product_name, PDO::PARAM_STR);
        $statement->bindValue(':product_img_name', $product_img_name, PDO::PARAM_STR);
        $statement->bindValue(':product_desc', $product_desc, PDO::PARAM_STR);
        $statement->bindValue(':price', $price, PDO::PARAM_INT);
		$statement->bindValue(':id', $id, PDO::PARAM_INT);
        
		$statement->execute();
	
	
	
		$_SESSION['message'] = "Product updated!"; 
		redirect_to('/assignment2/admin/productadmin/');
	}
	if (isset($_POST['save'])) {
	
		$id = $_POST['id'];
		$product_code = $_POST['product_code'];
		$product_name = $_POST['product_name'];
        $product_img_name = $_POST['product_img_name'];
        $product_desc = $_POST['product_desc'];
        $price = $_POST['price'];
	

        $sql = 'INSERT INTO products(product_code, product_name, product_img_name, product_desc,price)
            VALUES(:product_code, :product_name, :product_img_name, :product_desc,:price)';

        $statement = db()->prepare($sql);

        $statement->bindValue(':product_code', $product_code, PDO::PARAM_STR);
		$statement->bindValue(':product_name', $product_name, PDO::PARAM_STR);
        $statement->bindValue(':product_img_name', $product_img_name, PDO::PARAM_STR);
        $statement->bindValue(':product_desc', $product_desc, PDO::PARAM_STR);
        $statement->bindValue(':price', $price, PDO::PARAM_INT);


        $statement->execute();


	
		$_SESSION['message'] = "Product created"; 
		redirect_to('/assignment2/admin/productadmin/');
	}
	
// ...