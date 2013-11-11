<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Satisfies Requirements 2.2.11
 * Solicits external system for Programme information
 *
 * @author ritesh
 */
class ProgrammeInterface extends ExternalInterface{
    /**
     *
     * @var type CourseInterface Object
     * Holds a CourseInterface Object for querying course information
     */
    private $CourseInterface;
    /**
     *
     * @var type Programme Object
     * Holds the Programe Object solicited
     */
    private $programme;
    
    /**
     * @override
     * @param type string $programme - name of the programme
     * @return type Programme/Null; Programme object if successful, null otherwise
     */
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
