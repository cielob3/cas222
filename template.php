<!DOCTYPE html>
<html>
<head>
<title>Template</title>

	
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="style/template.css">
	<link rel="stylesheet" type="text/css" href="style/menu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script src="style/menu.js"></script>
	


	<script type="text/javascript">
	jQuery(function($){
    	     $( '.menu-btn' ).click(function(){
    	     $('.responsive-menu').toggleClass('expand')
    	     })
        })
</script>
	
	
</head>
	
<body>
<div id="wrap">	
	

<div class="mobile-nav">
     <div class="menu-btn" id="menu-btn">
 <div></div>
 <span></span>
 <span></span>
 <span></span>
     </div>
 
     <div class="responsive-menu">
        <ul>
           <li>1. Link One</li>
           <li>2. Link Two</li>
        </ul>
     </div>
</div>
	
	<header>
	<h1><span id="bold">Ace</span> in the Hole</h1>
	</header>
	
	<hr>
	
<article id="feed"> 

	</article>
	

<main>

		<div class="image-placeholder1">
	</div>
	
	<h2>This is a Heading</h2>
	<p id="p1">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at porta diam. Sed condimentum imperdiet tempus. Donec rutrum urna id arcu lobortis sodales. Mauris maximus luctus sagittis. Maecenas nibh turpis, bibendum at rutrum nec, imperdiet a ligula.Donec quam lectus, hendrerit et enim interdum, ornare egestas dui. 
	</p>
	
	
	<div class="image-placeholder2">
	</div>
		<h3>Another Heading</h3>
	<p id="p2">
		
		Sed id lectus id sem imperdiet gravida quis blandit turpis. Proin maximus hendrerit est, a ullamcorper lacus aliquam et. Etiam congue sodales nibh, ut rutrum ligula tincidunt sed. Donec volutpat enim non mauris ullamcorper, cursus volutpat nunc lacinia. Duis non laoreet tellus, eu porttitor neque.
	</p>

</main>
		
<footer>
	<p>Footer Text Here!</p>
	<p id="p3">555-555-5555</p>
	<?php

	echo "<p> Today is " . date("Y.m.d") . "<br></p>";

	?>
	</footer>

</div>
</body>



</html>
