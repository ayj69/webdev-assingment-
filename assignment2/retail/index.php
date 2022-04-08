<?php

require __DIR__ . '../../src/bootstrap.php';
?>

<?php view('header', ['title' => 'retail']) ?>
<?php view('nav') ?>

<h1 class="page-title" id="Map">Retail & Service Center Locations</h1>
<div class="Map" >
		
			
			<div  id="map" style="height:700px;width:100%;"></div>
			<script>
				function currentMap() {
					var mapOpt = {
						zoom: 7,
						center: {lat: 4.210484, lng: 101.975766}
					}
					
					var map = new google.maps.Map(document.getElementById('map'), mapOpt);
				
					addMarker({
						coords:{lat: 3.085717, lng: 101.424870},
						content:"<h2>Main Outlet</h2>"
					});
					addMarker({
						coords:{lat: 5.438176, lng: 100.309822},
						content:"<h2>Branch Outlet</h2>"
					});
					addMarker({
						coords:{lat: 4.064723, lng: 101.424930},
						iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
						content:"<h2>Service Center</h2>"
					});
				
					function addMarker(props){
						var marker = new google.maps.Marker({
							position:props.coords,
							map:map,
							icon:props.iconImage
						});
					
					
						if(props.content){
							var infoWindow = new google.maps.InfoWindow({
								content:props.content
							});
						
							marker.addListener("click", function(){
								infoWindow.open(map, marker);
							});
						}
					}
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRRKSX0EBo3kE-mmIbbpJoOr59LutgBpA&callback=currentMap"></script>
		</div>
        <h1 class="page-title" id="Faq">FAQ</h1>

<div class="faq-container" >


<p>1.What is CatWatch?</p>
<p>CatWatch is a luxury watch manufacturer that creates high quality cat 
themed timepieces.</p>

<p>2.Do I need an account to place an order?</p>
<p>Yes, you will require an account to place order and check out but, you 
are allowed to browse our website without an account.</p>

<p>3.How do I purchase a product?</p>
<p>You will be able to purchase our products by adding them to your cart
in the products page and checking out. You will then be able to buy it via PayPal.</p>

<p>4.Why do you only provide PayPal as an option of payment?</p>
<p>PayPal is a very reliable online payment system and has been serving our 
transactions for over 15 years. For now, we have no plans of implementing other payment methods.</p>

<p>5.Are the products being advertised and high-quality?</p>
<p>The products we sell are the ressult of years of designing,procuring and manufacturing. We 
use the finest materials and employ the most skilled watchsmiths
to create our products.</p>

<p>6.How long does delivery take if I'm from overseas?</p>
<p>We have the capability of delivering across the world however, delivering 
outside the country takes slightly longer than within. Delivery in peninsular and east Malaysia takes
4-5 business weeks whereas, delivery outside the country will require around 6-7 business weeks.</p>

<p>7.Why sell cat-themed watches?</p>
<p>Our founder John C.Atlover had keenly observed that the market did not cater to watch enthusiasts who
were also fond of felines. Seizing this oppurtunity, he founded the CatWatch company with the goal of solving this issue and 
now we are the leading watch making brand in the world.</p>

</div>


<?php view('footer') ?>