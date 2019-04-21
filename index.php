<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
    
    <?php include 'view/header.php'; ?>
    
    <body>

        <div class="d-flex" id="wrapper">

      <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Football League Standings</div>
                <div class="list-group list-group-flush">
                    <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="standings_controller" class="list-group-item list-group-item-action bg-light">Fixtures Manager</a>
                    <a href="team_controller/" class="list-group-item list-group-item-action bg-light">Team Information</a>
                    
                </div>
                <div class="list-group-item-light" id="sidebar-wrapped">
                    <div>
                    <a href="logout.php" >Log out</a>
                    </div>
                    <div>
                    <a href="reset-password.php" >Reset password</a>
                    </div>
                   
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
                    <h1 class="mt-4">Football League Standings App</h1>
                    <p>The Football League Standings web application  allows users to view details about football leagues and fixtures, and add new information or update existing information.</p>
                    <p>The fixtures manager lets the user add and delete football leagues, and also add, update and delete football teams and their standing. There is a link to upload an image to a folder.</p>
                </div>
                
                <div id="photos"></div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>