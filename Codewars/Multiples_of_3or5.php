/*

If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.

*/




function solution($number){
$sum = 0;

for($x=$number-1;$x>0;$x--){

	if($x%3 == 0 || $x%5==0){
	
		$sum+=$x;
	}
}

return $sum;
}