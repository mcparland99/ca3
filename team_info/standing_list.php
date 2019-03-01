<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h2>Leagues</h2>
        <?php include '../view/league_nav.php'; ?>        
    </aside>
    <section>
        <h1><?php echo $league_name; ?></h1>
        <ul class="nav">
            <?php foreach ($standings as $standing) : ?>
            <li>
                <a href="?action=view_standing&amp;standing_id=<?php 
                          echo $standing['standingID']; ?>">
                    <?php echo $standing['team']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include '../view/footer.php'; ?>

