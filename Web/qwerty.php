<?php
/**
 * Created by PhpStorm.
 * User: AnSt
 * Date: 26.02.2018
 * Time: 16:36
 */
define('MYSQL_SERVER', 'mysql24.hostland.ru');
define('MYSQL_USER', 'host1323541_gh');
define('MYSQL_PASSWORD', '1234');
define('MYSQL_DB', 'host1323541_greenhouse');

function db_connect()
{
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Error: " . mysqli_error($link));
    if (!mysqli_set_charset($link, "utf8")) {
        printf("Error: " . mysqli_error($link));
    }

    return $link;
}

function request_all($link) {
    $sql = "SELECT * FROM table_zone1";
    $result = mysqli_query($link, $sql);

    if(!$result) die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $query_list = array();
    for($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $query_list[] = $row;
    }

    return $query_list;
}

?>