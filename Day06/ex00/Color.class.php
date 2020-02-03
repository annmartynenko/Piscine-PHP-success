<?php
Class Color{
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	static $verbose = False;

    function __construct(array $rgb){
        if (array_key_exists('rgb', $rgb))
        {
            $this->red = ($rgb['rgb'] >> 16) & 0xFF;
            $this->green = ($rgb['rgb'] >> 8) & 0xFF;
            $this->blue = $rgb['rgb'] & 0xFF;
        }
        elseif (array_key_exists('red', $rgb) && array_key_exists('green', $rgb) && array_key_exists('blue', $rgb))
        {
            $this->red = intval($rgb['red']);
            $this->green = intval($rgb['green']);
            $this->blue = intval($rgb['blue']);
        }
        if (self::$verbose == True)
            printf("Color( red: %3d, green %3d, blue %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    }
	function __toString(){
        return sprintf("Color( red: %3d, green %3d, blue %3d )", $this->red, $this->green, $this->blue);
    }
    static function doc(){
        $text = file_get_contents('Color.doc.txt');
        print($text."\n");
    }
    function add($rgb) {
        return (new Color(array(
            'red' => $this->red + $rgb->red,
            'green' => $this->green + $rgb->green,
            'blue' => $this->blue + $rgb->blue)));
    }
    function sub($rgb){
        return (new Color(array(
            'red' => $this->red - $rgb->red,
            'green' => $this->green - $rgb->green,
            'blue' => $this->blue - $rgb->blue)));
    }
    function mult($rgb)
    {
        return (new Color(array(
            'red' => $this->red * $rgb->red,
            'green' => $this->green * $rgb->green,
            'blue' => $this->blue * $rgb->blue)));
    }
	function __destruct(){
        if (self::$verbose == True)
            printf("Color( red: %3d, green %3d, blue %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }
}
?>