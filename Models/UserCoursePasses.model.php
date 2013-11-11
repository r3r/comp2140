<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserCoursePasses
 *
 * @author ritesh
 */
class UserCoursePasses extends Courses{
    //put your code here
    private $user;
    function __construct($id = null, $courseList=array(), $user) {
        parent::__construct($id, $courseList);
        $this->user = $user;
    }
    
    public function getUser() {
        return $this->user;
    }
    


}

?>
