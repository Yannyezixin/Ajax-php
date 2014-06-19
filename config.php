<?php
include 'mysqli.class.php';

$config = array();
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['table'] = 'database_name';

$db = new DB($config);
