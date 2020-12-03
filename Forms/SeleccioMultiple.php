<?php
//visusi corrections - OK
// POST: No mostra res a nes navegador
// GET: Mostra contingut a nes navegador
      echo "$_GET[nom] <br>";
      echo "$_GET[email] <br>";

      foreach ($_GET['navegadors'] as $opcio)
                      echo $opcio . "\n";
?>
