<?php

require_once 'User.php';
require_once 'Admin.php';

$admin = new Admin();
$admin->setUsername('John');
echo $admin->ditBonjour();