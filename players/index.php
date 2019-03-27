<?php

require('../model/database.php');
require('../model/player_db.php');
require('../model/league_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_players';
    }
}

if ($action == 'list_players') {
    $league_id = filter_input(INPUT_GET, 'league_id', FILTER_VALIDATE_INT);
    if ($league_id == NULL || $league_id == FALSE) {
        $league_id = 1;
    }
    $league_name = get_league_name($league_id);
    $leagues = get_leagues();
    $players = get_players_by_league($league_id);
    include('player_list.php');
} else if ($action == 'show_edit_form') {
    $player_id = filter_input(INPUT_POST, 'player_id', FILTER_VALIDATE_INT);
    if ($player_id == NULL || $player_id == FALSE) {
        $error = "Missing or incorrect Player ID.";
        include('../errors/error.php');
    } else {
        $player = get_player($player_id);
        include('player_edit.php');
    }
} else if ($action == 'update_player') {
    $player_id = filter_input(INPUT_POST, 'player_id', FILTER_VALIDATE_INT);
    $league_id = filter_input(INPUT_POST, 'league_id', FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    $team = filter_input(INPUT_POST, 'team');
    $goalsScored = filter_input(INPUT_POST, 'goalsScored', FILTER_VALIDATE_FLOAT);
    if ($player_id == NULL || $player_id == FALSE || $league_id == NULL ||
            $league_id == FALSE || $name == NULL || $team == NULL ||
            $goalsScored == NULL || $goalsScored == FALSE) {
        $error = "Incorrect format. Please try again.";
        include('../errors/error.php');
    } else {
        update_player($player_id, $league_id, $name, $team, $goalsScored);
        header("Location: .?league_id=$league_id");
    }
} else if ($action == 'delete_player') {
    $player_id = filter_input(INPUT_POST, 'player_id', FILTER_VALIDATE_INT);
    $league_id = filter_input(INPUT_POST, 'league_id', FILTER_VALIDATE_INT);
    if ($league_id == NULL || $league_id == FALSE ||
            $player_id == NULL || $player_id == FALSE) {
        $error = "Missing or incorrect Player ID or League ID.";
        include('../errors/error.php');
    } else {
        delete_player($player_id);
        header("Location: .?league_id=$league_id");
    }
} else if ($action == 'show_add_form') {
    $leagues = get_leagues();
    include('player_add.php');
} else if ($action == 'add_player') {
    $league_id = filter_input(INPUT_POST, 'league_id', FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    $team = filter_input(INPUT_POST, 'team');
    $goalsScored = filter_input(INPUT_POST, 'goalsScored', FILTER_VALIDATE_FLOAT);
    if ($league_id == NULL || $league_id == FALSE || $name == NULL ||
            $team == NULL || $goalsScored == NULL || $goalsScored == FALSE) {
        $error = "Incorrect format. Please try again.";
        include('../errors/error.php');
    } else {
        add_player($league_id, $name, $team, $goalsScored);
        header("Location: .?league_id=$league_id");
    }
}
?>