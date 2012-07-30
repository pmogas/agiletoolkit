// lib/Model/Customer.php
 
// lib/Model/DVD.php
class Model_DVD extends Model_Table {
  public $table='dvd';
  function init(){
    parent::init();
 
    $this->addField('code');
 
    $this->hasOne('Movie');
  }
}
