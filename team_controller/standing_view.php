<!DOCTYPE html>
<html> 
    <head>
        <title>Football League Standings</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Sidebar CSS -->
        <link href="../css/simple-sidebar.css" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">


    </head>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Football League Standings</div>
            <div class="list-group list-group-flush">
                <a href="../index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="../standings_controller" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                <a href="index.php" class="list-group-item list-group-item-action bg-light">Team Information</a>                 
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>     

            <div class="container-fluid">


                <h1>Leagues</h1>
                <?php include '../view/league_nav.php'; ?>

                <h1><?php echo $team; ?></h1>
                <div id="left_column">
                    <p>
                        <img src="<?php echo $image_filename; ?>"
                             alt="<?php echo $image_alt; ?>">
                    </p>
                </div>

                <div id="right_column">
                    <p><b>Team: </b><?php echo $team; ?></p>
                    <p><b>Wins This Season: </b><?php echo $wins; ?></p>
                    <p><b>Points: </b><?php echo $points; ?></p>
                </div>
            </div>
<script src="https://www.phpkobo.com/mod/ALNJX/v2.09/demoex/cn/ajax-likes.php?tpl=tpl-1&iid=demo-001"></script>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>