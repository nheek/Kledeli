<?php
$sqlHost = getenv('MYSQL_HOST');
$sqlUser = getenv('MYSQL_USER');
$sqlPass = getenv('MYSQL_PASSWORD');
$sqlName = getenv('MYSQL_DATABASE');

$sqlConnect = new mysqli($sqlHost, $sqlUser, $sqlPass, $sqlName);
$sqlConnect->set_charset("utf8");
