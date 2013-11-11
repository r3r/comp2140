<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author ritesh
 */
class Validator {
    private $coursePlan;
    private $desiredProgramme;
    private $ProgrammeInterface;
    private $errors;
    
    public function validateFacultyRequirements($user, $coursePlan){
        $facqReqs = $user->getFacultyRequirements();
        $courses = $coursePlan->getCourses();
        $valid = True;
        foreach($facqReqs as $course){
            $valid = False;
            foreach($courses as $c){
                if($course->getCourseCode() == $c->getCourseCode()){
                    $valid = True;
                    break;
                }
            }
            if(!$valid){
                return False;
            }            
        }
        return True;
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
    
    public function validateProgrammeRequirements($major1, $major2="", $minor1="", $minor2="", $user, $coursePlan){
        $this->prepareDesiredProgramme($major1, $major2, $minor1, $minor2);
        $plan = $coursePlan->getCourses();
        $progList = $this->dp->getProgrammeList();
        foreach($progList as $prog){
            $courses = $prog->getCourses();
            foreach($courses as $course){
                $valid = False;
                foreach($plan as $c){
                    if($c->getCourseCode() == $course->getCourseCode()){
                        $valid = True;
                        break;
                    }
                }
                if (!$valid){
                    return False;
                }
            }
        }
        return True;
    }
    
    public function validateCourseRequirements($coursePlan, $course = null){
        if ($course != null){
            $prereqs = $course->getPreRequisites();
            $semester = $course->getSemesterTaken();
            $year = $course->getYearTaken();
            $semester = $semester + (($year-1)*2);
            $semesterList = $coursePlan->getSemesterList();
            foreach($prereqs as $prereq){
                $valid = False;
                for ($i = 1; $i<$semester; $i++){
                    foreach($semesterList[i] as $c){
                        if ($prereq->getCourseCode() == $c->getCourseCode()){
                            $valid = True;
                            break;
                        }
                    }
                    if($valid)
                        break;
                }
                if(!$valid){
                    return False;
                }
            }
        }
        else{
            $plan = $coursePlan->getCourses();
            foreach($plan as $course){
                if(!$this->validateCourseRequirements($coursePlan, $course))
                        return False;
            }
        }
    }
    
    public function validateAll($major1, $major2 = "", $minor1="", $minor2="",$user, $coursePlan){
        return $this->validateCourseRequirements($coursePlan) &&
               $this->validateFacultyRequirements($user, $coursePlan) &&
               $this->validateProgrammeRequirements($major1, $major2, $minor1, $minor2);
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

    public function getErrors() {
        return $this->errors;
    }

    public function setErrors($errors) {
        $this->errors = $errors;
    }


}

?>
