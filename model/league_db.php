<?php
function get_leagues() {
    global $db;
    $query = 'SELECT * FROM leagues
              ORDER BY leagueID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
}

function get_league_name($league_id) {
    global $db;
    $query = 'SELECT * FROM leagues
              WHERE leagueID = :league_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $league_name = $category['leagueName'];
    return $league_name;
}

function add_league($name) {
    global $db;
    $query = 'INSERT INTO leagues (leagueName)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_league($league_id) {
    global $db;
    $query = 'DELETE FROM leagues
              WHERE leagueID = :league_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':league_id', $league_id);
    $statement->execute();
    $statement->closeCursor();
}
?>