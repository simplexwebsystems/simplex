<?php
/**
 * Template implements methods for use as a storage facility various data.
 * Through the implementation of interfaces "ArrayAccess" and "Iterator"
 * allows drawn to the descendants of both the arrays.
 * Also implemented a pseudo-property, or the magic methods.
 */

ACCESS || die("DIRECT ACCESS DENIED!"); // prohibits the direct execution of a file

class Container implements ArrayAccess, Iterator
{
    protected $__container = array(); //storage for the values ​​of the pseudo-properties.
    
    /**
     * Get the array element which is currently set to its index.
     * @return var 
     */
    public function current()
    {
        return current($this->__container);
    }
    
    /**
     * Get the key element of the array which is currently set to its index.
     * @return int || string 
     */
    public function key()
    {
        return key($this->__container);
    }
    
    /**
     * Advance the internal array pointer of an array
     * @return var the array value in the next place that's pointed to by the internal array pointer
     * or FALSE if there are no more elements.
     */
    public function next()
    {
        return next($this->__container);
    }
    
    /**
     * Set the internal pointer of an array to its first element 
     */
    public function rewind()
    {
        reset($this->__container);
    }
    
    /**
     * Checks if current position is valid :)
     * @return boolean
     */
    public function valid()
    {
        return true;
    }
    
    /**
     * Determine if a element is set and is not NULL
     * @param string $offset
     * @return boolean 
     */
    public function offsetExists($offset)
    {
        return isset($this->__container[$offset]);
    }
    
    /**
     * Gets the value of the array element by key.
     * @param string $offset
     * @return var || boolean 
     */
    public function offsetGet($offset)
    {
        if($this->offsetExists($offset))
        {
            return $this->__container[$offset];
        }
        else {
            return false;
        }
    }
    
    /**
     * Sets the value of the array element.
     * @param string $offset
     * @param var $value 
     */
    public function offsetSet($offset, $value)
    {
        if($this->offsetExists($offset))
        {
            $this->__container[$offset] = $value;
        }
    }
    
    /**
     * Unset a tlement by key
     * @param string $offset 
     */
    public function offsetUnset($offset)
    {
        if($this->offsetExists($offset))
        {
            unset($this->__container[$offset]);
        }
    }
}