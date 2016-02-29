<?php

class Etech_Mydata_Model_Mysql4_Mydata extends Mage_Core_Model_Mysql4_Abstract {

    public function _construct() {
        // Note that the mydata_id refers to the key field in your database table.
        $this->_init('mydata/mydata', 'mydata_id');
    }

    public function loadByField() {

        $table = $this->getTable('mydata/profile');
        $table2 = $this->getTable('mydata/user');
        $cond = $this->_getReadAdapter()->quoteInto('profile.user_id = user.user_id', '');
        // $where = $this->_getReadAdapter()->quoteInto('t1.list_id = "?"',123);
        $select = $this->_getReadAdapter()->select()->from(array('profile' => $table))->join(array('user' => $table2), $cond);
        $mydata = $this->_getReadAdapter()->fetchAll($select);


        return $mydata;
    }

}
