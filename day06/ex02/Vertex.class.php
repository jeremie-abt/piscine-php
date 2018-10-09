<?php

require_once ('Color.class.php');

Class Vertex {
    static $verbose = FALSE;

    private $_x;
    private $_y;
    private $_z;
    private $_w = 1;
    private $_color;

    function __construct ( array $kwarray) {
        if ( array_key_exists('x', $kwarray) )
            $this->_x = $kwarray['x'];
        if ( array_key_exists('y', $kwarray) ) {
            $this->_y = $kwarray['y'];
        }
        if ( array_key_exists('z', $kwarray) ) {
            $this->_z = $kwarray['z'];
        }
        if ( array_key_exists('w', $kwarray) ) {
            $this->_w = $kwarray['w'];
        }
        if ( array_key_exists('color', $kwarray) ) {
            $this->_color = $kwarray['color'];
        }
        else {
            $new_Color = new Color( array( 'red' => 255, 'blue' => 255, 'green' => 255) ); 
            $this->_color = $new_Color;
        }
        if (self::$verbose === TRUE)
            printf ("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3u, green: %3u, blue: %3u ) ) Constructed." . PHP_EOL , $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
    }

    function __destruct () {
        printf ("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3u, green: %3u, blue: %3u ) ) Destructed." . PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue );
    }

    function __toString () {
        if (self::$verbose === False)
            return sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f)", $this->_x, $this->_y, $this->_z, $this->_w); 
        else
            return sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3u, green: %3u, blue: %3u ) )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
    }

    static function doc () {
        return (file_get_contents("Vertex.doc.txt") . PHP_EOL);
    }
}