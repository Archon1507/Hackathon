<?php
function ncd($x, $y) { 
  $cx = strlen(gzcompress($x));
  $cy = strlen(gzcompress($y));
  return (strlen(gzcompress($x . $y)) - min($cx, $cy)) / max($cx, $cy);
}  
$x= ncd('today is a bad day', 'today is a bad day');
echo $x;
if($x<0.5)
	echo "Your Text is Plagiarized";
print(ncd('this is a test', 'this text is completely different'));


?>