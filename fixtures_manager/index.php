<?php
require('../model/database.php');
require('../model/standing_db.php');
require('../model/league_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_standings';
    }
}
if ($action == 'list_standings') {
    $league_id = filter_input(INPUT_GET, 'league_id', 
            FILTER_VALIDATE_INT);
    if ($league_id == NULL || $league_id == FALSE) {
        $league_id = 1;
    }
    
    $league_name = get_league_name($league_id);
    $leagues = get_leagues();
    $standings = get_standings_by_league($league_id);
    include('standing_list.php');
} else if ($action == 'show_edit_form') {
    $standing_id = filter_input(INPUT_POST, 'standing_id', 
            FILTER_VALIDATE_INT);
    if ($standing_id == NULL || $standing_id == FALSE) {
        $error = "Missing or incorrect product id.";
        include('../errors/error.php');
    } else { 
        $standing = get_standing($standing_id);
        include('standing_edit.php');
    }
} else if ($action == 'update_standing') {
    $standing_id = filter_input(INPUT_POST, 'standing_id', 
            FILTER_VALIDATE_INT);
    $league_id = filter_input(INPUT_POST, 'league_id', 
            FILTER_VALIDATE_INT);
    $team = filter_input(INPUT_POST, 'team');
    $wins = filter_input(INPUT_POST, 'wins', FILTER_VALIDATE_FLOAT);
    $points = filter_input(INPUT_POST, 'points', FILTER_VALIDATE_FLOAT);
    if ($standing_id == NULL || $standing_id == FALSE || $league_id == NULL || 
            $league_id == FALSE || $team == NULL || $wins == NULL || 
            $points == NULL || $points == FALSE || $wins == FALSE) {
        $error = "Incorrect format. Please try again.";
        include('../errors/error.php');
    } else {
        update_standing($standing_id, $league_id, $team, $wins, $points);
        header("Location: .?league_id=$league_id");
    }
} else if ($action == 'delete_standing') {
    $standing_id = filter_input(INPUT_POST, 'standing_id', 
            FILTER_VALIDATE_INT);
    $league_id = filter_input(INPUT_POST, 'league_id', 
            FILTER_VALIDATE_INT);
    if ($league_id == NULL || $league_id == FALSE ||
            $standing_id == NULL || $standing_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        delete_standing($standing_id);
        header("Location: .?league_id=$league_id");
    }
} else if ($action == 'show_add_form') {
    $leagues = get_leagues();
    include('standing_add.php');
} else if ($action == 'add_standing') {
    $league_id = filter_input(INPUT_POST, 'league_id', 
            FILTER_VALIDATE_INT);
    $team = filter_input(INPUT_POST, 'team');
    $wins = filter_input(INPUT_POST, 'wins', FILTER_VALIDATE_FLOAT);
    $points = filter_input(INPUT_POST, 'points', FILTER_VALIDATE_FLOAT);
    if ($league_id == NULL || $league_id == FALSE || $team == NULL || 
            $wins == NULL || $points == NULL || $points == FALSE || $wins == FALSE) {
        $error = "Incorrect format. Please try again.";
        include('../errors/error.php');
    } else { 
        add_standing($league_id, $team, $wins, $points);
        header("Location: .?league_id=$league_id");
    }
} else if ($action == 'list_leagues') {
    $leagues = get_leagues();
    include('league_list.php');
} else if ($action == 'add_league') {
    $name = filter_input(INPUT_POST, 'name');
    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('../errors/error.php');
    } else {
        add_league($name);
        header('Location: .?action=list_leagues');
    }
} else if ($action == 'delete_league') {
    $league_id = filter_input(INPUT_POST, 'league_id', 
            FILTER_VALIDATE_INT);
    delete_league($league_id);
    header('Location: .?action=list_leagues');
}
?>