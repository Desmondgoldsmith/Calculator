<?php 
 
 class calc {
    //  public $num1;
    //  public $num2;
    //  public $op;
    public function __construct($num1,$num2,$op)
    {
       $this->num1 = $num1;
       $this->num2 = $num2;
       $this->op = $op;
    }
    public function compute(){
         switch($this->op){
             case '+':
               $compute =  $this->num1+$this->num2;
               break;
               case '-';
               $compute =  $this->num1 - $this->num2;
               break;
               case '*';
               $compute =  $this->num1 * $this->num2;
               break;
               case '/';
               $compute =  $this->num1 / $this->num2;
               break;
                default:
              $compute = "INVALID INPUT";
                break;
    }
    return $compute;
 }
}