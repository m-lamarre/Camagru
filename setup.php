<?php
    $filename = "./create_table.sql";
    $host = "127.0.0.1";
    $user = "root";
    $password = "YuB8sL6C";
    $database = "camagru";
    $connection = mysql_connect($host, $user, $password) or die("Error: ".mysql_error());
    $temp = '';
    $lines = file($filename);

    if (mysql_query("CREATE DATABASE camagru", $connection)) {
        echo "Database Successfully Created\n";
    }

    mysql_select_db($database) or die ("Error Selecting Database ".mysql_error());

    foreach ($lines as $line_number => $line) {
        if (substr($line, 0, 2) != '--' && $line != '') {
            $temp .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysql_query($temp) or print('Error performing query \'<b>'.$temp.'</b>\': '.mysql_error().'<br /><br />');
                $temp = '';
            }
        }
    }
?>