<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseSelector
 *
 * @author ritesh
 */
class CourseSelector {
    private $coursePlan;
    private $desiredProgramme;
    private $ProgrammeInterface;
    
    public function generateFirstDraft($major1, $major2="", $minor1="", $minor2="", $user){
        $this->prepareDesiredProgramme($major1, $major2, $minor1, $minor2);
        $allCourses = new Courses();
        $allCourses.addAllCourses($user->getFacultyReqs());
        $progList = $this->desiredProgramme->getProgrammeList();
        foreach($progList as $prog){
            $reqs = $prog->getRequirements();
            $courses->addAllCourses($reqs);      
        }
        $sorted = Utilities::topologicalSort($courses);
        $this->coursePlan = new CoursePlan();
        $this->coursePlan->addAllCourses($sorted);
        return $this->desiredProgramme;
        
    }
   
    private function prepareDesiredProgramme($major1, $major2 = "", $minor1 = "", $minor2 = ""){
        $maj1 = $this->ProgrammeInterface->callExternal(array($major1,1));
        $this->dp = new DesiredProgramme($maj1);
        if ($major2 != ""){
            $maj2 = $this->ProgrammeInterface->callExternal(array($major2, 1));
            $this->dp->setMajor2($maj2);
        }
        if ($minor1 != ""){
            $min1 = $this->ProgrammeInterface->callExternal(array($minor1, 2));
            $this->dp->setMinor1($min1);
        }
         if ($minor2 != ""){
            $min2 = $this->ProgrammeInterface->callExternal(array($minor2, 2));
            $this->dp->setMinor2($min2);
        }
    }
    
    public function getCoursePlan() {
        return $this->coursePlan;
    }

    public function setCoursePlan($coursePlan) {
        $this->coursePlan = $coursePlan;
    }

    public function getDesiredProgramme() {
        return $this->desiredProgramme;
    }

    public function setDesiredProgramme($desiredProgramme) {
        $this->desiredProgramme = $desiredProgramme;
    }



}

?>
