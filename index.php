<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SOE Food Planner Tool</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SOE Meal Planner</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#trip">Create Trip</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#meal">Make Meal Recipe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ingredient">Add Ingredient</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Stanford Outdoor Education Meal Planner</h1>
                    <p><strong>Usage Instructions:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et porta nibh. Morbi tristique sapien maximus faucibus tristique. Nullam imperdiet nibh et urna convallis porttitor. Mauris pulvinar velit et accumsan feugiat. Pellentesque at consectetur nisl. Morbi blandit libero ac volutpat fermentum. Sed vulputate tincidunt magna, ac ullamcorper turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                    <a class="btn btn-default page-scroll" href="#trip">Click Me to Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trip Section -->
    <section id="trip" class="trip-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Create Trip</h1>

                    <!--content goes here-->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        Trip Name: <input type="text" name="trip_name" value="<?php echo $php_trip_name;?>"><br></br>
                        Number of People: <input type="text" name="trip_headcount" value="<?php echo $php_trip_headcount;?>"><br></br>
                        Date of Trip: <input type="text" name="trip_date" value="<?php echo $php_trip_date;?>"><br></br>
                        <br></br><input type="submit">
                    </form>

                    <?php
                    //define vars and init to ""
                    $php_trip_name = $php_trip_headcount = $php_trip_date = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $php_trip_name = test_input($_POST["trip_name"]);
                        $php_trip_headcount = test_input($_POST["trip_headcount"]);
                        $php_trip_date = test_input($_POST["trip_date"]);
                    }

                    function test_input($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    ?>

                    <br><a class="btn btn-default page-scroll" href="#meal">Click Me to Make a New Meal!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Meal Section -->
    <section id="meal" class="meal-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Make Meal Recipe</h1>

                    <!--content goes here-->

                    <a class="btn btn-default page-scroll" href="#ingredient">Click Me to Make a New Ingredient!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredient Section -->
    <section id="ingredient" class="ingredient-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add Ingredient</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align: center">
                <p><b>Webmaster:</b> Eric Cramer - <b>Contact:</b> emcramer@stanford.edu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
