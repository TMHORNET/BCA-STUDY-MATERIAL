<?php
function __autoload($class_name) {
    require_once $class_name . '.php';
}

$objRectangle = new rectangle(100,50, "rectangle.gif");
$objSquare = new square(100, "square.gif");
$objTriangle = new triangle(50,100, "triangle.gif");
$objEllipse = new ellipse(50,100, "ellipse.gif");

$arrShapes = array ($objRectangle,$objSquare,$objTriangle,$objEllipse);
foreach ($arrShapes as $objShape){
	$objShape->display();
	$objShape->area();
}
?>
