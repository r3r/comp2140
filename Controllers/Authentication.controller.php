<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Authentication
 *
 * @author ritesh
 */
class Authentication {
    private $user;
    private $session;
    /**
     *
     * @var type StudentRecordInterface
     */
    private $StudentRecordInterface;
    
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
    public function getUser() {
        return $this->user;
    }


    public function getSession() {
        return $this->session;
    }

    public function setSession($session) {
        $this->session = $session;
    }


}

?>
