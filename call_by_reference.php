<?php
  function swap(&$a,&$b)
  {
    $t=$a;
    $a=$b;
    $b=$t;
    echo("<br>swap value of a=".$a);
    echo("<br>swap value of b=".$b);
  }
  $a=45;
  $b=78; 
 
  echo("<br> before swap a=".$a);
  echo("<br> before swap b=".$b);

  swap($a,$b);
  echo("<br> <br>after swap a=".$a);
  echo("<br> <br>after swap b=".$b);

 ?>