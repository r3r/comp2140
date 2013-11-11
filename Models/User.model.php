<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ritesh
 */
class User {
    private $uId;
    private $password;
    private $userCoursePasses; //Courses Object
    private $facultyReqs; //Courses Object
    private $minSemesterCredits; //Array el[0] min for sem 1, el[1] min for sem 2
    private $maxSemesterCredits; //Array el[0] max for sem 1, el[1] max for sem 2
    private $minCredits;
    private $maxCredits;
    
    
    function __construct($uId, $password, $facultyReqs, $minSemesterCredits, $maxSemesterCredits, $minCredits, $maxCredits, $userCoursePasses=null) {
        $this->uId = $uId;
        $this->password = $password;
        $this->userCoursePasses = $userCoursePasses;
        $this->facultyReqs = $facultyReqs;
        $this->minSemesterCredits = $minSemesterCredits;
        $this->maxSemesterCredits = $maxSemesterCredits;
        $this->minCredits = $minCredits;
        $this->maxCredits = $maxCredits;
    }

    public function getUId() {
        return $this->uId;
    }


    public function getPassword() {
        return $this->password;
    }

 
    public function getUserCoursePasses() {
        return $this->userCoursePasses;
    }

    public function setUserCoursePasses($userCoursePasses) {
        $this->userCoursePasses = $userCoursePasses;
    }

    public function getFacultyReqs() {
        return $this->facultyReqs;
    }

    public function setFacultyReqs($facultyReqs) {
        $this->facultyReqs = $facultyReqs;
    }

    public function getMinSemesterCredits() {
        return $this->minSemesterCredits;
    }

    public function setMinSemesterCredits($minSemesterCredits) {
        $this->minSemesterCredits = $minSemesterCredits;
    }

    public function getMaxSemesterCredits() {
        return $this->maxSemesterCredits;
    }

    public function setMaxSemesterCredits($maxSemesterCredits) {
        $this->maxSemesterCredits = $maxSemesterCredits;
    }

    public function getMinCredits() {
        return $this->minCredits;
    }

    public function setMinCredits($minCredits) {
        $this->minCredits = $minCredits;
    }

    public function getMaxCredits() {
        return $this->maxCredits;
    }

    public function setMaxCredits($maxCredits) {
        $this->maxCredits = $maxCredits;
    }




}

?>
