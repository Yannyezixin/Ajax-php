<?php

include 'curd/config.php';

$db->query('SELECT * FROM messages');

$data = $db->Get();

include 'view.php';
