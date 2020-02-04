#!/usr/bin/env php
<?php
require_once(__DIR__ . '/../init.php');

$hpp = 'gramtab.hpp';
$cpp = 'gramtab.cpp';

try {
    phpMorphy_Generator_GramTab::generateCpp($hpp, $cpp);
} catch (Exception $e) {
    echo $e;
    exit(1);
}
