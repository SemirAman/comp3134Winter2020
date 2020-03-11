<?php

error_reporting(E_ALL);

$path=basename(realpath($_GET['q']) ? $_GET['q'] : '.');

if ( file_exists( $path ) && is_dir( $path ) ) {
    print "<pre>";
    print_r(scandir($path));
    print "</pre>";
}
?>

