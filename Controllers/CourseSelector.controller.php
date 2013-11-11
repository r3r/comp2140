<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Satisfies Requirements 2.2.9
 * Generates a course plan for a given programme
 *
 * @author ritesh
 */
class CourseSelector {
    /**
     *
     * @var type CoursePlan object
     * Holds the course plan generated
     */
    private $coursePlan;
    /**
     *
     * @var type DesiredProgramme Object
     * Holds a desired programme object 
     * Represents all the different programmes and their requirements the user wishies to attain
     */
    private $desiredProgramme;
    
    /**
     *
     * @var type ProgrammeInterface Objet
     * Holds the ProgrammeInterface Object in order to retrieve Programme information for each of the desired programme above.
     */
    private $ProgrammeInterface;
    
    /**
     *
     * @param type string $major1 - First Major
     * @param type string $major2 - Second Major
     * @param type string $minor1 - First Minor
     * @param type string $minor2 - Second Minor
     * @param type User $user - User Object
     * @return type  CoursePlan
     * Generates a first draft courseplan for the user based on their choices
     */
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
        return $this->coursePlan;
        
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
