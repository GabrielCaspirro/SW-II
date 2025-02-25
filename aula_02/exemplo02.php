<?php
   $vetor = ["Anderson", "Cintia", "Etec"];
   //var_dump($vetor);

   $qtde = count($vetor);
   echo $qtde."<br>";

   for($i = 0; $i < $qtde; $i++){
    echo $vetor[$i]."<br>";
   }
?>