<?php
class Model_Customer extends Model_Table {
  public $table='customer';
     
  function init(){
    parent::init();
 
    $this->addField('Full_name');
    $this->addField('email');
  }
}
