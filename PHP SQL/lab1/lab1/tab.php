<?php
   $tab = [];
   for($i=0;$i<10;$i++){
       $tab[$i]=rand(0,100);
   }

   if (in_array(42,$tab)){
       echo "Oui 42 est dans le tableau";
   }else{
       echo "non\n";
   }

   var_dump($tab);

?>