<?php

require 'vendor/autoload.php';

define('ABSPATH', dirname(__FILE__));

use Webparser\View\ViewModel;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $controller = new \Webparser\Controller\Main();
    $viewModel = $controller->parseAction();
    if($viewModel instanceof ViewModel && !$viewModel->getTemplate()){
        $viewModel->setTemplate('webparser'.DIRECTORY_SEPARATOR.'main'.DIRECTORY_SEPARATOR.'parse');
    }
}
else
{
    $controller = new \Webparser\Controller\Main();
    $viewModel = $controller->indexAction();
    if($viewModel instanceof ViewModel && !$viewModel->getTemplate()){
        $viewModel->setTemplate('webparser\main\index');
    }
}

echo $viewModel->render($viewModel);