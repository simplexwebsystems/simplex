<?php
/**
 * The implementation of the singleton pattern.
 * Guarantees the existence of a single application instance inherited from Singleton.
 */

ACCESS || die("DIRECT ACCESS DENIED!"); // prohibits the direct execution of a file

abstract class Singleton
{
    protected static $instance = array(); // array of instances of children
    
    protected function __construct(){}    // prohibits the creation of instances of the class
    protected function __clone(){}        // prohibits cloning instance
    
    /**
     * Get a single instance of the class
     * @return Singleton
     */
    public static function i()
    {
        $class = get_called_class();
        if(self::$instance[$class]) self::$instance[$class] = new $class;
        return self::$instance[$class];
    }   
}