<?php
  $cadena = "abcdefgh";
  $res = ereg("^abc",$cadena);
  print($res);

  $cadena2 = "costos abc";
  $res = ereg("abc$",$cadena2);
  print($res);

  $cadena = ereg_replace("[^df]","g",$cadena);
  print $cadena;
  $cadena = ereg_replace("^abc","xyz",cadena);
  print $cadena;

  $fecha = "02/12/1995";
  $fecha = "02-12-1995";
  list($day,$manth,$year) = split("[/-]",$fecha);
  print $day."<BR/>";
  print $month. "<BR/>";
  print $year. "<BR/>";

       $cadena3="cantttta";
       $res=ereg("cant*a",$cadena3);
       print $res;
    $cadena4="ac";
    $res=ereg("ab+c",$cadena4);
    print $res;
    $cadena5="cant a";
    $res=ereg("cant?a",$cadena5);
    print $res;
?>