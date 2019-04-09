<?php
function get_players() {
    global $db;
    $query = 'SELECT * FROM players
              ORDER BY playerID';
    $statement = $db->prepare($query);
    $statement->execute();
    $standings = $statement->fetchAll();
    $statement->closeCursor();
    return $players;
}

function get_players_by_league($league_id) {
    global $db;
    $query = 'SELECT * FROM players
              WHERE players.leagueID = :league_id
              ORDER BY playerID';
    $statement = $db->prepare($query);
    $statement->bindValue(":league_id", $league_id);
    $statement->execute();
    $players = $statement->fetchAll();
    $statement->closeCursor();
    return $players;
}

function get_player($player_id) {
    global $db;
    $query = 'SELECT * FROM players
              WHERE playerID = :player_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":player_id", $player_id);
    $statement->execute();
    $player = $statement->fetch();
    $statement->closeCursor();
    return $player;
}

function delete_player($player_id) {
    global $db;
    $query = 'DELETE FROM players
              WHERE playerID = :player_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':player_id', $player_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_player($league_id, $name, $team, $goals_scored) {
    global $db;
    $query = 'INSERT INTO players
                 (leagueID, name, team, goalsScored)
              VALUES
                 (:league_id, :name, :team, :goals_scored)';
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':team', $team);
    $statement->bindValue(':goals_scored', $goals_scored);
    $statement->execute();
    $statement->closeCursor();
}

function update_player($player_id, $league_id, $name, $team, $goals_scored) {
    global $db;
    $query = 'UPDATE players
              SET leagueID = :league_id,
                  name = :name,
                  team = :team,
                  goalsScored = :goals_scored,
               WHERE playerID = :player_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':name', $name);
    $statement->bindValue('team', $team);
    $statement->bindValue(':goals_scored', $goals_scored);
    $statement->bindValue(':player_id', $player_id);
    $statement->execute();
    $statement->closeCursor();
}
?>