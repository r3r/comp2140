<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgrammeInterface
 *
 * @author ritesh
 */
class ProgrammeInterface extends ExternalInterface{
    /**
     *
     * @var type CourseInterface
     */
    private $CourseInterface;
    /**
     *
     * @var type Programme
     */
    private $programme;
    
    public function callExternal($programme) {
        $function = $programme;
        parent::callExternal($function);
        $this->parseJSONtoProgramme();
        $courseStrings = $this->extractCourseStrings();
        if(count($courseStrings) != 0)
            if($this->getCourses($courseStrings) != null)
                return $this->programme;
            else
                return $this->getErrors();
       return $this->getErrors();
        
    }
    
    private function extratCourseStrings(){
    
    }
    private function parseJSONToProgramme(){
        
    }
    
    private function getCourses($courseStrings){
        if (count($courseStrings) == 0)
            return NULL;
        $this->CourseInterface = new CourseInterface();
        foreach($courseStrings as $courseString){
            $course = $this->CourseInterface->callExternal($courseString);
            $this->programme->addRequirement($course);
        }
        return $this->programme;        
    }
    

}

?>
