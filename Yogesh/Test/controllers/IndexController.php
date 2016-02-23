<?php

class Yogesh_Test_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        
        
        $this->loadLayout();
        $this->renderLayout();
    }

  

    public function saveAction() {

      echo "Hellodsxbbvdshfbsjdfhbsdkjfh";
        $contact = Mage::getModel('test/test');

    }
        

}
