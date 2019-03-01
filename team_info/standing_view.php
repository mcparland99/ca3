<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Leagues</h1>
        <?php include '../view/league_nav.php'; ?>
    </aside>
    <section>
        <h1><?php echo $team; ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>">
            </p>
        </div>

        <div id="right_column">
            <p><b>Team: </b><?php echo $team; ?></p>
            <p><b>Wins This Season: </b><?php echo $wins; ?></p>
            <p><b>Points: </b><?php echo $points; ?></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>