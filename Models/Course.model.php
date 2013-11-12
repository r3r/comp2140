<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Course Model
 * Represents a University Course
 *
 * @author ritesh
 */
class Course {
    /**
     *
     * @var type string
     */
    private $courseTitle;
    /**
     *
     * @var type string
     */
    private $courseCode;
    /**
     *
     * @var type string
     */
    private $department;
    /**
     *
     * @var type int
     */
    private $level;
    /**
     *
     * @var type array(int)
     */
    private $semestersAvaliable;
    /**
     *
     * @var type int
     * The semester in which this course is taken
     */
    private $semesterTaken;
    /**
     *
     * @var type int
     * Year of Study Course is taken 
     */
    private $year;
    /**
     *
     * @var type ints
     */
    private $credits;
    /**
     *
     * @var type string
     */
    private $faculty;
    /**
     *
     * @var type array(courseCodes)
     */
    private $prerequistes;
    
    
    function __construct($courseTitle, $courseCode, $department, $level, $semestersAvaliable, $credits, $faculty, $prerequistes) {
        $this->courseTitle = $courseTitle;
        $this->courseCode = $courseCode;
        $this->department = $department;
        $this->level = $level;
        $this->semestersAvaliable = $semestersAvaliable;
        $this->credits = $credits;
        $this->faculty = $faculty;
        $this->prerequistes = $prerequistes;
    }

    

    public function getCourseTitle() {
        return $this->courseTitle;
    }

    public function setCourseTitle($courseTitle) {
        $this->courseTitle = $courseTitle;
    }

    public function getCourseCode() {
        return $this->courseCode;
    }

    public function setCourseCode($courseCode) {
        $this->courseCode = $courseCode;
    }
    
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function getSemestersAvaliable() {
        return $this->semestersAvaliable;
    }

    public function setSemestersAvaliable($semestersAvaliable) {
        $this->semestersAvaliable = $semestersAvaliable;
    }

    public function getSemesterTaken() {
        return $this->semesterTaken;
    }

    public function setSemesterTaken($semesterTaken) {
        $this->semesterTaken = $semesterTaken;
    }

    public function getCredits() {
        return $this->credits;
    }

    public function setCredits($credits) {
        $this->credits = $credits;
    }

    public function getFaculty() {
        return $this->faculty;
    }

    public function setFaculty($faculty) {
        $this->faculty = $faculty;
    }

    public function getPrerequistes() {
        return $this->prerequistes;
    }

    public function setPrerequistes($prerequistes) {
        $this->prerequistes = $prerequistes;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }


    


}
?>
