<?php
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== '') {
    die("This script may be run from cmdline only\r\n");
}

require_once 'PhpGtkDoc/Search2/Index.php';

$strDocDir = dirname(__FILE__) . '/../manual/en/';
$strIndexFile = dirname(__FILE__) . '/PhpGtkDoc/index.dat';
PhpGtkDoc_Search2_Index::createIndex($strDocDir, $strIndexFile);
?>