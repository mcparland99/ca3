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
                    <a href="standings_controller" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                    <a href="../team_controller/" class="list-group-item list-group-item-action bg-light">Team Information</a>
                    <a href="../players_controller" class="list-group-item list-group-item-action bg-light">Player Information</a>
                </div>
                <div class="list-group-item-light" id="sidebar-wrapped">
                    <div>
                    <a href="../logout.php" >Log out</a>
                    </div>
                    <div>
                    <a href="../reset-password.php" >Reset password</a>
                    </div>
                   
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
                    <h1>Edit Standing</h1>
                    <form action="index.php" method="post" id="add_standing_form">

                        <input type="hidden" name="action" value="update_standing">

                        <input type="hidden" name="standing_id"
                               value="<?php echo $standing['standingID']; ?>">

                        <label>League ID:</label>
                        <input type="league_id" name="league_id"
                               value="<?php echo $standing['leagueID']; ?>">
                        <br>

                        <label>Team:</label>
                        <input type="input" name="team"
                               value="<?php echo $standing['team']; ?>">
                        <br>

                        <label>Wins:</label>
                        <input type="input" name="wins"
                               value="<?php echo $standing['wins']; ?>">
                        <br>

                        <label>Points:</label>
                        <input type="input" name="points"
                               value="<?php echo $standing['points']; ?>">
                        <br>

                        <label>&nbsp;</label>
                        <input type="submit" value="Save Changes">
                        <br>
                    </form>
                    <p><a href="index.php?action=list_standings">View Standings</a></p>

                </div>
            </div>
        </div>
    </body>
</html>