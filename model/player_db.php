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

function add_player($player_name, $league_id, $goals_scored) {
    global $db;
    $query = 'INSERT INTO players
                 (playerName, leagueID, goalsScored)
              VALUES
                 (:player_name, :league_id, :goals_scored)';
    $statement = $db->prepare($query);
    $statement->bindValue(':player_name', $player_name);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':goals_scored', $goals_scored);
    $statement->execute();
    $statement->closeCursor();
}

function update_player($player_id ,$player_name, $league_id, $goals_scored) {
    global $db;
    $query = 'UPDATE players
              SET playerName = :player_name,
                  leagueID = :league_id,
                  goalsScored = :goals_scored,
               WHERE playerID = :player_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':player_name', $player_name);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':goals_scored', $goals_scored);;
    $statement->bindValue(':player_id', $player_id);
    $statement->execute();
    $statement->closeCursor();
}
?>