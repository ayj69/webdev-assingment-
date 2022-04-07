<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Home']) ?>
<?php view('nav') ?>


<p>

<h1 class="page-title">HomePage</h1>


<section class="top-row">
    <div class="top-left-column">
       <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
      <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  
    </div>
    <div class="top-right-column">
    <img    src="london1.jpg">
  
    </div>
</section>



<div class="between">
<div class="row">
    <div class="column">
      <div class="content">
        <button type="button">Click Me!</button></div>
    </div>
  
    <div class="column">
      <div class="content">
        <h3>Content 1</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>

    <div class="column">
        <div class="content">
          <h3>Content 2</h3>
          <p>Some text</p>
          <p>Some text</p>
        </div>
      </div>
    
    <div class="column">
      <div class="content">
        <h3>Content 3</h3>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
    
    <div class="column">
      <div class="content">
        <button type="button">Click Me!</button></div>
      </div>
    </div>
  </div>
</div>

<section class="bottom-row">
<div class="bottom-left-column">
    <img    src="london2.jpg">
    </div>
    <div class="bottom-right-column">
       <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
      <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
      
    </div>
    
  </section>
<?php view('footer') ?>