<?php 

namespace Webparser\View;

class JsonModel extends AbstractViewModel {
    
    public function render(){
        return json_encode($this->getVariables());
    }
}

?>