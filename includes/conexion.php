<?php
try {
    $bd = new mysqli('localhost', 'root', 'root', 'carolina_spa');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
