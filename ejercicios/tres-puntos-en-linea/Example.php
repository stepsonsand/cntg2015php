<?php

//Comprobar que ArePointsInline funciona correctamente

require 'ArePointsInline.php';

$point1 = array("x" => 3, "y" =>5);
$point2 = array("x" => 5, "y" =>5);
$point3 = array("x" => 7, "y" =>5);

if(ArePointsInline($point1, $point2, $point3))
    echo "The points (".$point1["x"].",".$point1["y"]."), (".$point2["x"].",".$point2["y"]."), and (".$point3["x"].",".$point3["y"].") belongs to the same line.<br/>";
else
    echo "The points (".$point1["x"].",".$point1["y"]."), (".$point2["x"].",".$point2["y"]."), and (".$point3["x"].",".$point3["y"].") not belongs to the same line.<br/>";

$point1 = array("x" => 3, "y" =>5);
$point2 = array("x" => 5, "y" =>4);
$point3 = array("x" => 7, "y" =>5);

if(ArePointsInline($point1, $point2, $point3))
    echo "The points (".$point1["x"].",".$point1["y"]."), (".$point2["x"].",".$point2["y"]."), and (".$point3["x"].",".$point3["y"].") belongs to the same line.<br/>";
else
    echo "The points (".$point1["x"].",".$point1["y"]."), (".$point2["x"].",".$point2["y"]."), and (".$point3["x"].",".$point3["y"].") not belongs to the same line.<br/>";
