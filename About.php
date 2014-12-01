<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kuzines Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  	<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>  
	  	<!-- <link type="text/css" rel="stylesheet" href="css/formstyle2.css"> -->
	  	<link type="text/css" rel="stylesheet" href="css/formstyle.css">

	  	<script type="text/javascript" src = "js/form.js"></script>
	  	<script type="text/javascript" src = "js/clock.js"></script>
	  	<script type="text/javascript" src = "js/birthdate.js"></script>
	    <script type="text/javascript" src = "js/onchange.js"></script>	
	</head>
	<body>
		<?php
        	$fName = basename("About.php");
        	include("header.php");
        ?>
        <br>

	    <div class="aboutHeader">
	        <div class = "Kuzines">
	        	About Kuzines
	        </div>
		</div>
		<br>
		<div class="article-body col-xs-10 col-xs-offset-1">
			<div class="article-section1">
				<p>
					Kuzines team is trying to create a social, mobile platform for searching and sharing culinary experiences. The application will take form of users' online journal of micro-blogs and photos of culinary experiences, which is shared within a social network of friends and integrates menus from restaurants.
				</p>
			</div>
			<div class="article-section2">
				<p>
					The application capitalizes on the growing trend of documenting dining experiences through pictures and comments in order to curate a database of pictures and reviews. This content base will focus heavily on dishes relative to other aspects of the dining experience. Reviews and pictures from a user’s friendship network are tagged according to the actual menus of restaurants and food establishments. In addition, users will be able to indicate which restaurants they like and which are their favorite dishes at a particular restaurant. Users will improve other users' culinary experience by making dish pictures and dish-focused reviews easily accessible to their friend network. At the same time, users will improve their present and future culinary experiences by learning from the dining recommendations of their friends and the reviews and photos of dishes posted by other users. This product targets young smart phone users (high school and college students; young professionals) who are avid social media users (use Yelp and other food review sites for finding what they want to eat), and who desire to document their culinary adventure.
				</p>
			</div>
		</div>


		<div class="col-xs-12">
			<hr>
			<div class="follow col-md-1.5 col-md-offset-1">
				<p>
					Follow Us:
				</p>
				<br>
			</div>
		</div>


		<div class="logo">
			<div class="column col-xs-12">
				<div class="SocialMediaLogo col-md-3 col-md-offset-2">
					<a href="https://www.facebook.com/kuzinesapp?ref=br_tf" ><img src="image/facebook29.png" alt="Facebook logo"></a>
					<a href="https://www.facebook.com/kuzinesapp?ref=br_tf" >Facebook</a>
				</div>
				
				<div class="SocialMediaLogo col-md-3">
					<a href="https://www.linkedin.com/company/3287243?trk=tyah&trkInfo=tarId%3A1417193425999%2Ctas%3Akuzines%2Cidx%3A1-1-1" ><img src="image/linkedin12.png" alt="LinkedIn logo"></a>
					<a href="https://www.linkedin.com/company/3287243?trk=tyah&trkInfo=tarId%3A1417193425999%2Ctas%3Akuzines%2Cidx%3A1-1-1" >LinkedIn</a>
				</div>

				<div class="SocialMediaLogo col-md-3">
					<a href="https://twitter.com/KuzinesApp" ><img src="image/social19.png" alt="Twitter logo"></a>
					<a href="https://twitter.com/KuzinesApp" >Twitter</a>
				</div>
       		</div>
        </div>



	</body>

	<footer>
        <?php
        include("footer.php");
        ?>
	</footer>
</html>