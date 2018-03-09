/*

Given an array of numbers, determine whether the sum of all of the numbers is odd or even.

Give your answer in string format as 'odd' or 'even'.

If the input array is empty consider it as: [0] (array with a zero).

*/


function odd_or_even(array $a): string {
    $sum = 0;
    for($i=0;$i<count($a);$i++){
      $sum+= $a[$i];
    }
    
    return ($sum%2==0) ? 'even' : 'odd';
}