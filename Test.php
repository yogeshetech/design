<?php

class Yogesh_Test_Block_Test extends Mage_Core_Block_Template {

    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

     public function fatchData1()     
      { 
         
        //$model= $this->fatchData();
          $model = Mage::getModel('test/test')->getCollection();
        return $model;
     }
     
    //	$model = Mage::getModel('test/test')->getCollection();
    //     return $model;
    //  }



    public function deleteData() {
        $id = $this->getRequest()->getParam('id');
        if (!empty($id)) {
            $model = Mage::getModel('test/test');
            try {
                $model->setId($id)->delete();
                echo "Data deleted successfully.";
                $url = 'http://127.0.0.1/etechmagento/index.php/test';
                Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            } catch (Exception $e) {
                echo $e->getMessage();
                $url = 'http://127.0.0.1/etechmagento/index.php/test';
                Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            }
        }
    }

    public function insertData() {
        $data = array(
            "title" => $_POST['title'],
            "filename" => $_POST['filename'],
            "content" => $_POST['contents'],
            "status" => $_POST['status'],
            "created_time " => $_POST['time1'],
            "update_time " => $_POST['time2']
        );

        $model = Mage::getModel('test/test')->setData($data);
        try {
            $id = $model->save()->getId();
            echo "Data inserted successfully";
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        } catch (Exception $e) {
            echo $e->getMessage();
            $url = 'http://127.0.0.1/etechmagento/index.php/test';
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
        }
    }

    public function updateData() {

        $edit_id = $this->getRequest()->getParam('edit_id');
        $updata_Data = Mage::getModel('test/test')->load($edit_id);

        return $updata_Data;
    }

    public function updateNew() {

        $edit_id = $this->getRequest()->getParam('edit_id');
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

}

?>