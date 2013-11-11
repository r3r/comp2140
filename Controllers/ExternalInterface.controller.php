<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExternalInterface
 *
 * @author ritesh
 */
class ExternalInterface {
    private $url;
    protected $errors;
    protected $data;
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
