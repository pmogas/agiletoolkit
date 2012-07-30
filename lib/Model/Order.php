<?php
class Model_Order extends Model_Table {
  public $table='order';
  function init(){
    parent::init();
 
    $this->hasOne('Item');
    $this->addField('amount')->type('int');
    $this->addField('is_completed')->type('boolean');
  }
}