<?php
define('PHPMORPHY_DIR', realpath(__DIR__ . '/../src/phpMorphy'));
if (PHPMORPHY_DIR === false) {
    throw new \Exception('Failed to determine PHPMORPHY_DIR');
}

require_once(__DIR__ . '/../vendor/autoload.php');
