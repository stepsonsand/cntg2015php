<?php

//Ejercicio: comprobar si tres puntos pertenecen a una misma línea.
//x-x1/x2-x1 = y-y1/y2-y1

/**
 * 
 * Check if three points belongs to the same line.
 * The points will be passed as an array in this manner:
 *      $point = array("x" => $x, "y" => $y);
 * 
 * @param array $point1
 * @param array $point2
 * @param array $point3
 * @return boolean
 */

function ArePointsInline($point1,$point2,$point3)
{
    $y = (($point3["x"] - $point1["x"]) * ($point2["y"] - $point1["y"]) / ($point2["x"] - $point1["x"])) + $point1["y"];
    
    if ($y == $point3["y"])
        return true;
    else
        return false;
}
