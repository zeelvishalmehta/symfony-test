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
     * @Route("/")
     * @Method({"GET"})
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
     * @Route("/")
     * @Method({"GET"})
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
$palindromes = array('anna', 'Bark');
echo '<b><u> Palindrome Function Output:</u></b><br>';
foreach ($palindromes as $palindrome) {
   if($checker_controller->isPalindrome($palindrome))
   {
       echo '<font color=red><b>'.$palindrome.' </b></font>';
       echo 'true';
       echo "<br>";
   }
   else
   {
       echo '<font color=red><b>'.$palindrome.' </b></font>';
       echo 'false';
       echo "<br>";
   }
}
echo "<br>";
$anagram_word = 'coalface';
$anagram_comparison = 'cacao elf';
echo "<b><u> Anagram Function Output:</u></b><br>";

if(($checker_controller->isAnagram($anagram_word,$anagram_comparison))){
    echo '<font color=red><b>'.$anagram_word.', '.$anagram_comparison.'</b></font> ';
    echo 'true';
    echo "<br>";
}
else
{
    echo '<font color=red><b>'.$anagram_word.', '.$anagram_comparison.'</b></font> ';
    echo 'false';
    echo "<br>";
}

echo "<br>";
$anagram_word1 = 'coalface';
$anagram_comparison1 = 'dark elf';
if(($checker_controller->isAnagram($anagram_word1,$anagram_comparison1))){
    echo '<font color=red><b>'.$anagram_word1.', '.$anagram_comparison1.'</b></font> ';
    echo 'true';
    echo "<br>";
}
else
{
    echo '<font color=red><b>'.$anagram_word1.', '.$anagram_comparison1.'</b></font> ';
    echo 'false';
    echo "<br>";
}


echo "<br>";
echo "<br>";
$pangrams = array('The quick brown fox jumps over the lazy dog', 'The British Broadcasting Corporation (BBC) is a British public service broadcaster.');
echo '<b><u> Pangram Function Output:</u></b><br>';
foreach ($pangrams as $pangram) {
    
    if(($checker_controller->isPangram($pangram)))
    {
        echo '<font color=red><b>'.$pangram.'.</b></font>  ';
        echo 'true';
        echo "<br>";
    }
    else
    {
        echo '<font color=red><b>'.$pangram.'.</b></font>  ';
        echo 'false';
        echo "<br>";
    }
	 
}
