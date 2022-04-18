<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

$keys = array_keys($ceu);


for ($i = 0; $i < count($keys); $i++) {
  $j = $i;
  while ($j > 0 && $keys[$j] < $keys[$j-1]) {
      $tmp = $keys[$j-1];
      $keys[$j-1] = $keys[$j];
      $keys[$j] = $tmp;
      $j--;
  }
}

$sorted =  array();

foreach($keys as $key)
{
  $sorted[$key] = $ceu[$key];
}

foreach($sorted as $x => $y)
{
  echo 'The capital of '.$x.' is '.$y.'<br>';
}

?>