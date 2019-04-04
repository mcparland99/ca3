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
                    <a href="standings_controller/" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                    <a href="../team_controller/" class="list-group-item list-group-item-action bg-light">Team Information</a>                 
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
                    <h1>Add Standing</h1>
                    <form action="index.php" method="post" id="add_standing_form">
                        <input type="hidden" name="action" value="add_standing">
                                           
                        <label>League</label>
                        <select name="league_id">
                            <?php foreach ($leagues as $league) : ?>
                                <option value="<?php echo $league['leagueID']; ?>">
                                    <?php echo $league['leagueName']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        
                        <label>Team:</label>
                        <input type="input" name="team">
                        <br>

                        <label>Wins:</label>
                        <input type="input" name="wins">
                        <br>

                        <label>Points:</label>
                        <input type="input" name="points">
                        <br>

                        <label>&nbsp;</label>
                        <input type="submit" value="Add Standing">
                        <br>
                    </form>
                  
                    <p class="last_paragraph">
                        
                        <a href="index.php?action=list_standings">View Standings</a>
                    </p>

                </div>
            </div>

        </div>

    </body>
</html>