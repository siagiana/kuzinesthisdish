<header>
        <nav>
            <div class="container">
                <ul class="nav nav-tabs">
                    <li><a href=""
                        <?php
                            // if ($fName == "form.php"){
                            //     echo "class = \"current\"";
                            // }
                        ?>
                        >Home</a>
                    </li>
                    <li><a href="About.php"
                        <?php
                            if ($fName == "About.php"){
                                echo "class = \"current\"";
                            }
                        ?>
                        >About</a>
                    </li>
                    <li><a href="form.php"
                        <?php
                            if ($fName == "form.php"){
                                echo "class = \"current\"";
                            }
                        ?>
                        >Register</a></li>
                    <li><a href="review.php"
                        <?php
                            if ($fName == "review.php"){
                                echo "class = \"current\"";
                            }
                        ?>
                        >Review</a>
                    </li>   
                    <li><a href=""
                        <?php
                            // if ($fName == "upload.php"){
                            //     echo "class = \"current\"";
                            // }
                        ?>
                        >Gallery</a>
                    </li> 
                    <li><a href=""
                        <?php
                            // if ($fName == "upload.php"){
                            //     echo "class = \"current\"";
                            // }
                        ?>
                        >Contact Us</a>
                    </li 
                </ul>
            </div>
        </nav>
</header>
