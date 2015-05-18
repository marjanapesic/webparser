<?php 

namespace Webparser\View;

class ViewModel extends AbstractViewModel {
    
    protected $template;
    
    
    public function getTemplate()
    {
        return $this->template;
    }
    
    public function setTemplate($template)
    {
        $this->template = (string)$template;
    }
  
    public function render(){
        
        $file = ABSPATH . DIRECTORY_SEPARATOR. 'view'. DIRECTORY_SEPARATOR . strtolower($this->getTemplate()) . '.phtml';
        
        if (file_exists($file)) {
            $variables = $this->getVariables();
            if (is_array($variables) && !empty($variables)) {
                extract($variables);
            }
            ob_start();
            include $file;
            return ob_get_clean();
        } 
        else {
            throw new \Exception('Template ' . $this->getTemplate() . ' not found!');
        }
    }
}

?>