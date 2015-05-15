<?php

require 'vendor/autoload.php';


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $controller = new \Webparser\Controller\Main();
    echo $controller->parseAction();
}
else
{
    $controller = new \Webparser\Controller\Main();
    echo $controller->indexAction();
}