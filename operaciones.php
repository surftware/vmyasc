<?php
$n=5;
$salto=$n-1;
$lineaInterna=$n-2;

if($n==0)
{
  echo "Error";
}

else
{

  for($salto;$salto>0;$salto--)
  {

    echo "x";
    for($lineaInterna=$n-2;$lineaInterna>0;$lineaInterna--)
    {
      echo "_";
    }
    echo "x";
    echo "<br>";
  }
}

 ?>
