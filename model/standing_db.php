<?php
function get_standings() {
    global $db;
    $query = 'SELECT * FROM standings
              ORDER BY standingID';
    $statement = $db->prepare($query);
    $statement->execute();
    $standings = $statement->fetchAll();
    $statement->closeCursor();
    return $standings;
}

function get_standings_by_league($league_id) {
    global $db;
    $query = 'SELECT * FROM standings
              WHERE standings.leagueID = :league_id
              ORDER BY standingID';
    $statement = $db->prepare($query);
    $statement->bindValue(":league_id", $league_id);
    $statement->execute();
    $standings = $statement->fetchAll();
    $statement->closeCursor();
    return $standings;
}

function get_standing($standing_id) {
    global $db;
    $query = 'SELECT * FROM standings
              WHERE standingID = :standing_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":standing_id", $standing_id);
    $statement->execute();
    $standing = $statement->fetch();
    $statement->closeCursor();
    return $standing;
}

function delete_standing($standing_id) {
    global $db;
    $query = 'DELETE FROM standings
              WHERE standingID = :standing_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':standing_id', $standing_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_standing($league_id, $team, $wins, $points) {
    global $db;
    $query = 'INSERT INTO standings
                 (leagueID, team, wins, points)
              VALUES
                 (:league_id, :team, :wins, :points)';
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':team', $team);
    $statement->bindValue(':wins', $wins);
    $statement->bindValue(':points', $points);
    $statement->execute();
    $statement->closeCursor();
}

function update_standing($standing_id, $league_id, $team, $wins, $points) {
    global $db;
    $query = 'UPDATE standings
              SET leagueID = :league_id,
                  team = :team,
                  wins = :wins,
                  points = :points
               WHERE standingID = :standing_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->bindValue(':team', $team);
    $statement->bindValue(':wins', $wins);
    $statement->bindValue(':points', $points);
    $statement->bindValue(':standing_id', $standing_id);
    $statement->execute();
    $statement->closeCursor();
}
?>