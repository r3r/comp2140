<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseInterface
 *
 * @author ritesh
 */
class CourseInterface extends ExternalInterface{
    private $course;
    
    public function callExternal($course) {
        $function = $course;
        parent::callExternal($function);
        if($this->parseJSONToCourse())
            return $this->course;
        else
            return $this->getErrors();
        
    }
    
    private function parseJSONToCourse(){
        
    }

}

?>
