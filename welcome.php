<?php
include 'view/header.php';

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        </div>
        <main>
            <h1>Menu</h1>

            <ul>
                <li>
                    <a href="fixtures_manager">Standings Manager</a>
                </li>
                <li>
                    <a href="team_info">Team Information</a>
                </li>
                <li>
                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                </li>
                <li>
                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                </li>
            </ul>
        </main>

    </body>
</html>