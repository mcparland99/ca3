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

        <?php include '../view/sidebar_nav.php'; ?>


        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>


            <div class="container-fluid">
                <h1>Standings</h1>

                <h2>Leagues</h2>
                <?php include '../view/league_nav.php'; ?>        

                <h2><?php echo $league_name; ?></h2>
                <table>
                    <tr>
                        <th>Team:</th>
                        <th>Wins:</th>
                        <th class="right">Points:</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach ($standings as $standing) : ?>
                        <tr>
                            <td><?php echo $standing['team']; ?></td>
                            <td><?php echo $standing['wins']; ?></td>
                            <td class="right"><?php echo $standing['points']; ?></td>
                            <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="show_edit_form">
                                    <input type="hidden" name="standing_id"
                                           value="<?php echo $standing['standingID']; ?>">
                                    <input type="hidden" name="league_id"
                                           value="<?php echo $standing['leagueID']; ?>">
                                    <input type="submit" value="Edit">
                                </form></td>
                            <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="delete_standing">
                                    <input type="hidden" name="standing_id"
                                           value="<?php echo $standing['standingID']; ?>">
                                    <input type="hidden" name="league_id"
                                           value="<?php echo $standing['leagueID']; ?>">
                                    <input type="submit" value="Delete">
                                </form></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <p><a href="?action=show_add_form">Add Team Standing</a></p>
            <p><a href="?action=list_leagues">View List of Football Leagues</a></p>
            <p><a href="../team_controller">View Team Information</a></p>
            <p><a href="../img_upload.php">Upload Image</a>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>