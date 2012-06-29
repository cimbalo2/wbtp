<?php
chdir("OCaml");
$fp = fopen('user.ml', 'w');
fwrite($fp, $_POST['s']);
fclose($fp);
$result=shell_exec('ocaml -I +camlp5 camlp5o.cma "./Quotexpander.cmo" nums.cma atp_batch.cmo wrapper.ml;');
$result=explode("\n", $result);
$start=false;
foreach ($result as $line){
  if ($start){
    echo htmlspecialchars($line)."\n";
  }
  if ($line=="Starting examples"){
    $start=true;
  }
}
?>
