<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kuzines Timeline</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  	<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>  
	  	<!-- <link type="text/css" rel="stylesheet" href="css/formstyle2.css"> -->
	  	<link type="text/css" rel="stylesheet" href="css/formstyle.css">
	  	<link type="text/css" rel="stylesheet" href="css/style.css">
	  	<script type="text/javascript" src = "js/form.js"></script>
	  	<script type="text/javascript" src = "js/clock.js"></script>
	  	<script type="text/javascript" src = "js/birthdate.js"></script>
	    <script type="text/javascript" src = "js/onchange.js"></script>	
	</head>
	<body>
		<?php
        	$fName = basename("index.php");
        	include("header.php");
        ?>
        <br>
	    <div class="aboutHeader">
	        <div class = "Kuzines">
	        	Dish Review Timeline
	        </div>
		</div>
		<br>
		<div class="article-body col-xs-10 col-xs-offset-1">
			<?php
			if(file_exists("review.csv")) {
				$row = 0;
				$handle = fopen("review.csv", "r");
				$headers = array();
				$output = array();
				while (!feof($handle)) {
					while (($data = fgetcsv($handle, 500, ",")) !== FALSE)	{
						if ($row == 0) {
							$headers = $data;
							$headers[3] = "image_url";
						}
						else {
							$output[] = array_combine($headers, $data);
						}
						$row++;
					}
				}

				$output = array_reverse($output);

				foreach($output as $data)	{
				?>
				<div class="timelinecontainer">
						<div class="reviewtitles"><?= htmlspecialchars($data['title'])?></div>
						<div class="reviewcontents"><?= htmlspecialchars($data['contents'])?></div>
						<div><img class="img-responsive timelinephotos" src="uploads/<?= $data['image_url']?>"></div>
				</div>
				<?php
				}
			}
			else {
				echo "There is currently no review available";
			}
			?>
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