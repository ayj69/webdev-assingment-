<a id="Top">	<div class=navbar></a>
			<div class=navlogo>
			<a href="/assignment2/home"><img width=100px;height=100px;  src="/assignment2/src/inc/image/placeholdercat.png"></a>
			</div>
			<div class=navname>
				<h1>CatWatch</h1>
			</div>
			<div class=navitem>
			<ul>
					<a href="/assignment2/home"><li >Home<div class="nav_item_bottom"></div></li></a>
					<a href="/assignment2/product" ><li>Product<div class="nav_item_bottom"></div></li></a>
					<a href="/assignment2/company"><li>Company<div class="nav_item_bottom"></div></li></a>
					<a href="/assignment2/retail"><li>Retail & Service<div class="nav_item_bottom"></div></li></a>
					<a href="/assignment2/product/view_cart.php"><li>Wishlist<div class="nav_item_bottom"></div></li></a>
					<?php
						if(is_user_admin()){
							echo "<a href='/assignment2/admin'><li>Admin<div class='nav_item_bottom'></div></li></a>";
						}
						if(is_user_logged_in()){
							echo "<a href='/assignment2/logout'><li>Log Out<div class='nav_item_bottom'></div></li></a>";
						}else{
							echo "<a href='/assignment2/login'><li>Login<div class='nav_item_bottom'></div></li></a>";
						}


					?>



				</ul>
			</div>
		</div>
		<div class=navhidden></div>


