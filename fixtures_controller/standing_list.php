<?php include '../view/header.php'; ?>
<main>

    <h1>Standings</h1>

    <aside>
        <h2>Leagues</h2>
        <?php include '../view/league_nav.php'; ?>        
    </aside>

    <section>
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
        <p><a href="?action=show_add_form">Add Team Standing</a></p>
        <p><a href="?action=list_leagues">View List of Football Leagues</a></p>
        <p><a href="../team_info/">View Team Information</a></p>
        <p><a href="../img_upload.php">Upload Image</a>
    </section>

</main>
<?php include '../view/footer.php'; ?>