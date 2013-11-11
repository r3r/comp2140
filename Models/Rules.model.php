<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rules
 *
 * @author ritesh
 */
class Rules extends Courses{
    //put your code here
    /**
     *
     * @var type int
     * 1 - Pre-Requisite
     * 2 - Co-Requiste
     */
    private $type;
    public function __construct($id = null, $courseList = array(), $type) {
        parent::__construct($id, $courseList);
        $this->type = $type;
    }
    
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }



}

?>
