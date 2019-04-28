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
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>
    <body>
        <div class="d-flex" id="wrapper">
            
             
           <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Football League Standings</div>
                <div class="list-group list-group-flush">
                    <a href="../index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="../standings_controller" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                    <a href="../team_controller/" class="list-group-item list-group-item-action bg-light">Team Information</a>
                    <a href="players_controller" class="list-group-item list-group-item-action bg-light">Player Information</a>
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
                    <h1>Add Player</h1>
    <form action="index.php" method="post" id="add_player_form">
        <input type="hidden" name="action" value="add_player">

        <label>League</label>
        <select name="league_id">
        <?php foreach ( $leagues as $league ) : ?>
            <option value="<?php echo $league['leagueID']; ?>">
                <?php echo $league['leagueName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Name:</label>
        <input type="input" name="name">
        <br>

        <label>Team:</label>
        <input type="input" name="team">
        <br>

        <label>Goals Scored:</label>
        <input type="input" name="goalsScored">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Player">
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_players">View Players</a>
    </p>

                </div>
            </div>
            


        </div>
    </body>
</html>