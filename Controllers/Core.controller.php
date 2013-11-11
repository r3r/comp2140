<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author ritesh
 */
class Core {
    private $major1;
    private $major2;
    private $minor1;
    private $minor2;
    
    private $Authentication;
    private $CourseSelector;
    private $Validator;
    private $UserInterface;
    
    public function router($function){
        //Authentication check here
        
        switch ($function){
            case '1': break;
            case '2': break;
            default: break;
        }
    }
}

?>
