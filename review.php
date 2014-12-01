<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <title>Kuzines Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
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
        $fName = basename("review.php");
        include("header.php");
      ?>

      <form action="upload.php" method="post" enctype="multipart/form-data">
      	<table>
        		<tr>
         			<td>Title</td>
          		<td><label for="title"></label>
      				<input type="text" id="title" name="title" style="width:500px" required ></td> 
        		</tr>
        		<tr>
        		  <td>Contents</td>
        		  <td><label for="contents"></label>
      				<input type="text" id="contents" name="contents" placeholder="Write your description about the picture" style="width:500px; height:200px" required >	</td>
      		<!-- you can change width and height in css-->
       		</tr>
      	</table>
          Select image to upload:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
      </form>

  </body>

    <footer>
      <?php
        include("footer.php");
      ?>
    </footer>
</html>