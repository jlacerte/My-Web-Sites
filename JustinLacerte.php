<?php

class JustinLacerte
{
  public $Mode = "default";
  //
  public function SetMode($value)
  {
    $this->Mode = $value;
    //echo "Mode changed\n";
    $this->FlushAll();
  }
  //
  public function GetMode()
  {
    echo $this->Mode;
  }

  public function FlushAll()
  {
    //echo $this->Mode;
    // sleep for 10 seconds
    echo "FlushAll()";
    for ($i=0; $i < 10; $i++) {
      # code...
        sleep(1);
        echo ".";

    }


  }




}


$loki = new JustinLacerte;
echo "Current mode: ";
$loki->GetMode();
echo "\n";

$loki->SetMode("concentration");
echo "Current mode: ";
echo $loki->Mode;
echo "\n";
var_dump($loki);





?>
