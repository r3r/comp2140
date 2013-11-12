<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CoursePlan Model
 * This model extends the Courses model which is a course aggregate.
 * It provides a more convenient and efficient storage of coursecodes appropriate for the necessary methods required for this data object.
 *
 * @author ritesh
 */
class CoursePlan extends Courses{
     /**
     *
     * @var type array(array())
     * Holds the courseCodes of the different courses under different semesters in a two
     * dimensional array. 
     * First dimension holds a semseter
     * Second dimension holds the courseCode
     */
    private $semesters;
    
    function __construct($id=null, $courseList=array(), $semesters) {
        parent::__construct($id, $courseList);
        $this->semesters = $semesters;
    }
    
    public function getSemesters() {
        return $this->semesters;
    }

    public function setSemesters($semesters) {
        $this->semesters = $semesters;
    }

    public function addCourse(Course $course) {
        if(parent::addCourse($course)){
            $yr = $course->getYear() - 1 ;
            $semester = $course->getSemesterTaken() + $yr*2;
            $this->semesters[$semester][$course->getCourseCode()] = $course->getCourseCode();
            return True;
        }
        else {
            return False;
        }     
        
    }

    public function removeCourse(Course $course) {
        if(parent::removeCourse($course)){
            $yr = $course->getYear() - 1 ;
            $semester = $course->getSemesterTaken() + $yr*2;
            unset($this->semesters[$semester][$course->getCourseCode()]);
            return True;
        }
        else {
            return False;
        }
    }
    
    public function swapCourses(Course $courseA, Course $courseB){
        return $this->addCourse($courseB) && $this->removeCourse($courseA);
    }
    
    public function getCreditsForSemester($semester, $year){
        $year = $year - 1;
        $semester = $semester + 2*$year;
        $sum = 0;
        foreach($this->semesters[$semester] as $c){
            $course = $this->courseList[$c];
            $sum += $course->getCredits();
        }
        return $sum;
    }

    
    

}

?>
