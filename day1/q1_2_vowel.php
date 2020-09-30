<!DOCTYPE html>
<html>
<body>
<?php
$word = array("a","b","e","d","i","f");
foreach ($word as $a){
    switch ($a) {
 
     case "a":
          echo "The character $a is a vowel!.<br>";
          break;
        case "e":
          echo "The character $a is a vowel!.<br>";
          break;
        case "i":
          echo "The character $a is a vowel!.<br>";
          break;
        case "o":
          echo "The character $a is a vowel!.<br>";
          break;
        case "u":
          echo "The character $a is a vowel!.<br>";
          break;
        default:   echo "The character $a is a consonant!.<br>";
      }
}
?>




</body>
</html>
