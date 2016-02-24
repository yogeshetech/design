<?php

class Yogesh_Test_Model_Test extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('test/test');
    }

    public function insertData($row_array) {
        return $this->setData($row_array)->save();
    }

    public function deleteData($id) {
        return $this->setId($id)->delete($id);
    }

    
    
    public function myData() {

        $model = $this->getCollection();
        // $data= $this->getCollection($data);
        return $model;
    }

}

?>
