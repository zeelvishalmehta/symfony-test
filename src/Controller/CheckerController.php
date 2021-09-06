<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CheckerController
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome($word = '' ) : bool
    {
		$string = str_replace(' ', '', $word);

    	//remove special characters
    	$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    	//change case to lower
    	$string = strtolower($string);

    	//reverse the string
    	$reverse = strrev($string);

    	if ($string == $reverse) {
        	return true;
   		 } 
    	
	return false;	
    }
    /**
     * @Route("/checker", name="checker")
     */
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        $word = str_replace(' ','',$word);
        $comparison = str_replace(' ','',$comparison);

		if (strlen($word) != strlen($comparison)) {
            // if not same size then they definitely aren't
            return false;
        }

        $word_chars = str_split($word);
        $comparison_chars = str_split($comparison);
        // sort them...
        sort($word_chars);
        sort($comparison_chars);

        // check if they're exactly the same...
        if($word_chars === $comparison_chars) {
            return true;
        }
        return false;
    }
    /**
     * @Route("/checker", name="checker")
     */
    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public function isPangram(string $phrase) : bool
    {
		$alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');      
		
		$isPangram = false;

         $array = str_split($phrase);             

    foreach ($array as $char) {            

        	if (ctype_alpha($char)) {        
            if (ctype_upper($char)) {        
                $char = strtolower($char);

              }
    $key = array_search($char, $alphabet);
      
	 if ($key !== false) 
	 		{  
		 		unset($alphabet[$key]);
			}

         }

      }

 if (!$alphabet) {
      
        $isPangram = true;
     
	}
 return $isPangram;       

	}

}
$checker_controller = new CheckerController;
$palindromes = array('anna', 'bark');
echo '<b>1) Palindrome Function Output:</b><br>';
foreach ($palindromes as $palindrome) {
    echo $palindrome.': ';
    var_dump($checker_controller->isPalindrome($palindrome));
 	echo "<br>";
}
echo "<br>";
$anagram_word = 'coalface';
$anagram_comparison = 'cacao elf';
echo "<b>2) Anagram Function Output:</b><br>";
echo $anagram_word.', '.$anagram_comparison;
var_dump($checker_controller->isAnagram($anagram_word,$anagram_comparison));
echo "<br>";

echo "<br>";
$pangrams = array('The quick brown fox jumps over the lazy dog', 'The British Broadcasting Corporation (BBC) is a British public service broadcaster.');
echo '<b>3) Pangram Function Output:</b><br>';
foreach ($pangrams as $pangram) {
    echo $pangram.': ';
    var_dump($checker_controller->isPangram($pangram));
	 echo "<br>";
}