<?php
class Model_Item extends Model_Table {
  public $table='item';
  function init(){
    parent::init();
 
    $this->addfield('price');
    $this->addfield('name');
     
    $cat = $this->leftJoin('category');
    $cat->addField('category_name','name');
 
 
    $this->hasMany('Order');
    $this->hasMany('Order_Completed');
 
    $this->addExpression('successful_orders')
      ->set($this->refSQL('Order_Completed')
      ->sum('amount'));
  }
}