<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentRecordInterface
 *
 * @author ritesh
 */
class StudentRecordInterface extends ExternalInterface {
    /**
     *
     * @var type UserCoursePasses
     */
    private $userPasses;
    
    public function callExternal($user){
        $function = $user;
        if(parent::callExternal($function) != NULL){
            if($this->parseJSONToUserPass() != NULL){
                return $this->userPasses;                
            }
            else {
                return $this->getErrors();
            }
        }
        else {
            return $this->getErrors();
        }
    }
    
    private function parseJSONToUserPass(){
        
    }

}

?>
