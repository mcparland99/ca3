<nav>
            <ul>
                <?php foreach($leagues as $league) : ?>
                <li class="list-group-item list-group-item-action">
                    <a href="?league_id=<?php 
                              echo $league['leagueID']; ?>">
                        <?php echo $league['leagueName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
