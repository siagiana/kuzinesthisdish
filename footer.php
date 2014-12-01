<footer>
	<div class = "col-xs-5 col-xs-offset-4 text-center">
		<script type="text/javascript">
			new Date().getTime();
		</script>
		<script type="text/javascript">
        	window.onload=function(){
        	GetClock();
        	setInterval(GetClock,1000);
         	}
    	</script>
		<div id="clockbox"></div>

		<?php
		$array = array(
    	"Page1" => filemtime("form.php"),
    	"Page2" => filemtime("About.php"),
    	// "Page3" => filemtime("header.php"),
    	// "Page4" => filemtime("footer.php"),
    	// "Page5" => filemtime("projects.php"),
    	// "Page6" => filemtime("css/AboutMe.css"),
    	// "Page7" => filemtime("css/Home.css")
		);

		$maxtimefilename = max($array);
		date_default_timezone_set("America/New_York");
		echo "&copy;" .date("Y", $maxtimefilename). " Kuzines | Last modified: " . date ("F d Y H:i:s.", getlastmod());
		?>

	</div>
</footer>

