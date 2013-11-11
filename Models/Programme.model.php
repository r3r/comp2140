<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Programme
 *
 * @author ritesh
 */
class Programme {
    /**
     *
     * @var type string
     * The name of the Programme
     */
    private $name;
    /**
     *
     * @var type string
     * Faculty programme is offered in
     */
    private $faculty;
    /**
     *
     * @var type enum
     * 1 - Major
     * 2 - Minor
     */
    private $type;
    /**
     *
     * @var type Courses
     * The requirements for this programme
     */
    private $requirements;
    function __construct($name, $faculty, $type, $requirements=array()) {
        $this->name = $name;
        $this->faculty = $faculty;
        $this->type = $type;
        $this->requirements = $requirements;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getFaculty() {
        return $this->faculty;
    }

    public function setFaculty($faculty) {
        $this->faculty = $faculty;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getRequirements() {
        return $this->requirements;
    }

    public function setRequirements($requirements) {
        $this->requirements = $requirements;
    }

    public function addRequirement($course){
        $this->requirements[] = $course;
    }

}

?>
