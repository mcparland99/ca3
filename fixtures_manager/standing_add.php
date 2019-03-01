<?php include '../view/header.php'; ?>
<main>
    <h1>Add Standing</h1>
    <form action="index.php" method="post" id="add_standing_form">
        <input type="hidden" name="action" value="add_standing">

        <label>League</label>
        <select name="league_id">
        <?php foreach ( $leagues as $league ) : ?>
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

</main>
<?php include '../view/footer.php'; ?>