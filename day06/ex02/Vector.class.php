<?php

require_once ("Color.class.php");
require_once ("Vertex.class.php");

class Vector {

    static $verbose = FALSE;

/*    private $_magn_x;
    private $_magn_y;
    private $_magn_z;
    private $_magn_w;*/
    private $_dest;
    private $_orig;

    public function __Construct (array $kwarray) {
        if ( array_key_exists( 'dest', $kwarray ) ) {
            $this->_dest = $kwarray['dest'];
        }
        else {
            exit ('Class Vector need an assoc_array with the orig key set' . PHP_EOL);
        }
        if ( array_key_exists('orig', $kwarray) ) {
            $this->_orig = $kwarray['orig'];
        }
        else {
            $this->_orig = new Vertex( array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1) );
        }
    }

    function __toString () {
        return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )" . PHP_EOL, $this->_dest->_x, $this->_dest->y, $this->_dest->_z, $this->_dest->_w);
    }

    private function GetMagn_x () {
        return ($this->_dest->_magn_x);
    }
    
    private function GetMagn_y () {
        return ($this->_dest->_magn_y);
    }
    
    private function GetMagn_z () {
        return ($this->_dest->_magn_z);
    }
    
    private function GetMagn_w () {
        return ($this->_dest->_magn_w);
    }
    
}