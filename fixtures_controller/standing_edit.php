<?php include '../view/header.php'; ?>
<main>
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

</main>
<?php include '../view/footer.php'; ?>