<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DesiredProgramme
 *
 * @author ritesh
 */
class DesiredProgramme {
    /**
     *
     * @var type Programme
     */
    private $major1;
    /**
     *
     * @var type Programme
     */
    private $major2;
    /**
     *
     * @var type Programme
     */
    private $minor1;
    /**
     *
     * @var type Programme
     */
    private $minor2;
    /**
     *
     * @var type string
     */
    private $areaOfInterest;
    
    function __construct($major1, $major2=null, $minor1=null, $minor2=null, $areaOfInterest="") {
        $this->major1 = $major1;
        $this->major2 = $major2;
        $this->minor1 = $minor1;
        $this->minor2 = $minor2;
        $this->areaOfInterest = $areaOfInterest;
    }
    
    public function getMajor1() {
        return $this->major1;
    }

    public function setMajor1($major1) {
        $this->major1 = $major1;
    }

    public function getMajor2() {
        return $this->major2;
    }

    public function setMajor2($major2) {
        $this->major2 = $major2;
    }

    public function getMinor1() {
        return $this->minor1;
    }

    public function setMinor1($minor1) {
        $this->minor1 = $minor1;
    }

    public function getMinor2() {
        return $this->minor2;
    }

    public function setMinor2($minor2) {
        $this->minor2 = $minor2;
    }

    public function getAreaOfInterest() {
        return $this->areaOfInterest;
    }

    public function setAreaOfInterest($areaOfInterest) {
        $this->areaOfInterest = $areaOfInterest;
    }
    
    public function getProgrammeList(){
        $list = array();
        if ($this->major1 != null) $list[] = $this->major1;
        if ($this->major2 != null) $list[] = $this->major2;
        if ($this->minor1 != null) $list[] = $this->minor1;
        if ($this->minor2 != null) $list[] = $this->minor2;
        return $list;
    }

}

?>
