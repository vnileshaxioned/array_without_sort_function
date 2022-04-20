<?php

// original array
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// separate the values from original array
$values = array();
foreach($ceu as $k => $v)
{
  $v = $ceu[$k];
  $values[] = $v;
}

// sort the separated values array
for ($i = 0; $i < count($values); $i++) {
  $j = $i;
  while ($j > 0 && $values[$j] < $values[$j-1]) {
      $tmp = $values[$j-1];
      $values[$j-1] = $values[$j];
      $values[$j] = $tmp;
      $j--;
  }
}

/* 
match both the array key and value (sorted values array as well as the original array)
And echo the country from original array and capital from sorted values array
*/
foreach($values as $k => $v)
{
  foreach($ceu as $country => $capital)
  {
    if($v == $capital)
    {
      echo 'The capital of '.$country.' is '.$v.'<br>';
    }
  }
}

?>