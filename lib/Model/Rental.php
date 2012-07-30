<?php
class Model_Rental extends Model_Table {
  public $table='rental';
  function init(){
    parent::init();
 
//    $this->hasOne('Customer');
    $this->join('customer')->addField('name','Full_name');
//    $this->hasOne('DVD');
    $this->join('DVD')->addField('titol','code');
 
    $this->addField('date_rented')->defaultValue(date('Y-m-d'))->type('date');
    $this->addField('date_returned')->type('date');
         
    $this->addField('is_returned')->type('boolean')->defaultValue(false);
  }
  function returnMovie(){
    $this
      ->set('date_returned',date('Y-m-d'))
      ->set('is_returned',true)
      ->save();
  }
}

