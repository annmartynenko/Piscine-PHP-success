<?php
Class Vertex
{
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;
    static $verbose = False;

    function __construct(array $data)
    {
        if (array_key_exists('x', $data) && array_key_exists('y', $data) && array_key_exists('z', $data)) {
            $this->_x = $data['x'];
            $this->_y = $data['y'];
            $this->_z = $data['z'];
        }
        if (array_key_exists("w", $data) && !empty($data["w"])) {
            $this->_w = $data['w'];
        } else
            $this->_w = 1.0;
        if (array_key_exists('color', $data)) {
            $this->_color = $data['color'];
        }
        else {
                $this->_color = new Color(array('rgb' => 0xffffff));
        }
        if (self::$verbose == True)
            printf("Vertex( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f, %s ) constructed.\n",
                $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
    }

    function __toString() {
        if (Self::$verbose)
            return sprintf("Vertex( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f, %s )",
        $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
        else
            return sprintf("Vertex( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
    }

    static function doc()
    {
        $text = file_get_contents('Vertex.doc.txt');
        print($text."\n");
    }

    function __destruct()
    {
        if (Self::$verbose == True)
            printf("Vertex( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f, %s ) destructed.\n",
                $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
    }
    public function getX(){
        return $this->_x;
    }
    public function setX(){
        return $this->_x;
    }
    public function getY(){
        return $this->_y;
    }

    public function setY(){
        return $this->_y;
    }
    public function getZ(){
        return $this->_z;
    }

    public function setZ(){
        return $this->_z;
    }
    public function getW(){
        return $this->_w;
    }

    public function setW(){
        return $this->_w;
    }
    public function getColor(){
        return $this->_color;
    }

    public function setColor(){
        return $this->_color;
    }
}

?>