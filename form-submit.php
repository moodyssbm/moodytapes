<?php
    $data = $_POST['name'] . "-" . $_POST['email'] . "-" . $_POST['format'] . "\n";
    $ret = file_put_contents('./data/list.txt', $data, FILE_APPEND | LOCK_EX);
?>