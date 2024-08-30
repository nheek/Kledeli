<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

/* general functions */

function generateRandomCharacters($length = 8)
{
    // Define the character pool containing letters (both uppercase and lowercase) and numbers
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    // Get the length of the character pool
    $poolLength = strlen($characters);

    // Initialize an empty string to store the random characters
    $randomString = '';

    // Generate 8 random characters
    for ($i = 0; $i < $length; $i++) {
        // Get a random index within the character pool
        $randomIndex = rand(0, $poolLength - 1);

        // Append the character at the random index to the random string
        $randomString .= $characters[$randomIndex];
    }

    return $randomString;
}

function addToArray($element, $array)
{
    $array[] = $element; // Add element to the end of the array
    return $array; // Return the modified array
}

function removeFromArray($element, $array)
{
    $index = array_search($element, $array);
    if ($index !== false) {
        unset($array[$index]);
        return array_values($array); // Return modified array
    } else {
        return $array; // Element not found, return the original array
    }
}

function isInArray($element, $array)
{
    return in_array($element, $array);
}

function getNthWord($string, $position)
{
    $words = explode(' ', $string);
    // Remove empty elements caused by multiple spaces
    $words = array_filter($words);
    // Convert to array to remove any empty elements

    $wordCount = count($words);

    if ($position === -1) {
        return end($words); // Get the last word
    } elseif ($position > 0 && $position <= $wordCount) {
        return $words[$position - 1]; // Get the nth word
    } else {
        return false; // Invalid position
    }
}

function getClothesByType($type = "all", $gender = "all", $searchQuery = "")
{
    global $sqlConnect;

    $type = mysqli_real_escape_string($sqlConnect, $type);
    $gender = mysqli_real_escape_string($sqlConnect, $gender);
    $searchQuery = mysqli_real_escape_string($sqlConnect, $searchQuery);

    // SQL query to search for the term in your table
    if ($type == "all") {
        $sql = "SELECT * FROM Clothes WHERE typeOf IN ('ytterklaer', 'indreklaer', 'undertoey')";
    } else {
        $sql = "SELECT * FROM Clothes WHERE typeOf = '{$type}'";
    }

    if ($gender !== "all") {
        $sql .= " AND gender = '{$gender}'";
    }

    if ($searchQuery) {
        $sql .= " AND name LIKE '%{$searchQuery}%'";
    }

    $sql .= " ORDER BY id";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}

function getUserDetails($userID)
{
    global $sqlConnect;

    $userID = mysqli_real_escape_string($sqlConnect, $userID);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Users WHERE id = '{$userID}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}

function getLatestUserID()
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Users ORDER BY id DESC";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc()["id"];
    }
}

function getCookie($name)
{
    if (isset($_COOKIE[$name])) {
        return $_COOKIE[$name];
    } else {
        return null;
    }
}

function getCurrentPageURL()
{
    return $_SERVER['REQUEST_URI'];
}

function showElementIn($URLToShow)
{
    // $currentURL = $_SERVER['REQUEST_URI'];
    $currentURL = getCurrentPageURL();

    // Check if the current URL starts with the target URL
    return strpos($currentURL, $URLToShow) === 0;
}
/* */

function getUserDetailsByID($userID)
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Users WHERE id = '{$userID}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc();
    }
}

function getUserDetailsByUsername($username)
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Users WHERE username = '{$username}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc();
    }
}

// pickup location page

function getPickupLocs($area = 'Bergen')
{
    global $sqlConnect;

    $area = mysqli_real_escape_string($sqlConnect, $area);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM PickupLocs WHERE area = '{$area}' ORDER BY id";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}

/* subscription page */

function getSubscriptions()
{
    global $sqlConnect;

    // $userID = mysqli_real_escape_string($sqlConnect, $userID);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Subscriptions ORDER BY id";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}

/* profile page */

function getSubscriptionByID($sub_id)
{
    global $sqlConnect;

    $sub_id = mysqli_real_escape_string($sqlConnect, $sub_id);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Subscriptions WHERE id = '{$sub_id}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc();
    }
}

function getPickupLocByID($pickup_loc_ID)
{
    global $sqlConnect;

    $pickup_loc_ID = mysqli_real_escape_string($sqlConnect, $pickup_loc_ID);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM PickupLocs WHERE id = '{$pickup_loc_ID}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc();
    }
}

/* wardrobe page */

function getUserWardrobe($userID)
{
    global $sqlConnect;

    $userID = mysqli_real_escape_string($sqlConnect, $userID);
    $userDetails = getUserDetailsByID($userID);
    $userWardrobe = json_decode($userDetails['wardrobe_items']);

    if (!$userWardrobe || count($userWardrobe) == 0) {
        return false;
    }
    $userWardrobeStr = implode(',', $userWardrobe);

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Clothes WHERE id IN ({$userWardrobeStr}) ORDER BY id";
    // $sql = "SELECT * FROM Clothes WHERE id IN (1, 2, 3) ORDER BY id";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}
// ones below here are unused

function checkIfLinkExists($link)
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Items WHERE link = '{$link}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return true;
    }

    return false;
}

function generateLink()
{
    $link = generateRandomCharacters();

    if (!checkIfLinkExists($link)) {
        $link = generateRandomCharacters();
    } else {
        generateLink();
    }

    return $link;
}

function getListTitle($link)
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Titles WHERE link = '{$link}'";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc()["title"];
    }
}
