<nav>
            <ul>
                <?php foreach($leagues as $league) : ?>
                <li>
                    <a href="?league_id=<?php 
                              echo $league['leagueID']; ?>">
                        <?php echo $league['leagueName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
