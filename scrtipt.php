<?php


function writeHeader(){
    $header = '<div id="header-main"><div id="medialinks"><a href="#"><img src="images/facebook.png" alt="Visit out Facebook page"></a><a href="#"><img src="images/instagram.png" alt="Visit our Instagram page"></a><a href="#"><img src="images/pinterest.png" alt="Visit our Pinterest Board"></a></div><div id="company-main">Mahayana Living</div><div id="tagline-main">We help build healthy lifestyles.</div></div><nav><ul><li><a href="index.html">Home</a></li><li><a href="about.html">About Us</a></li><li><a href="blog.html">Recipes</a></li><li><a href="store.html">Shop</a></li><li><a href="resources.html">Additional Resources</a></li><li><a href="contact.html">Contact Us</a></li></ul></nav>';
    
    echo $header;
}

function writeFooter(){
    //$modified = document.lastModified;
    
    $footer = '<ul id="nav"><li><a href="about.html">About Us</a></li><li><a href="blog.html">Recipes</a></li><li><a href="store.html">Shop</a></li><li><a href="resources.html">Additional Resources</a></li><li><a href="contact.html">Contact Us</a></li></ul><div id="contactinfo"><blockquote><span style="font-weight: bold; font-size: 1.2em;">Mahayana Living</span><br>123 Main St.<br>Loveland, CO 80537<br><a href="mailto:mahayanaliving@zendeavors.net">mahayanaliving@zendeavors.net</a></blockquote></div><div id="copyright">Copyright &copy;2019 by Mahayana Living </div><div id="updated">Last Updated - </div>';
    
    //document.getElementById("foot").value = footer;
    
    echo $footer;
}

//writeHeader();
//writeFooter();

/*
function loadListeners(){
    
//writeHeader();
writeFooter();
    
}

if(window.addEventListener){
    window.addEventListener("onload", loadListeners, false);
}
*/


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home | Mahayana Living</title>
</head>

<body>
    <?php writeHeader(); ?>

	<main>
		<div class="box">
			<figure id="left">
				<a href="about.html">
					<img src="images/wellness.jpg" alt="Wellness">
				</a>
				<figcaption>
					Mahayana Living is intended to be a resources for your healthy lifestyle. We focus on wellness products such as essential oils, recipes for healing, and personal care items such as bath salts, lotions, and sugar scrubs.
				</figcaption>
			</figure>
			<figure>
				<a href="#"><img src="images/lavender-bounty.jpg" alt="Home made lavender spa products"></a>
				<figcaption>We specialize in essential oils and blends, but also offer a small selection of personal care products made with the highest quality ingredients, focusing on organics whenever possible.</figcaption>
			</figure>
			<figure>
				<a href="#"><img src="images/recipes.jpg" alt="Assortment of herbs and materials to make wellness products"></a>
				<figcaption>We strive to make our site a resource for individuals and families interested in including herbs and essential oils in their wellness endeavors. We regularly publish new recipes for your use. </figcaption>
			</figure>		
			<figure>
				<a href="https://ccc-appview.edupe.io/~3060/MahayanaGardens"><img src="images/logo.jpg" alt="Mahayana Gardens - Logo for our Sister Site"></a>
				<figcaption>We parter with our sister site, <a href="https://ccc-appview.edupe.io/~3060/MahayanaGardens">Mahayana Gardens</a>, to increase awareness of herbs in all their forms as a natural supplement and replacement for many standard modern rememdies.	</figcaption>	
			</figure>
			<figure>
				<a href="#"><img src="images/aboutus.jpg" alt="Multigenerational hands holding dirt with a sprout"></a>
				<figcaption>We hope that our site and products will suit your needs, but if you need something not listed here, or wish to find out more information about us, we welcome your questions and comments!</figcaption>
			</figure>
			<figure>
				<a href="#"><img src="images/running-girl.jpg" alt="Young girl running down stone steps and out a wooden gate"></a>
				<figcaption>You can also check out our <a href="#">Additional Resources</a> to connect with other great resources around the web! </figcaption>
			</figure>
		</div>
	</main>

	<footer>
		<?php writeFooter(); ?>
	</footer>

</body>
</html>