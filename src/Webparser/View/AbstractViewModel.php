<?php 

namespace Webparser\View;

abstract class AbstractViewModel {
    
    protected $variables;
    
    public function __construct(Array $variables = array())
    {
        $this->variables = $variables;        
    }
    
    public function getVariables()
    {
        return $this->variables;
    }
    
    public function setVariables(Array $variables)
    {
        $this->variables = $variables;
    }
    
    public function getVariable($name, $default = null)
    {
        $name = (string) $name;
        if (array_key_exists($name, $this->variables)) {
            return $this->variables[$name];
        }
    
        return $default;
    }
    
    public function setVariable($name, $value)
    {
        $this->variables[(string) $name] = $value;
        return $this;
    }
    
    abstract public function render();
}

?>