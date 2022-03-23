<?php
// Array with names
$a[] = "How to connect Database with HTML?";
$a[] = "How to learn JS?";
$a[] = "How to get ATM number?";
$a[] = "Diana";
$a[] = "What is the value of sin(90^degree)?";
$a[] = "Who is the father of C?";
$a[] = "Whom do you like the most?";
$a[] = "Where am I right now?";
$a[] = "Play Yuvan songs";
$a[] = "History of Tamilnadu";
$a[] = "Battle of Panipet";
$a[] = "Geography of Asia";
$a[] = "Nile river";
$a[] = "History of Lake Victoria";
$a[] = "Habitat of Penguins";
$a[] = "Cristiano Ronaldo";
$a[] = "Pulwama Attack";
$a[] = "Dr A.P.J Abdul Kalam";
$a[] = "Tamilnadu Politics";
$a[] = "Cook with Comali Season 3";
$a[] = "English Stories";
$a[] = "Sivangi Krishnakumar";
$a[] = "S.P.Balasubramanium";
$a[] = "Bannari Amman institute of Technology";
$a[] = "Sathyamangalam Forest";
$a[] = "Salem Aluminium Industries";
$a[] = "Salem Steel Plant";
$a[] = "Kashmir History";
$a[] = "Is it correct ?";
$a[] = "Queen Rani Lakshmi Bai";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = " Suggestions:  ";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<br> $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>