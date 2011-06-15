<html>
  <head>
    <script type="text/javascript" src="jquery"></script>

  </head>
  <body>




  </body>
  
</html>

<?php

class Calc {

  public $input;
  public $input2;
  public $output;

  function setInput($int) {
    $this->input = (int) $int;
  
  
  }


    function setInput2($int) {
          $this->input2 = (int) $int;
            
            
            }


  function getResult() {
    $this->output = $this->input * $this->input2;
    return $this->output;
  
  }

}

$calc = new Calc();
$calc->setInput(5);
$calc->setInput2(22);
$CALC->calculate();
echo $calc->getResult();

$calc->output;

?>
