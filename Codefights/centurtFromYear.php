/*

Given the string, check if it is a palindrome.

Example

For inputString = "aabaa", the output should be
checkPalindrome(inputString) = true;
For inputString = "abac", the output should be
checkPalindrome(inputString) = false;
For inputString = "a", the output should be
checkPalindrome(inputString) = true.


*/


function checkPalindrome($inputString) {
    
    if(strlen($inputString) <=1 ){
        return true;
    }else{
        return (strrev($inputString) == $inputString) ? true : false;
    }
}
