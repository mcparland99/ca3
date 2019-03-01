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
    $leagues = get_leagues();
    $league_name = get_league_name($league_id);
    $standings = get_standings_by_league($league_id);

    include('standing_list.php');
} else if ($action == 'view_standing') {
    $standing_id = filter_input(INPUT_GET, 'standing_id', 
            FILTER_VALIDATE_INT);   
    if ($standing_id == NULL || $standing_id == FALSE) {
        $error = 'Missing or incorrect product id.';
        include('../errors/error.php');
    } else {
        $leagues = get_leagues();
        $standing = get_standing($standing_id);

        $team = $standing['team'];
        $wins = $standing['wins'];
        $points = $standing['points'];

        $image_filename = '../images/' . $team . '.png';
        $image_alt = 'Image: ' . $team . '.png';

        include('standing_view.php');
    }
}
?>