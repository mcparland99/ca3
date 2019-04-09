<?php include '../view/header.php'; ?>
<main>

    <h1>Players</h1>

    <aside>
        <h2>Leagues</h2>
        <?php include '../view/league_nav.php'; ?>        
    </aside>

    <section>
        <h2><?php echo $league_name; ?></h2>
        <table>
            <tr>
                <th>Name:</th>
                <th>Team:</th>
                <th class="right">Goals Scored:</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($players as $player) : ?>
            <tr>
                <td><?php echo $player['name']; ?></td>
                <td><?php echo $player['team']; ?></td>
                <td class="right"><?php echo $player['goalsScored']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="player_id"
                           value="<?php echo $player['playerID']; ?>">
                    <input type="hidden" name="league_id"
                           value="<?php echo $standing['leagueID']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_standing">
                    <input type="hidden" name="player_id"
                           value="<?php echo $player['playerID']; ?>">
                    <input type="hidden" name="league_id"
                           value="<?php echo $player['leagueID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add a Player</a></p>
    </section>

</main>
<?php include '../view/footer.php'; ?>