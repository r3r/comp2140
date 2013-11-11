<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Course
 *
 * @author ritesh
 */
class Course {
    private $courseTitle;
    private $courseCode;
    private $department;
    private $level;
    private $semestersAvaliable;
    private $semesterTaken;
    private $year;
    private $credits;
    private $faculty;
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
