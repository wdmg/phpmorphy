#!/usr/bin/env php
<?php

$search =  array('Ё', 'ё');
$replace = array('Е', 'е');

if($argc < 3) {
    echo "Usage $argv[0] IN_XML OUT_XML";
    exit(1);
}

$in = fopen($argv[1], 'rt');
$out = fopen($argv[2], 'wt');

if(false === $in || false === $out) {
    echo "Can`t open in or out file";
    exit(1);
}

while(!feof($in)) {
    fputs($out, str_replace($search, $replace, fgets($in)));
}

fclose($in);
fclose($out);
