<?php session_start();
// print_r($_SESSION)?>
<?php  require 'ingridient/adddata.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
		<link rel="stylesheet" href="css/unslider.css">
        <link rel="stylesheet" href="css/unslider-dots.css">
        <script>try{Typekit.load();}catch(e){}</script>
   
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
	<title>About</title>
	<style>
		.reading-area{text-align:center; padding:0 10% !important; }
		.reading-area h2{font-size:24px; color:#000000; font-weight:bold;}
		.reading-area p{font-size:16px; color:#232323; text-align:justify;}
		.bg-1{float:left;width:30%; margin-right:2%;height:200px;}
		.bg-11{background: url('../image/111.jpg') !important;width:91%;height: 400px;}
.bg-2{float:left;width:30%; margin-right:2%; background: url('../image/11.jpg') !important;}
.bg-3{float:left;width:30%; margin-right:2%; background: url('../image/11.jpg') !important;}
		</style>
</head>




<div class="container">
<?php require 'index.php';?>
</div>
<div class="container-fluid  banner">
			<ul>
				<li style="background-image: url('image/sunset.jpg');">
					<div class="inner">
						<h1>The jQuery slider that just slides.</h1>
						<p>No fancy effects or unnecessary markup, and it’s less than 3kb.</p>

					</div>
				</li>

				<li style="background: url('image/wood.jpg');">
					<div class="inner">
						<h1>Fluid, flexible, fantastically minimal.</h1>
						<p>Use any HTML in your slides, extend with CSS. You have full control.</p>

					</div>
				</li>

				<li style="background-image: url('image/subway.jpg');">
					<div class="inner">
						<h1>Open-source.</h1>
						<p>Everything to do with Unslider is hosted on GitHub.</p>

					</div>
				</li>

				<li style="background-image: url('image/shop.jpg');">
					<div class="inner">
						<h1>Uh, that’s about it.</h1>
						<p>I just wanted to show you another slide.</p>

						<a class="btn" href="#download">Download</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="container reading-area">
			<h2>Thank you for reading</h2>
			<p>Ipsum dolor sit amet consectetur adipiscing elit. Enim sit amet venenatis urna cursus eget nunc scelerisque. In hac habitasse platea dictumst. Auctor neque vitae tempus quam pellentesque. Tristique sollicitudin nibh sit amet. Ut porttitor leo a diam sollicitudin. Dolor morbi non arcu risus quis varius. Urna porttitor rhoncus dolor purus non enim. In nulla posuere sollicitudin aliquam ultrices.</p>
			<p>Metus vulputate eu scelerisque felis imperdiet proin fermentum. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Cursus sit amet dictum sit. Purus sit amet luctus venenatis lectus magna</p>
			<p>Do you have questions about recipes? Wanna work together? Feel free to write to me for all inquires!</p>
		</div>
		
        
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/jquery.event.move@1.3.6/js/jquery.event.move.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery.event.swipe@0.5.4/js/jquery.event.swipe.min.js"></script>

		<script src="js/unslider-min.js"></script>
		<script>
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}

			$('.banner').unslider({
				autoplay: true
			});

			//  Find any element starting with a # in the URL
			//  And listen to any click events it fires
			$('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));

				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}

				//  Don't let them visit the url, we'll scroll you there
				return false;
			});

		</script>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

   
    
</body>
</html>    
<?php
        require_once('footer.php');
        ?>