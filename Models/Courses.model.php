<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Courses Model
 * This class is a wrapper model for a list of courses
 *
 * @author ritesh
 */
class Courses {
    /**
     *
     * @var type int Id to uniquely identify a list
     */
    protected $id;
    /**
     *
     * @var type array(Course) - an Array of Course Objects
     */
    protected $courseList;
    private static $nextId = 0;
    
    function __construct($id = null, $courseList=array()) {
        if($id == null) $id = $this->nextId;
        if($id == $this->nextId) $this->nextId++;
        $this->id = $id;
        $this->courseList = $courseList;
    }
    public function getId() {
        return $this->id;
    }

    public function getCourseList() {
        return $this->courseList;
    }

    public function setCourseList($courseList) {
        $this->courseList = $courseList;
    }
    
    public function addCourse(Course $course){
        if (isset($this->courseList[$course->getCourseCde()])) return False;
        $this->courseList[$course->getCourseCode()] = $course;
        return True;
    }
    public function addAllCourses($courses){
        if(count($courses) == 0) return False;
        foreach($courses as $course){
            $this->addCourse($course);
        }
        return True;
    }
    
     public function removeCourse(Course $course){
        if (isset($this->courseList[$course->getCourseCde()])) {
            unset($this->courseList[$course->getCourseCode()]);
            return True;
        }
        return False;
    }
    
    public function getTotalCredits(){
        $sum = 0;
        foreach($this->courseList as $course){
            $sum += $course->getCredits();
        }
        return $sum;
    }



}

?>
