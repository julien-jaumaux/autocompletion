<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8' , 'root', '');
}
catch (Exception $e) {
    die('error : ' . $e->getMessage());
}

?>