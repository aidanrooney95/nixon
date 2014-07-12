<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">        

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'/>

		<title>Developer Test</title>
	
		<style type="text/css">
		body{
		font-family: 'Quicksand', sans-serif;
		background:#eee;
		}
		
		#container{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		width:1000px;
		background:#fff;
		}
		
		#logo{
		position:absolute;
		left:350px;
		width:300px;
		height:150px;
		background:url('images/logo.png') no-repeat top center;
		-webkit-background-size: contain;
		-moz-background-size: contain;
		-o-background-size: contain;
		background-size: contain;
		}
		
		#slideshow{
		position:absolute;
		top:160px;
		left:0px;
		width:960px;
		height:400px;
		}
		
		#slideshowLeft{
		position:absolute;
		left:20px;
		top:140px;
		width:60px;
		height:120px;
		cursor:pointer;
		z-index:5;
		}
		
		#slideshowRight{
		position:absolute;
		left:920px;
		top:140px;
		width:60px;
		height:120px;
		cursor:pointer;
		z-index:5;
		}
		
		#image0{
		position:absolute;
		top:0px;
		left:0px;
		height:400px;
		background:url('images/synth-cat-placeholder-960x400.jpg') no-repeat center center;
		z-index:1;
		}

		#image1{
		position:absolute;
		top:0px;
		left:0px;
		height:400px;
		background:url('images/nyan-cat-placeholder-960x400.jpg') no-repeat center center;
		z-index:2;
		}

		#image2{
		position:absolute;
		top:0px;
		left:0px;
		height:400px;
		background:url('images/grumpy-cat-placeholder-960x400.jpg') no-repeat center center;
		z-index:3;
		}
		
		#content{
		position:absolute;
		top:570px;
		left:100px;
		width:800px;
		}
		
		h1{
		font-family: 'Quicksand', sans-serif;
		text-align:center;
		font-size:18pt;
		padding-left:100px;
		padding-right:100px;
		padding-bottom:50px;
		border-bottom:solid;
		border-width:2px;
		border-color:#ff33ff;
		}
		
		h2{
		font-family: 'Comfortaa', cursive;font-family: 'Quicksand', sans-serif;
		text-align:center;
		font-size:25pt;
		padding-left:100px;
		padding-right:100px;
		padding-bottom:30px;
		padding-top:20px;
		color:#ff33ff;
		font-weight:900;
		}
		
		p{
		font-family: 'Quicksand', sans-serif;
		padding-left:100px;
		padding-right:100px;
		text-align:center;
		}
		
		#email{
		position:absolute;
		width:600px;
		left:100px;
		top:1400px;
		text-align:center;
		}
		
		#policy{
		font-size:15pt;
		font-family: 'Comfortaa', cursive;font-family: 'Quicksand', sans-serif;
		position:absolute;
		width:400px;
		height:30px;
		top:1810px;
		left:200px;
		text-align:center;
		color:#ff33ff;
		line-height:30px;
		cursor:pointer;
		}
		
		#collapse{
		position:relative;
		width:600px;
		height:100px;
		top:500px;
		text-align:center;
		padding-left:100px;
		padding-right:100px;
		}
		
		#contact{
		position:relative;
		width:1000px;
		margin-left:auto;
		margin-right:auto;
		height:330px;
		}
		
		
		a:link{
		color:#33cccc;
		text-decoration:none;
		}

		a:visited{
		color:#33aaaa;
		}

		a:active{
		color:#ffffff;
		text-decoration:none;
		}

		a:hover{
		color:#ff33ff;
		text-decoration:none;
		}
		</style>
		
		<script type="text/javascript">
		
		if(window.screen.width < 1000) {
			window.location.replace("http://www.aidanrooney.co.uk/nixon/mobile.php");
		}
	
	
		/*Slideshow tabs start*/
		
		function slideshowLeftHover() {
			document.getElementById('slideshowLeftImg').src="images/slideshowLeftHover.png";
		}
		
		function slideshowLeftOut() {
			document.getElementById('slideshowLeftImg').src="images/slideshowLeft.png";
		}
		
		function slideshowRightHover() {
			document.getElementById('slideshowRightImg').src="images/slideshowRightHover.png";		
		}
		
		function slideshowRightOut() {
			document.getElementById('slideshowRightImg').src="images/slideshowRight.png";
		}
		/*Slideshow tabs end*/
		
		/*Slideshow code start*/
		
		function slideshowRight() {
			
				if (document.getElementById('image0').style.width == "960px") {
						var currentImage = 0;
					} else {
						if (document.getElementById('image1').style.width == "960px") {
						var currentImage = 1;
						} else {
							if (document.getElementById('image2').style.width == "960px") {
							 var currentImage = 2;
							}
						}
					}
					
			
				if (currentImage == 0) {
					currentImage = currentImage + 1;
					zeroToOne();
				} else {
					if (currentImage == 1) {
					oneToTwo();
					currentImage = currentImage + 1;
						} else {
							if /*final image*/(currentImage == 2) {
							twoToZero();
							currentImage = 0;
								}
						}
					}
			}
		
		function zeroToOne() {
					// image1 div width for zeroToOne
					var imageOneWidth = document.getElementById('image1').style.width;
					var imageOneWidthNumber = imageOneWidth.split("px");
						if (imageOneWidthNumber[0] <= 959) {
							var imageOneNewWidth = parseInt(imageOneWidthNumber[0]) +10;
							var imageOneNewWidth = imageOneNewWidth+'px';
							document.getElementById('image1').style.width=imageOneNewWidth;
					}
					
					// image1 div pos for zeroToOne
					var imageOnePos = document.getElementById('image1').style.left;
					var imageOnePosNumber = imageOnePos.split("px");
						if (imageOnePosNumber[0] >= 21) {
							var imageOneNewPos = parseInt(imageOnePosNumber[0])-10;
							var imageOneNewPos = imageOneNewPos+'px';
							document.getElementById('image1').style.left=imageOneNewPos;
					}
					
					// image0 div width for zeroToOne
					var imageZeroWidth = document.getElementById('image0').style.width;
					var imageZeroWidthNumber = imageZeroWidth.split("px");
						if (imageZeroWidthNumber[0] >= 21) {
							var imageZeroNewWidth = parseInt(imageZeroWidthNumber[0]) -10;
							var imageZeroNewWidth = imageZeroNewWidth+'px';
							document.getElementById('image0').style.width=imageZeroNewWidth;
					}
									
					if ((document.getElementById('image1').style.left != "20px") || (document.getElementById('image1').style.width != "960px")) {
						setTimeout("zeroToOne()", 1);
							} else {
								var imageZeroWidth = document.getElementById('image0').style.width;
								var imageZeroWidthNumber = imageZeroWidth.split("px");
								var imageZeroNewWidth = 0;
								var imageZeroNewWidth = imageZeroNewWidth+'px';
								document.getElementById('image0').style.width=imageZeroNewWidth;
							
								var imageZeroPos = document.getElementById('image0').style.left;
								var imageZeroPosNumber = imageZeroPos.split("px");
								var imageZeroNewPos = 980;
								var imageZeroNewPos = imageZeroNewPos+'px';
								document.getElementById('image0').style.left=imageZeroNewPos;
								
							}
				}
				
		function oneToTwo() {
					// image2 div width for oneToTwo
					var imageTwoWidth = document.getElementById('image2').style.width;
					var imageTwoWidthNumber = imageTwoWidth.split("px");
						if (imageTwoWidthNumber[0] <= 959) {
							var imageTwoNewWidth = parseInt(imageTwoWidthNumber[0]) +10;
							var imageTwoNewWidth = imageTwoNewWidth+'px';
							document.getElementById('image2').style.width=imageTwoNewWidth;
					}
					
					// image2 div pos for oneToTwo
					var imageTwoPos = document.getElementById('image2').style.left;
					var imageTwoPosNumber = imageTwoPos.split("px");
						if (imageTwoPosNumber[0] >= 21) {
							var imageTwoNewPos = parseInt(imageTwoPosNumber[0])-10;
							var imageTwoNewPos = imageTwoNewPos+'px';
							document.getElementById('image2').style.left=imageTwoNewPos;
					
					// image1 div width for oneToTwo
					var imageOneWidth = document.getElementById('image1').style.width;
					var imageOneWidthNumber = imageOneWidth.split("px");
						if (imageOneWidthNumber[0] >= 21) {
							var imageOneNewWidth = parseInt(imageOneWidthNumber[0]) -10;
							var imageOneNewWidth = imageOneNewWidth+'px';
							document.getElementById('image1').style.width=imageOneNewWidth;
					}
					
						if ((document.getElementById('image2').style.left != "20px") || (document.getElementById('image2').style.width != "960px")) {
						setTimeout("oneToTwo()", 1);
							} else {
								var imageOneWidth = document.getElementById('image1').style.width;
								var imageOneWidthNumber = imageOneWidth.split("px");
								var imageOneNewWidth = 0;
								var imageOneNewWidth = imageOneNewWidth+'px';
								document.getElementById('image1').style.width=imageOneNewWidth;
							
								var imageOnePos = document.getElementById('image1').style.left;
								var imageOnePosNumber = imageOnePos.split("px");
								var imageOneNewPos = 980;
								var imageOneNewPos = imageOneNewPos+'px';
								document.getElementById('image1').style.left=imageOneNewPos;
								
							}
					}
				}
		
		function twoToZero() {
					// image0 div width for twoToZero
					var imageZeroWidth = document.getElementById('image0').style.width;
					var imageZeroWidthNumber = imageZeroWidth.split("px");
						if (imageZeroWidthNumber[0] <= 959) {
							var imageZeroNewWidth = parseInt(imageZeroWidthNumber[0]) +10;
							var imageZeroNewWidth = imageZeroNewWidth+'px';
							document.getElementById('image0').style.width=imageZeroNewWidth;
					}
					
					// image0 div pos for twoToZero
					var imageZeroPos = document.getElementById('image0').style.left;
					var imageZeroPosNumber = imageZeroPos.split("px");
						if (imageZeroPosNumber[0] >= 21) {
							var imageZeroNewPos = parseInt(imageZeroPosNumber[0])-10;
							var imageZeroNewPos = imageZeroNewPos+'px';
							document.getElementById('image0').style.left=imageZeroNewPos;
					
					// image2 div width for twoToZero
					var imageTwoWidth = document.getElementById('image2').style.width;
					var imageTwoWidthNumber = imageTwoWidth.split("px");
						if (imageTwoWidthNumber[0] >= 21) {
							var imageTwoNewWidth = parseInt(imageTwoWidthNumber[0]) -10;
							var imageTwoNewWidth = imageTwoNewWidth+'px';
							document.getElementById('image2').style.width=imageTwoNewWidth;
					}
					
						if ((document.getElementById('image0').style.left != "20px") || (document.getElementById('image0').style.width != "960px")) {
						setTimeout("twoToZero()", 1);
							} else {
								var imageTwoWidth = document.getElementById('image2').style.width;
								var imageTwoWidthNumber = imageTwoWidth.split("px");
								var imageTwoNewWidth = 0;
								var imageTwoNewWidth = imageTwoNewWidth+'px';
								document.getElementById('image2').style.width=imageTwoNewWidth;
							
								var imageTwoPos = document.getElementById('image2').style.left;
								var imageTwoPosNumber = imageTwoPos.split("px");
								var imageTwoNewPos = 980;
								var imageTwoNewPos = imageTwoNewPos+'px';
								document.getElementById('image2').style.left=imageTwoNewPos;
								
							}
					}
				}
			
			
			function collapse() {
				if (document.getElementById('collapse').style.display=="none") {
				document.getElementById('collapse').style.display="block";
				document.getElementById('content').style.height="1970px";
				document.getElementById('container').style.height="2550px";
				} else {
				document.getElementById('collapse').style.display="none";
				document.getElementById('content').style.height="1850px";
				document.getElementById('container').style.height="2450px";
				}			
			}
		</script>
	</head>

	<body>
	
	<div id="container" style="height:2450px;">
		<div id="logo"></div>
		
		<div id="slideshow">
			<div id="image0" style="left:20px;width:960px;"></div>
			<div id="image1" style="left:980px;width:0px;"></div>
			<div id="image2" style="left:980px;width:0px;"></div>
			
			<div id="slideshowLeft" onmouseover="slideshowLeftHover()" onmouseout="slideshowLeftOut()"><img id="slideshowLeftImg" src="images/slideshowLeft.png" alt="slideshow left tab"/></div>
			<div id="slideshowRight" onmouseover="slideshowRightHover()" onmouseout="slideshowRightOut()" onmouseup="slideshowRight();"><img id="slideshowRightImg" src="images/slideshowRight.png" alt="slideshow right tab"/></div>
		</div>
		
		<div id="content" style="height:1850px;">
			<h1>
			Cupcake ipsum dolor sit amet lemon drops dessert. Powder cupcake I love toffee pastry lemon drops.
			Dragée gummies sesame snaps cotton candy.
			</h1>
			
			<h2>
			KITTEH IPSUM
			</h2>
			
			<p style="border-bottom:solid;border-width:2px;border-color:#ff33ff;padding-bottom:50px;">
			Gingerbread cookie candy toffee caramels I love carrot cake. Chupa chups applicake brownie oat cake pie. Donut chocolate
			bar caramels chocolate chupa chups dessert. Liquorice ice cream cookie jujubes chocolate bar I love. Cotton candy sesame
			snaps pudding tart. Bonbon dessert gummi bears bear claw chocolate chocolate chocolate cake macaroon chocolate bar. Bear
			claw wafer I love chocolate cake macaroon. Marzipan muffin halvah I love cupcake sugar plum cheesecake. Apple pie wafer bear
			claw donut bear claw dragée dessert. Soufflé chocolate sesame snaps jelly beans. Chocolate cake tart chocolate bar I love I
			love fruitcake carrot cake jelly-o I love. Ice cream pudding jelly beans wafer pie gummies chupa chups. Apple pie wafer jujubes
			danish icing marzipan danish soufflé.
			<br/>
			<br/>
			Candy canes brownie chocolate I love pie cotton candy marzipan tart soufflé. Tootsie roll sweet roll unerdwear.com candy.
			Gummi bears marshmallow fruitcake I love jelly-o carrot cake I love. Chupa chups carrot cake wafer dragée oat cake lemon
			drops liquorice tootsie roll. Ice cream donut applicake cookie tootsie roll. Marzipan bonbon sugar plum chupa chups bonbon
			cupcake. Caramels pie I love cake I love chupa chups croissant. Jelly-o I love cupcake. Tootsie roll apple pie jelly-o cupcake
			cookie ice cream brownie marzipan jelly-o. Dragée dessert lollipop. Candy pudding sesame snaps I love. Powder macaroon
			caramels jelly beans marshmallow. Cotton candy I love sweet roll carrot cake lollipop.
			<br/>
			<br/>
			<img src="images/grumpy-cat-placeholder-340x240.jpg" alt="grumpy cat" style="margin:auto;display:block;"/>
			<br/>
			Brownie carrot cake marzipan. Sugar plum dessert dragée I love pudding icing lemon drops oat cake. Pie I love unerdwear.com
			donut. Macaroon candy canes chupa chups oat cake sugar plum jelly unerdwear.com. Muffin jelly beans unerdwear.com halvah.
			Cheesecake muffin tootsie roll applicake I love carrot cake halvah. Dragée pie tart. Sugar plum jujubes cookie candy apple
			pie. Gummies macaroon ice cream muffin I love topping powder powder. Powder cupcake gingerbread liquorice donut.
			</p>
			
			<p style="padding-top:30px;">
			Bonbon dessert gummi bears bear claw chocolate chocolate chocolate cake macaroon chocolate bar. Bear
			claw wafer I love chocolate cake macaroon. Marzipan muffin halvah I love cupcake sugar plum cheesecake. Apple pie wafer bear
			claw donut bear claw dragée dessert.
			</p>
			
			<div id="email">
			<?php
			// display form if user has not clicked submit
			if (!isset($_POST["submit"])) {
				?>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				Email address&#42;:<br/>
				<input type="text" name="from"/><br/>
				Subject&#42;:<br/>
				<input type="text" name="subject"/><br/>
				Message&#42;:<br/>
				<textarea rows="10" cols="50" name="message" style="max-width:500px;max-height:150px;"></textarea><br/><br/>
				<input type="submit" style="cursor:pointer;text-align:left;width:200px;height:50px;border:10px solid #33aaaa;background:#33aaaa url('images/nyan-icon.png') no-repeat top right;background-size:contain;" name="submit" value="Submit Feedback"/>
				</form>
				<p>
				&#42;Indicates required field.
				</p>
				<?php 
			} else {    // the user has submitted the form
			// Check if the "from" input field is filled out
			if (isset($_POST["from"])) {
				$from = $_POST["from"]; // sender
				$subject = $_POST["subject"];
				$message = $_POST["message"];
				// message lines should not exceed 70 characters (PHP rule), so wrap it
				$message = wordwrap($message, 70);
				// send mail
				mail("aidanrooney95@me.com",$subject,$message,"From: $from\n");
				echo "Thank you for sending us feedback";
				}
			}
			?>
			</div>
			
			
			<div id="policy" onmouseup="collapse();">
			View our privacy policy
			</div>
			
			<div id="collapse" style="display:none;">
			Chupa chups carrot cake wafer dragée oat cake lemon
			drops liquorice tootsie roll. Ice cream donut applicake cookie tootsie roll. Marzipan bonbon sugar plum chupa chups bonbon
			cupcake. Caramels pie I love cake I love chupa chups croissant.
			</div>
		</div>
	
	
	</div>
	
	<div id="contact">
		<h2>
		Contact Kitteh
		</h2>
		<p>
		<span style="font-size:20pt;font-weight:900;">Grumpy Cat</span>
		<br/>
		Sesame snaps, Halvah tart, Cheesecake, TR27 4HH
		<br/><br/>
		<img src="images/email-icon.png" width="23px" height="16px" alt="email icon"/><span style="font-size:20pt;font-weight:700;"> Email </span><a href="mailto:cupcake@nyancat.com" style="font-size:15pt;">cupcake@nyancat.com</a>
		<br/><br/>
		<img src="images/phone-icon.png" width="14px" height="20px" alt="phone icon"/><span style="font-size:20pt;font-weight:700;"> Telephone </span>+44 &#40;0&#41;1736 758 600
		<br/><br/>
		Kitten Meow &#40;Registered Address&#41; Foundry Square, Hayle, Cornwall, TR27 4HH
		</p>
	</div>
	
	</body>
</html>
