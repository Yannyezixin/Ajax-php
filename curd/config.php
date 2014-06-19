<?php
include 'mysqli.class.php';

$config = array();
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '20130608q';
$config['table'] = 'mychat';

$db = new DB($config);
