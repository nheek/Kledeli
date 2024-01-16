<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

global $sqlConnect;

if ($_GET['f'] == 'pickup-loc') {
    if ($_GET['s'] == 'change-user-pickup-loc') {

        $userID = mysqli_real_escape_string($sqlConnect, $_POST['userID']);
        $pickup_loc_ID = mysqli_real_escape_string($sqlConnect, $_POST['pickup_loc_ID']);

        $query = "UPDATE Users SET pickup_loc_id = '{$pickup_loc_ID}' WHERE id = $userID";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }

    // unused codes below
    if ($_GET['s'] == 'check-item') {

        $itemID = mysqli_real_escape_string($sqlConnect, $_POST['itemID']);
        $setTo = mysqli_real_escape_string($sqlConnect, $_POST['setTo']);

        $query = "UPDATE Items SET checked = '{$setTo}' WHERE id = $itemID";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }
    if ($_GET['s'] == 'edit-item') {

        $itemID = mysqli_real_escape_string($sqlConnect, $_POST['itemID']);
        $item = mysqli_real_escape_string($sqlConnect, $_POST['item']);

        $query = "UPDATE Items SET item = '{$item}' WHERE id = $itemID";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }
    if ($_GET['s'] == 'new-list') {

        $link = generateLink();

        session_start();

        $_SESSION["link"] = $link;

        echo $link;
    }
    if ($_GET['s'] == 'add-title') {

        $linkNaked = mysqli_real_escape_string($sqlConnect, $_POST['linkNaked']);
        $title = mysqli_real_escape_string($sqlConnect, $_POST['title']);

        $query = "REPLACE INTO Titles SET link = '{$linkNaked}', title = '{$title}'";
        // $query = "INSERT INTO Titles (link, title) VALUES ($linkNaked, $title) ON DUPLICATE KEY UPDATE link = VALUES($linkNaked), title = VALUES($title)";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }
    if ($_GET['s'] == 'delete-item') {

        $itemID = mysqli_real_escape_string($sqlConnect, $_POST['itemID']);

        $query = "DELETE FROM Items WHERE id = '{$itemID}'";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }
}
