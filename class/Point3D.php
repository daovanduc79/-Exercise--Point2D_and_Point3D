<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    protected $z=0.0;

    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }

    /**
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public  function setXYZ($x,$y,$z){
        $this->setX($x);
        $this->setY($y);
        $this->setZ($z);
    }

    public function getXYZ(){
        return [$this->getX(),$this->getY(),$this->getZ()];
    }

    public function __toString()
    {
        return "(".$this->getX().",".$this->getY().",".$this->getZ().")";
    }
}