<?php
$langage = array('HTML','CSS','Javascript','PHP');
function alpha($code){
  if (is_array($code)==true) {
    sort($code);
  }
  return $code;
}
$sortedarray = alpha($langage);
foreach ($sortedarray as $value) {
  echo $value.'<br />';
}

function concat($code){
  if (is_array($code)==true) {
    $string = implode(' ', $code);
  }
  return $string;
}
echo concat($langage);
?>
