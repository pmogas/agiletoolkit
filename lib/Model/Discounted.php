<?php
class Model_Item_Discounted extends Model_Item {
  function init(){
    parent::init();
 
    $this->addField('has_discount')->type('boolean');
    $this->addCondition('has_discount',true);
  }
}