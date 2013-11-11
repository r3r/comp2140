<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Satisfies Requirements 2.2.11
 * Solicits external system for course information
 *
 * @author ritesh
 */
class CourseInterface extends ExternalInterface{
    /**
     *
     * @var type Course Object
     * Holds the course object solicited
     */
    private $course;
    
    /**
     * @override
     * @param type string $course - course code
     * @return type Course Object
     * 
     */
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
