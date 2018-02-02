<?php
    $data = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['format'] . "\n";
    $ret = file_put_contents('./data/list.csv', $data, FILE_APPEND | LOCK_EX);
    header("Location: http://tapes.immoody.com/"); /* Redirect browser */
    exit();
?>