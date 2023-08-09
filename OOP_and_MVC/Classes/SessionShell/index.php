<?php
require_once 'SessionShell.php';

$ses = new SessionShell();

$ses->setSession('name1', 'Hell');
$ses->setSession('name2', 'Hell2');
echo $ses->getSession('name1');
echo $ses->getSession('name2');
