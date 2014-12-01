<!--*From http://webcheatsheetcom/php/create_thumbnail_images.php() -->
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
        function createGallery( $pathToImages, $pathToThumbs ) 
        {
          include("head.html");
          $fName = basename("gallery.php");
          include("header.php");

          
          // open the directory
          $dir = opendir( $pathToThumbs );

          $counter = 0;
          // loop through the directory
          $output ="<div class = \"row\">";
          while (false !== ($fname = readdir($dir)))
          {
            // strip the . and .. entries out
            if ($fname != '.' && $fname != '..' && $fname != '.DS_Store') 
            {
              $output .= "<a href=\"{$pathToImages}{$fname}\" class = \"col-xs-6 col-md-4 col-lg-3\">";
              $output .= "<img src=\"{$pathToThumbs}{$fname}\" class = \"thumbnail\" />";
              $output .= "</a>";
            }
          }
          // close the directory

          closedir( $dir );

          // open the file
          //$fhandle = fopen( "gallery.html", "w" );
          // write the contents of the $output variable to the file
          //fwrite( $fhandle, $output ); 
          // close the file
          //fclose( $fhandle );
          echo $output;
          include("footer.php");

        }
        // call createGallery function and pass to it as parameters the path 
        // to the directory that contains images and the path to the directory
        // in which thumbnails will be placed. We are assuming that 
        // the path will be a relative path working 
        // both in the filesystem, and through the web for links
        createGallery("uploads/","uploads/");
      ?>
  </body>
</html>
