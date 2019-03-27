<?php include '../view/header.php'; ?>
<main>
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

</main>
<?php include '../view/footer.php'; ?>