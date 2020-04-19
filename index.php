<?php
include_once 'class/Point2D.php';
include_once 'class/Point3D.php';

$point2 = new Point2D(2.5, 3.3);
foreach ($point2->getXY() as $value) {
    echo $value . "_";
}
echo "<br>" . $point2 . "<br>";
$point2->setXY(4.2, 6.1);
echo $point2 . "<br><br>";


$point3 = new Point3D(4.2, 6.1, 5.3);
foreach ($point3->getXYZ() as $value) {
    echo $value . "_";
}
echo "<br>" . $point3 . "<br>";
$point3->setXYZ(5.3, 4.6, 7.3);
echo $point3;