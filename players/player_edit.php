<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Player</h1>
    <form action="index.php" method="post" id="add_player_form">

        <input type="hidden" name="action" value="update_player">

        <input type="hidden" name="player_id"
               value="<?php echo $player['playerID']; ?>">

        <label>League ID:</label>
        <input type="league_id" name="league_id"
               value="<?php echo $player['leagueID']; ?>">
        <br>

        <label>Name:</label>
        <input type="input" name="name"
               value="<?php echo $player['name']; ?>">
        <br>

        <label>Team:</label>
        <input type="input" name="team"
               value="<?php echo $player['team']; ?>">
        <br>

        <label>Goals Scored:</label>
        <input type="input" name="goalsScored"
               value="<?php echo $player['goalsScored']; ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Save Changes">
        <br>
    </form>
    <p><a href="index.php?action=list_players">View Players</a></p>

</main>
<?php include '../view/footer.php'; ?>