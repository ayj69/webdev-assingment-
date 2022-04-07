<?php

require __DIR__ . '../../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Home']) ?>
<?php view('nav') ?>

			<h1>WISHLIST PAGE</h1>
			<p>
			Add your favourite watch into your wishlist. :)
			</p>
			<br></br>
			<table class=cart>
			<tr>
				<th>Product</th>
				<th>Product Name</th>
				<th>Unit Price</th>
				<th>Description</th>
			</tr>
			<tr>
				<td>image1</td>
				<td>name1</td>
				<td>RM</td>
				<td>......</td>
				<td>delete</td>
			</tr>
			<td>image2</td>
				<td>name2</td>
				<td>RM</td>
				<td>......</td>
				<td>delete</td>
			<tr>
				<td>image3</td>
				<td>name3</td>
				<td>RM</td>
				<td>......</td>
				<td>delete</td>
			</tr>
			<tr>
				<td>image4</td>
				<td>name1</td>
				<td>RM</td>
				<td>......</td>
				<td>delete</td>
			</tr>
			<tr>
				<td>image5</td>
				<td>name5</td>
				<td>RM</td>
				<td>......</td>
				<td>delete</td>
			</tr>
			</table>
            <?php view('footer') ?>





