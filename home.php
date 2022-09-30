<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Social Network</title>

        <link rel="stylesheet" type="text/css" href="scss/style.css">
        <link rel="stylesheet" type="text/css" href="scss/override.css">
        <link rel="stylesheet" type="text/css" href="scss/components.css">
        <link rel="stylesheet" type="text/css" href="scss/variables.css">
        <link rel="stylesheet" type="text/css" href="bootstrap5.2.1/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!-- Social Network page container -->
        <div class="sn d-flex flex-column"> <!-- sn, short for social network -->
            <!-- Header -->
            <?php include("header.php"); ?>


            <!-- Body -->
            <div class="sn-body d-flex flex-grow-1 gap-3 px-3 py-3 overflow-hidden">
                <!-- User controls / Left column -->
                <?php include("user.php"); ?>

                <!-- Main Content / Middle column -->
                <?php include("content.php"); ?>
                
                <!-- Article recommendation / Right column -->
                <?php include("recommendation.php"); ?>
            </div>


            <!-- Footer -->
            <?php include("footer.php"); ?>
        </div>
    </body>

    <script src="bootstrap5.2.1/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
</html>