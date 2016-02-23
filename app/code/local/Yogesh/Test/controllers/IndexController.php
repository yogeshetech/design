<?php

class Yogesh_Test_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        
      
      //Insert Data  
        if(isset($_POST['submit'])){
            
               $data = array(
            "title" => $_POST['title'],
            "filename" => $_POST['filename'],
            "content" => $_POST['contents'],
            "status" => $_POST['status'],
            "created_time " => $_POST['time1'],
            "update_time " => $_POST['time2']
        );
            
            
        $model = Mage::getModel('test/test')->insertData($data);
        try {
           // $id = $model->save()->getId();
            echo "Data inserted successfully";
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
           Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        } catch (Exception $e) {
            echo $e->getMessage();
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
           Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        }
        }
        
        
         
        // Delete Data
        
        $id = $this->getRequest()->getParam('id');
        if (!empty($id)) {
            $model = Mage::getModel('test/test')->deleteData($id);
            try {
               // $model->setId($id)->delete();
                echo "Data deleted successfully.";
                $url = 'http://127.0.0.1/etechmagento/index.php/test';
                Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            } catch (Exception $e) {
                echo $e->getMessage();
                $url = 'http://127.0.0.1/etechmagento/index.php/test';
                Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            }
        }
       
        
        
        
        
          $edit_id = $this->getRequest()->getParam('edit_id');
        if (isset($_POST['update'])) {
       

        $data = array(
            "title" => $_POST['title'],
            "filename" => $_POST['filename'],
            "content" => $_POST['contents'],
            "status" => $_POST['status'],
            "created_time " => $_POST['time1'],
            "update_time " => $_POST['time2']
        );
        
         
        $model = Mage::getModel('test/test')->load($edit_id)->addData($data);
        try {
           $model->setId($edit_id)->save();
            echo "Data updated successfully.";
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        } catch (Exception $e) {
            echo $e->getMessage();
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        }
    }
              
        
        
        
        
        
        
        
        
        
        
        
        
        $this->loadLayout();
        $this->renderLayout();
        
   
        
        
        
        
        
        
        
        
        
        
    }

        

}

