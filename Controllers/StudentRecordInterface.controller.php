<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Satisfies Requirements 2.2.12
 * Solicits external system for user information
 *
 * @author ritesh
 */
class StudentRecordInterface extends ExternalInterface {
    /**
     *
     * @var type User
     * Holds the User Record solicited
     */
    private $user;
    
    /**
     *
     * @param type array $user uId and Password
     * @return type User Object
     */
    public function callExternal($user){
        $function = $user;
        if(parent::callExternal($function) != NULL){
            if($this->parseJSONtoUser() != NULL){
                return $this->user;                
            }
            else {
                return $this->getErrors();
            }
        }
        else {
            return $this->getErrors();
        }
    }
    
    private function parseJSONToUser(){
        
    }

}

?>
