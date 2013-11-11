<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Provides a set of general purpose algorithms for use in the system.
 *
 * @author ritesh
 */
class Utilities {
    private $courseInterface;
    public static function topologicalSort($courses){
        $graph = $this->convertCoursesToGraph($courses);
        GraphAlgorithms::toplogicalSort($graph);
        $courses = $this->convertGraphToCourses($graph);
        return $courses;
    }
    
    private static function convertCoursesToGraph($courses){
        $graph = array();
        $this->courseInterface = new CourseInterface();
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
        return $graph;
        
        
        
    }
    private static function convertGraphToCourses($graph){
        $courses = array();
        foreach($graph as $vertex){
            $courses[] = $vertex->course;
        }
        return $courses;
    }
}

class Vertex {
    
    public $course;
    public $startTime = -1;
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
    public function getKey(){
        return $this->course->getCourseCode();
    }

}

class GraphAlgorithms {
    private $time;
    
    public static function sortCompFunc($a, $b){
        return $a->endTime > $b->endTime;
    }
    
    public static function toplogicalSort(&$graph){
        $this->dfs($graph);
        uasort($graph, array('self', 'sortCompFunc'));
    }
    
    public static function dfs(&$graph){
        $this->time = 0;
        foreach($graph as $vertex){
            if ($vertex->color == 'white'){
                $this->dfs_visit($graph, $vertex->getKey());
            }
        }
    }
    
    public static function dfs_visit(&$graph, $vertKey){
        $this->time += 1;
        $graph[$vertKey]->startTime = $this->time;
        $graph[$vertKey]->color = "gray";
        foreach($graph[$vertKey]->adj_list as $v){
            if($graph[$v]->color == "white"){
                $this->dfs_visit($graph, $v);
            }
        }
        $graph[$vertKey]->color = "black";
        $this->time += 1;
        $graph[$vertKey]->endTime = $this->time;
        
    }
    
}

?>
