/*

Below we will define an n-interesting polygon. Your task is to find the area of a polygon for a given n.

Example

For n = 2, the output should be
shapeArea(n) = 5;

For n = 3, the output should be
shapeArea(n) = 13.


*/


function adjacentElementsProduct($inputArray) {
    
    $size = count($inputArray);
    $o = [];
	
	
    for($i=0;$i<$size-1;$i++){
        $o[] = $inputArray[$i] * $inputArray[$i+1];
    }
	
    return max($o);
}
