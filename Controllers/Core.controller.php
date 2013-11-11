<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Core Manager Controller
 * 
 * @author ritesh
 */
class Core {
    /**
     *
     * @var type string
     * Holds the First Major choice of the user
     */
    private $major1;
    /**
     *
     * @var type string
     * Holds the Second major choice of the user
     */
    private $major2;
    /**
     *
     * @var type string
     * Holds the First minor choice of the user
     */
    private $minor1;
    /**
     *
     * @var type string
     * Holds the Second minor choice of the user
     */
    private $minor2;
    
    
    /**
     *
     * @var type Authentication Object
     * Holds the authentication controller
     */
    private $Authentication;
    /**
     *
     * @var type CourseSelector Object
     * Holds the CourseSelector controller
     */
    private $CourseSelector;
    /**
     *
     * @var type Validator Object
     * Holds the Validator Object
     */
    private $Validator;
    /**
     *
     * @var type UserInterface Object
     * Holds the UI object
     */
    private $UserInterface;
    
    
    /**
     *
     * @param type array $function 
     * Array Describes the controller and the method in the controller
     */
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
