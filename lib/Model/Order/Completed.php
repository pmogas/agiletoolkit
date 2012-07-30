<?php
class Model_Order_Completed extends Model_Order {
  function init(){
    parent::init();
 
    $this->addCondition('is_completed',true);
  }
}