<?php
$str = "Hello I am Pooja";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
  if (in_array(strtolower($str[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str is: $count";
