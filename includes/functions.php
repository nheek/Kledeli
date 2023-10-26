<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/shareme/config.php';

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

function getItems($link)
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Items WHERE link = '{$link}' ORDER BY id";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result;
    }
}

function getLatestItemID()
{
    global $sqlConnect;

    // SQL query to search for the term in your table
    $sql = "SELECT * FROM Items";

    // Execute the query
    $result = $sqlConnect->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output data of each row
        return $result->fetch_assoc()["id"] + 1;
    }
}

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