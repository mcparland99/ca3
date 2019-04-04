<?php 

$res = array();
        
if ($_POST['delete']) {
    global $db;
    $query = 'DELETE FROM standings
              WHERE standingID = :standing_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':standing_id', $standing_id);
    $statement->execute();
    $statement->closeCursor();
    
    if ($statement) {
        $res['status']  = 'success';
 $res['message'] = 'Standing Deleted Successfully ...';
    } else {
        $res['status']  = 'error';
 $res['message'] = 'Unable to delete standing ...';
    }
    echo json_encode($res);
}
?>