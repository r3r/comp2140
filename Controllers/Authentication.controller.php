<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Satisfies requirements 2.2.1
 * Provides methods to authenticate the user with the external system and retrieve the user's course passes
 *
 * @author ritesh
 */
class Authentication {
    /**
     *
     * @var type User 
     * Holds the User Object
     * 
     */
    private $user;
    /**
     *
     * @var type boolean
     * Holds whether the user was successfully logged in or not
     */
    private $session;
    /**
     *
     * @var type StudentRecordInterface
     */
    private $StudentRecordInterface;
    
    /**
     *
     * @param type string $uId User Id
     * @param type string $password Password
     * @return type User Object/Null on success User Object; on failure Null
     */
    public function authenticateAndRetrieveRecord($uId, $password){
        $this->user = $this->StudentRecordInterface->callExternal(array($uId, $password));
        if(!ExternalInterface::checkError($error)){ // Change THIS later
            $this->session = true;
            return $user;
        }
        else {
            return NULL;
        }        
    }
    
    /**
     * Getter for User object
     * @return type User Object
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Getter for Session Attribute
     * @return type boolean
     */
    public function getSession() {
        return $this->session;
    }
    
    /**
     * Setter for Session Attribute
     * @param type boolean $session 
     */
    public function setSession($session) {
        $this->session = $session;
    }


}

?>
