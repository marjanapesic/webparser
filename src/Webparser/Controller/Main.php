<?php
namespace Webparser\Controller;

use Webparser\View\ViewModel;
use Webparser\View\JsonModel;

class Main {
    
    
    public function indexAction()
    {
        return new ViewModel(array());
    }
    
    public function parseAction()
    {
        $url = strip_tags($_POST['url']);
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        $items = strip_tags($_POST['items']);
        $items = preg_replace('/\s+/', ' ', $items); //remove multiple white spaces
        $items = trim($items);
        
        if($url=="" || $items=="" || !filter_var($url, FILTER_VALIDATE_URL))
        {
            return http_response_code(400);
        }
   
        $code = file_get_contents($url);

        $dom = new \Zend\Dom\Query($code);
        $nodes = $dom->execute($items);
        
        $links= array();
        foreach($nodes as $node){
            $links[] =  $node->ownerDocument->saveXML($node);
        }

        return new JsonModel($links);
    }
}