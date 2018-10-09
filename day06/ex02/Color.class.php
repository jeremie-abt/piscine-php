<?php
class Color {

    static $verbose = FALSE;

    public $red = 0;
    public $green = 0;
    public $blue = 0;

    function __construct ( array $kwarray ) {
        if ( array_key_exists( 'rgb', $kwarray) ) {
            $this->blue =  intval(($kwarray['rgb'] & 255)) ;
            $this->green = intval((($kwarray['rgb']) >> 8) & 255 );
            $this->red = intval((($kwarray['rgb']) >> 16) & 255) ;
        }else if ( array_key_exists('red', $kwarray) && array_key_exists('green', $kwarray) && array_key_exists('blue', $kwarray) ) {
            $this->red = intval($kwarray['red']);
            $this->green = intval($kwarray['green']);
            $this->blue = intval($kwarray['blue']);
        }
        if (self::$verbose === TRUE) {
            print("Color( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue." ) constructed." . PHP_EOL);
        }
    }

    function __destruct ( ) {
        if (self::$verbose === TRUE) {
           print("Color( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue." ) destructed." . PHP_EOL);
        }
    }
    
    function add(Color $obj) {
        
        $new_obj = new Color( array( 'red' => $this->red + $obj->red, 'blue' => $this->blue + $obj->blue, 'green' => $this->green + $obj->green) );
        return $new_obj;
    }
    
    function sub($obj) {
        $new_obj = new Color( array( 'red' => $this->red - $obj->red, 'blue' => $this->blue - $obj->blue, 'green' => $this->green - $obj->green) );
        return $new_obj;
    }

    function mult($f) {
        $new_obj = new Color( array( 'red' => $this->red * $f, 'blue' => $this->blue * $f, 'green' => $this->green * $f) );
        return $new_obj;
    }

    function __toString() {
        $red = strval($this->red);
        $green = strval($this->green);
        $blue = strval($this->blue);
       return  strval("Color( red: ".$red.", green: ".$green.", blue: ".$blue." )");
    }

    static function doc() {
        $str = file_get_contents("Color.doc.txt") . PHP_EOL;
        return ($str);
    }
}