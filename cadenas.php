<?php
  $email="juanperez@hotmail.com";
  if(ereg("^[^@]+@[^@]+\.[^@ .]+$",$email))
  {print("el email es correcto");}
  else
  {print("el email es incorrecto");}

?> 