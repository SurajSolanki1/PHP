<?php
    
    function area($r,$h)
    {
       $a=2*3.14*$r*$h+2*3.14*$r*$r;

    echo"<br>area of cyliendar=".$a;
    }
    function volume($r,$h)
    {
        $v=3.14*$r*$r*$h;

  echo("<br>volume of cyliendar=".$v);

    }

area(3.5,2.8);
volume(3.5,2.8);
 
?>