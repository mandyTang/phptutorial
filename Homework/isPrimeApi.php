<?php
/**
 * Author: https://gist.github.com/lawlesst/2731888
 * 	Check to see if a given integer is prime.
 *
 * 	Adapted from this Python implementation http://pthree.org/2007/09/05/prime-numbersin-	 python/
 *   This list of the first 10,000 prime numbers is also helpful http://primes.utm.edu/lists/small/10000.txt
 *
 *	 @param int $number the number to check to see if it is prime.
 *	 @return boolean true if the number is prime, false if not.
 */
function isPrime($number)
{
    $n = abs($number);
    $i = 2;
    while ($i <= sqrt($n))
    {
        if ($n % $i == 0) {
            return false;
        }
        $i++;
    }
    return true;
}
/**
 * 	Given a positive integer, find the next 10 prime numbers that are equal to it or greater.
 *
 *	 @param int $number the number to find the next time prime numbers.
 *	 @return array an array of the next ten prime numbers.
 */
function nextPrimes($number) {
    $nextP = array();
    //Keep looping until we have an array of 10 prime numbers.
    while ((sizeof($nextP) <= 9) and ($number <= 100000))
    {
        if (isPrime($number) == true) {
            $nextP[] = $number;
        }
        $number++;
    }
    return $nextP;
}
/**
 * 	Given a value, returns true if the value is an integer and within the provided range - 1 to 100,000.
 *	Adapted from dave dot marr's contribution in the PHP docs - http://php.net/manual/en/function.is-numeric.php
 *
 *	 @param string $val the raw value submitted
 *	 @return boolean true if the value is a positive integer, false if note.
 */
function checkInRange($val) {
    //remove any commas that user may have provided
    $val = str_replace(',', '', $val);
    if (is_numeric($val)) {
        if (is_int($val + 0)) {
            if (($val > 0) && ($val <= 100000)) {
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
}
?>