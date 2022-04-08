<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Home']) ?>
<a id="Dream"></a>
<?php view('nav');?>




<h1 class="page-title">HomePage</h1>



<section class="top-row">
    <div class="top-left-column">
      <h2 class="page-title">Our Dream. Simplified</h2>
      <a id="Highlight"></a>
       <p>CatWatch has been pursuing a dream, to create a world where cat lovers from around the world can buy our  cat-themed luxury watches at the click of a button. To that end 
         we have spared no expense to make that dream come true. We have assembled and assorted the worlds finest watchsmiths and artisans from various parts of the globe, all with the purpose of creating masturful works of art. </p>
      <p>As such, we have spent millions on procuring only the finest gears and parts for our distinguished watchsmiths. The materials we use from the miniscule Adamantium gear, to the crocodile leather strap, all seamlessly come
        together to create our Magnum Opus. 
      </p>
      <a href="../company/index.php" ><h3 class="page-title">Discover More..</h3></a>
      

  
    </div>
    <div class="top-right-column">
    <img    src="Watch.jpg">
  
    </div>
    
</section>


<div class="between">

<div class="slideshow-container">
<a id="service"></a>
<div class="mySlides">
  <div class="numbertext">1 / 4</div>
  <img src="catof.png" height="450px" width="900px">
  <div class="text2"> Our Offices Are Very Lively With Our Feline Friends</div>
</div>
<div class="mySlides">
  <div class="numbertext">2 / 4</div>
  <img src="Watchsmith.jpg"height="450px" width="900px">
  <div class="text2">Our Master Watchsmiths Spare No Expense For Their Craft</div>
</div>
<div class="mySlides">
  <div class="numbertext">3 / 4</div>
  <img src="wear.jpg" height="450px" width="800px">
  <div class="text2">Even Cats Look Good Sporting Our Collection</div>
</div>
<div class="mySlides">
  <div class="numbertext">4 / 4</div>
  <img src="3watch.jpg" height="450px" width="900px">
  <div class="text2"> The Upcoming Fall Collection Titled: Nostradamus Trios </div>
  </div>	
 
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


    
    
   

    </div>
  


<section class="bottom-row">
<div class="bottom-left-column">
    <img    src="cateyecrop.jpg">
    </div>
    <div class="bottom-right-column">
    <h2 class="page-title">You Want It. You Got It</h2>
    <br>
       <p>Here at CatWatch we strive to provide out customers with a dazzling variety of options. We do not want to limit our customers, that is why
         we have assorted a fine selection timepieces built from various materials and available in a plethora of colors and varieties. Our Gold plated, Diamond engraved, Adamantium watches 
         provid all the luxury you could possible require.
       </p>
       <br>
       <a href="../product/index.php" ><h2 class="page-title">Browse  Our Options..</h2></a>
      
      
    </div>
    
  </section>
  <script>
				let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activedot", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " activedot";
}

			</script>
<?php view('footer') ?>