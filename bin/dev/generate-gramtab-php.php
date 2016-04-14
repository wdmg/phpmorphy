#!/usr/bin/env php
<?php
require_once(__DIR__ . '/../init.php');

try {
    $gramtabConstsFile = PHPMORPHY_DIR . '/GramTab/Constants.php';
    phpMorphy_Generator_GramTab::generatePhp($gramtabConstsFile);
} catch (Exception $e) {
    echo $e;
    exit(1);
}
