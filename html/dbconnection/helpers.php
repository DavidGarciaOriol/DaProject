<?php


function guardarLogin($db, $username, $status){


    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }

    $browser = $_SERVER['HTTP_USER_AGENT'];

    $sql = "INSERT INTO logins VALUES(NULL, '$username', '$ip', '$browser', '$status', NOW())";

    $guardar_login = mysqli_query($db, $sql);
}

function userOwnsList($db, $user_id, $list_id) {
    $sql = "SELECT * FROM lists WHERE id = $list_id AND user_id = $user_id LIMIT 1";
    $result = mysqli_query($db, $sql);
    if( mysqli_num_rows($result) == 0 ){
        return false;
    }
    return true;
}

function itemBelongsToList($db, $item_id, $list_id) {
    $sql = "SELECT * FROM items WHERE id = $item_id AND list_id = $list_id LIMIT 1";
    $result = mysqli_query($db, $sql);
    if( mysqli_num_rows($result) == 0 ){
        return false;
    }
    return true;
}