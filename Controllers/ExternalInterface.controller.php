<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Base class for all out of system communication
 * 
 *
 * @author ritesh
 */
class ExternalInterface {
    /**
     *
     * @var type string Base url - Holds the base url for calls
     */
    private $url;
    /**
     *
     * @var type array - Errors
     */
    protected $errors;
    /**
     *
     * @var type JSON array
     */
    protected $data;
    
    function __construct($url = "") {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function setErrors($errors) {
        $this->errors = $errors;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public function callExternal($function){
       
    }
    
    public static function checkErrors($error){
        return isset($error['ExternalInterfaceError']);
    }

}

?>
