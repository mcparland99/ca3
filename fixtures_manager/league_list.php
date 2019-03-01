<?php include '../view/header.php'; ?>
<main>

    <h1>Leagues List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($leagues as $league) : ?>
        <tr>
            <td><?php echo $league['leagueName']; ?></td>
            <td>
                <form id="delete_league_form"
                      action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_league">
                    <input type="hidden" name="league_id"
                           value="<?php echo $league['leagueID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add League</h2>
    <form id="add_league_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_league">

        <label>Name:</label>
        <input type="input" name="name">
        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_standings">List Standings</a></p
    <p><a href="../team_info/">View Team Information</a></p>

</main>
<?php include '../view/footer.php'; ?>