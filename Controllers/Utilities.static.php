<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilities
 *
 * @author ritesh
 */
class Utilities {
    private $courseInterface;
    public static function topologicalSort($courses){
        
    }
    
    private static function convertCoursesToGraph($courses){
        $graph = array();
        foreach($courses as $course){
            $graph[$course->getCourseCode()] = new Vertex($course);
        }
        foreach($courses as $course){
            $prereqs = $course->getPreRequisites();
            foreach($prereqs as $prereq){
                if (isset($graph[$prereq])){
                    $vert = $graph[$prereq];
                    $vert->addNeighbour($course);
                    $graph[$prereq] = $vert;
                }
                else{
                    $vert = $this->courseInterface->callExternal($prereq);
                    $vert->addNeighbour($course);
                    $graph[$prereq] = $vert;
                }
            }
        }
        
        
        
        
    }
    private static function convertGraphToCourses($graph){
        
    }
}

class Vertex {
    public $course;
    public $starTime = -1;
    public $endTime = -1;
    public $color = "white";
    public $adj_list = array();
    
    function __construct($course, $adj_list = array()) {
        $this->course = $course;
        $this->adj_list = $adj_list;
    }
    
    public function addNeighbour($neighbour){
        $this->adj_list[] = $neighbour->getCourseCode();
    }

}

?>
