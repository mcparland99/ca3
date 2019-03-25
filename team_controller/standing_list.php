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
<body>

    <div class="d-flex" id="wrapper">

  <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Football League Standings</div>
                <div class="list-group list-group-flush">
                    <a href="../index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="fixtures_controller/" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                    <a href="../team_controller/" class="list-group-item list-group-item-action bg-light">Team Information</a>                 
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>        

  <div class="container-fluid">
        <h2>Leagues</h2>
        <?php include '../view/league_nav.php'; ?>        
     
        <h1><?php echo $league_name; ?></h1>
        <ul>
            <?php foreach ($standings as $standing) : ?>
            <li>
                <a href="?action=view_standing&amp;standing_id=<?php 
                          echo $standing['standingID']; ?>">
                    <?php echo $standing['team']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

  </div>
     

    </body>
    </html>

