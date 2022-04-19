<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

$values = array_values($ceu);

for ($i = 0; $i < count($values); $i++) {
  $j = $i;
  while ($j > 0 && $values[$j] < $values[$j-1]) {
      $tmp = $values[$j-1];
      $values[$j-1] = $values[$j];
      $values[$j] = $tmp;
      $j--;
  }
}

foreach($values as $value)
{
  $key = array_search($value, $ceu, true);
  echo 'The capital of '.$key.' is '.$value.'<br>';
}

?>