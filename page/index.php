<?php
class page_index extends Page {
    function init(){
        parent::init();
        $page=$this;

        // Adding view box with another view object inside with my custom HTML template
        $this->add('View_Info')->add('View',null,null,array('view/myinfobox'));

        // Paste any Agile Toolkit examples BELOW THIS LINE. You can remove what I have here:

        // Adding a View and chaining example
        $this->add('H1')->set('Hello World from your own copy of Agile Toolkit');

        // Assign reference to your object into variable $button
        $button = $page->add('Button')->setLabel('Refresh following text with AJAX');

        // You can store multiple references, different views, will have different methods
        $lorem_ipsum = $this->add('LoremIpsum')->setLength(1,200);

        // Bind button click with lorem_ipsum text reload
        $button->js('click',$lorem_ipsum->js()->reload());


		$this->add('Form')->addField('line','foo')->setNotNull();

        // Oh and thanks for giving Agile Toolkit a try! You'll be excited how simple
        // it is to use.
$contact_form=$page->add('Form_ContactForm');
$contact_form->addButton('Cancel');
        $button=$page->add('Button')
    ->setLabel('Boto')
    ->js('click')
        ->univ()
        ->alert('My First Button');
        $button=$page->add('Button')
    ->setLabel('Enrere')
    ->js('click')
        ->univ()
        ->alert('Enrere');
        $button=$page->add('Button')
    ->setLabel('Play')
    ->js('click')
        ->univ()
        ->alert('Play');
        $button=$page->add('Button')
    ->setLabel('AR')
    ->js('click')
        ->univ()
        ->alert('AR');
        $button=$page->add('Button')
    ->setLabel('Stop')
    ->js('click')
        ->univ()
        ->alert('Stop');
        $page->add('MyButton');
      
$col=$page->add('Columns');
$left=$col->addColumn(2)->add('View_SlotMachine');
$right=$col->addColumn(2)->add('View_SlotMachine');

$page->add('Button')->setLabel('Pull')
    ->js('click', $col->js()->reload());    

$grid=$page->add('Grid');
$grid->setModel('Item');
 
$form = $page->add('Form');
$form->setModel('Order_Completed');
$form->addSubmit();
if($form->isSubmitted()){
  $form->update();
  $form->js(null,$page->js()->reload())->univ()->successMessage('Order added')->execute();
}  
    }
}
